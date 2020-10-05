<?php

include_once "../bd.php";

# Inicia a sessão.
session_start();

$codLocacao = '';
$codCliente = '';

#Função JavaScript para alerta:
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

$cpfCliente = $_SESSION['cpf'];

#Recebe parâmetros para inserção no banco:
$placaAutomovel = $_POST['placa'];
$dataLocacao = $_POST['dataLocacao'];
$dataDevolucao = $_POST['dataDevolucao'];

#Verificar se carro já está alugado nessas datas:
$query = "SELECT cod_locacao FROM locacao WHERE cod_automovel = '$placaAutomovel' 
AND data_devolucao BETWEEN '$dataLocacao' AND '$dataDevolucao'";
$stm = $db->prepare($query);
if($stm->execute()){
    while ($row = $stm->fetch()) {
        $codLocacao = $row['cod_locacao'];
    }


    #Se query tem o valor de um cod_locacao, não posso alocar nessas datas:
    if($codLocacao != ''){
        header("location:tentarNovamente.php");
        phpAlert("Carro já está alugado no período. Troque as datas ou troque o carro.");
    }

    else{
        $codLocacao = '';
        $query = "SELECT cod_locacao FROM locacao WHERE cod_automovel = '$placaAutomovel' 
        AND data_alocacao BETWEEN '$dataLocacao' AND '$dataDevolucao'";
        $stm = $db->prepare($query);
        if($stm->execute()){
            while ($row = $stm->fetch()) {
                $codLocacao = $row['cod_locacao'];
            }

            #Se query tem o valor de um cod_locacao, não posso alocar nessas datas:
            if($codLocacao != ''){
                header("location:tentarNovamente.php");
                phpAlert("Carro já está alugado no período. Troque as datas ou troque o carro.");
            }

            else{
                #Se chegou aqui, é porque $query = '', ou seja, carro pode ser alugado. Assim:
                #Pegando valor da diária do carro:
                $query = "SELECT valor FROM automovel WHERE placa = '$placaAutomovel'";
                $stm = $db->prepare($query);
                $stm->execute();
                while ($row = $stm->fetch()) {
                    $valor = $row['valor'];
                }

                #Calculando quantidade de dias de aluguel:
                $diferenca = strtotime($dataDevolucao) - strtotime($dataLocacao);
                $dias = floor($diferenca / (60 * 60 * 24));

                #Calculando valor total do aluguel nesses dias:
                $aluguel = $valor * $dias;

                #Inserindo locacao:
                $query = "INSERT INTO locacao(valor_total, data_devolucao, data_alocacao, cod_automovel) VALUES ('$aluguel', '$dataDevolucao', '$dataLocacao', '$placaAutomovel')";
                $stm = $db->prepare($query);
                if($stm->execute()){
                    #Inserindo reserva:
                    #Puxando código da locacao:
                    $lastId = $db -> lastInsertId();

                    $query = "SELECT c.cod_cliente FROM cliente c, usuario u WHERE u.cpf = '$cpfCliente'";
                    $stm = $db->prepare($query);
                    if($stm->execute()){
                        while ($row = $stm->fetch()) {
                            $codCliente = $row[0];
                        }
                    }  

                    $query = "INSERT INTO reserva(cod_automovel, status, cod_cliente, cod_locacao) VALUES('$placaAutomovel', '1', '$codCliente', '$lastId')";
                    $stm = $db->prepare($query);
                    if($stm->execute()){
                        phpAlert("Reserva efetuada.");                        
                        header("location:../indexCliente.php");
                        }                        
                    else{
                        header("location:salvaAluguel.php?error=salvaAluguel.php");
                    }
                }
                else{
                    header("location:salvaAluguel.php?error=salvaAluguel.php");
                }
            }
        }
        else{
            phpAlert("Erro");
        }
    } 
}
else{
    phpAlert("Erro");
}