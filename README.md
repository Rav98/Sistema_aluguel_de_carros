# Sistema para Gerenciamento de Aluguel de Automóveis

#### Dupla:
**Flavio Mota Gomes -- 2018005379**

**Rafael Antunes Vieira -- 2018000980**

## Descrição do projeto:

A ideia central deste desenvolvimento consiste em uma aplicação web desenvolvida a partir de HTML, CSS, JavaScript e PHP, que permite o controle de alocação de recursos em uma empresa de aluguel de veículos. 

O sistema permite login de funcionários para administração dos veículos - o que inclui criá-los, editá-los, tirá-los de circulação temporariamente para irem à oficina - além de permitir cadastro ao público para reservar os veículos desejados no período desejado. Para isso, criou-se um servidor de banco  de dados e liberou-se o acesso desse banco na internet para permitir a inserção desses pedidos por qualquer pessoa que acesse a plataforma.

O objetivo desta atividade foi  conhecer
diferentes ambientes de redes de computadores, explorando de forma prática os conceitos vistos em sala de aula.

Este relatório está estruturado em: Instalação de aplicações, onde se descreve o processo de instalação do Apache, do PostgreSQL e do PHP; Configuração do servidor de Banco de Dados, onde se discorre sobre o servidor, o modelo relacional e o mapeamento do modelo relacional para as tabelas do banco; Conexão entre aplicação e banco; Interfaces, onde são apresentadas características da aplicação e algumas de suas telas; Segurança, onde são feitas algumas considerações sobre segurança na aplicação desenvolvida. Por fim, são apresentadas as considerações finais.

## Instalação de aplicações:

Nos tópicos a seguir, são apresentadas algumas considerações sobre as aplicações necessárias para configuração do sistema. Neles, são descritas informações sobre a instalação e a configuração dessas aplicações, a saber: Apache, PostgreSQL e PHP.

### Instalação do apache:

O Apache é um software de código aberto de propriedade da Apache Software Foundation (ASF) que garante desempenho, estabilidade e segurança para um servidor web. Ele se tornou muito popular entre os programadores devido à sua modularidade e constante atualização pela comunidade, o que contribui ativamente para a alta capacidade dessa ferramenta. 

A instalação do Apache parte, inicialmente, do download do instalador no site https://httpd.apache.org/download.cgi. Clica-se no arquivo de instalação e prossegue-se, clicando em "Next", até a seção "Server Information". Nessa sessão, devem ser preenchidos os dados sobre o servidor e configurada a porta padrão (por padrão, a 80). Segue-se. Na tela de "Setup type", deve-se manter a opção "Typical". Na tela que se segue, há a opção de definir a pasta de instalação. Seguindo com o instalador, a aplicação será instalada no computador.

Para verificar se a instalação teve sucesso, basta abrir algum navegador e digitar o endereço do localhost. Uma página com a informação "It works!" deve aparecer.

### Instalação do PostgreSQL:

O PostgreSQL é um sistema de gerenciamento de banco de dados objeto-relacional. Baseado no Postgres versão 4.21, o PostgreSQL suporta uma grande parte do padrão SQL, além de oferecer características modernas. Consiste em um processo de servidor que lê e grava os arquivos de banco de dados reais, e um conjunto de programas cliente que se comunicam com o servidor.

Para instalar o SGBD PostgreSQL, é necessário partir pelo acesso ao site https://www.postgresql.org/download/, selecionar o sistema operacional correspondente. Assim, a página realizará o download do instalador. Dentro do instalador, basta avançar nas opções. É possivel selecionar a localização do banco. O instalador solicitará a configuração para criação do serviço de banco de dados. Já há um padrão configurado, e ele pode ser mantido ou alterado. É necessário criar uma senha para o usuário. Importante frisar que essa conta e senha não é a do super usuário do banco, mas uma conta responsável por dar o start. A seguir, solicita-se a configuração inicial do banco. Todos os valores podem ser mantidos como padrão, à exceção do valor de Encoding, no qual deve ser colocada a opção UTF-8, que confere um padrão de símbolos mais completos. Preenche-se com a senha criada anteriormente e mantém-se o padrão até o final da instalação. 

### Instalação do PHP:

O PHP consiste em uma linguagem de programação em código aberto, criada para o desenvolvimento web.

A instalação do PHP é feita a partir de um instalador disponível no site https://www.php.net/downloads.php. É necessário acessar o site e selecionar o instalador que é compatível ao computador e seu sistema operacional. Após realizado o download, clica-se no arquivo de instalação e avança-se. Escolhe-se a pasta onde será instalado o PHP e, em seguida, informa-se qual tipo de servidor web está rodando no servidor. Nesse caso, é o Apache instalado. A seguir, deve-se informar ao instalador do PHO o local onde se encontra o arquivo de configuração do servidor web Apache, Ele instará na pasta "conf", contida no diretório onde o Apache foi instalado. Por fim, o instalador pergunta sobre a instalação de extensões. Deve-se expandir esse menu e clicar no item "PostgreSQL" para instalar o suporte ao Banco de Dados PostgreSQL, que é o SGBD utilizado na aplicação desenvolvida. Segue-se com a instalação. O instalador questionará se deve-se configurar o Apache e, para esta pergunta, a resposta deve ser sim. Desse modo, o instalador adicionará as linhas de configuração no arquivo de configuração do Apache necessárias para que o PHP funcione. Finaliza-se aqui a instalação.

Para testar o sucesso da instalação, basta acessar localhost/teste.php em algum navegador. 

## Configuração do Banco de Dados
O primeiro passo para construção do ambiente é a configuração do servidor de banco de dados. Para este trabalho, o SGBD PostgreSQL foi utilizado. No subtópico a seguir, descreve-se a configuração do servidor que hospedará o banco.

### Servidor

Inicialmente, é preciso acessar um arquivo do PostgreSQL para configurar o modo de autenticação entre o servidor e o cliente. O arquivo que sera modificado é o pg_hba.conf. Recomenda-se a leitura da documentação do PostgreSQL para que a configuração seja feita de acordo com a versão instalada. Lembrando que recomendamos sempre a versão mais atualizada do SGBD para que a segurança do sistema esteja assegurada. O link da documentação para alterar o arquivo pg_hba.conf é:
https://www.postgresql.org/docs/9.1/auth-pg-hba-conf.html. 

Após a configuração do arquivo pg\_hba.conf, cria-se um servidor utilizando a interface do PostgreSQL. Veja na Figura 1.

![3 1 1](https://user-images.githubusercontent.com/46981155/97718516-c9f27180-1aa4-11eb-8a58-5bb1309beee0.PNG)
#### FIGURA 1. Criação do servidor na Interface do PostgreSQL

A seguir, na Figura 2, mostra-se a configuração de conexão do servidor. Atente-se ao número da porta.

![3 1 2](https://user-images.githubusercontent.com/46981155/97718582-dc6cab00-1aa4-11eb-80b9-6581de40a58a.PNG)
#### FIGURA 2. Configuração de conexão do servidor de Banco de Dados

Após a criação do servidor, é necessário permitir conexões externas a ele a partir da internet. Para isso, dado que foi utilizado um sistema Windows, fez-se necessário permitir conexões no Firewall do sistema. Essa configuração dá-se da seguinte forma: 

- "Painel de Controle";
- "Todos os itens do Painel de Controle";
- "Windows Defender Firewall";
- "Opções Avançadas";
- "No menu à esquerda, entre em "Regras de Entrada";
- "No menu à direita, entre em "Nova Regra";
- "Assinale a opção "Porta" e clique em "Avançar";
- "Selecione o protocolo "TCP", que é o protocolo utilizado pelo PostgreSQL; abaixo, preencha com o número da porta onde está criado o servidor (veja Figura 2);
- "Assinale "Permitir a conexão" e avance;
- "Dê um nome à regra e clique em concluir.

Após a execução dos passos descritos acima, a tela do Firewall ficará como na Figura 3.

![3 1 3](https://user-images.githubusercontent.com/46981155/97718613-e68ea980-1aa4-11eb-9108-48961a1016cb.PNG)
#### FIGURA 3. Firewall após configuração.

O próximo passo é configurar o roteador para permitir acessos externos. Para isso, acessa-se a página de configuração do seu roteador (siga as instruções da fabricante). Procure pela opção de "Servidor Virtual", clique em "Adicionar". Deixe a opção "Servidor Comum" como padrão. Em "Porta Externa", coloque a porta que será aberta ao mundo externo, a sua escolha. Em "Porta Interna", coloque a porta onde está o banco. No campo de endereço IP, coloque o IP da máquina onde está o servidor. Dentro da rede interna onde está conectado o servidor, existe uma tradução de IP pelo protocolo NAT. O protocolo NAT converte o IP de origem (interno) no endereço IP verdadeiro da rede (público), conforme ilustra a Figura 4. Marque o protocolo TCP e confirme. Veja na Figura 5. Após isso, a porta estará aberta na internet e será possível conexões externas ao banco por meio do IP público. A própria rede interna utilizará do IP interno para direcionar os pacotes ao servidor.

![3 1 4](https://user-images.githubusercontent.com/46981155/97718638-ee4e4e00-1aa4-11eb-8854-a7075ba58bbe.PNG)
#### FIGURA 4. Funcionamento do protocolo NAT.

![3 1 5](https://user-images.githubusercontent.com/46981155/97718656-f6a68900-1aa4-11eb-8d40-3d068c82eb7b.PNG)
#### FIGURA 5. Roteador após configuração.

### Modelo Entidade-Relacional

A Figura 6 apresenta o Modelo Entidade-Relacional utilizado neste trabalho. Ele apresenta as entidades "automóvel", "locação" e "usuário". A entidade "usuário"  possui especialização em "funcionário" e "cliente". Essa especialização é do tipo "d,t". Isso significa que um usuário desta aplicação é, obrigatoriamente, cliente ou funcionário, não havendo margem para que não seja de um desses tipos. Os relacionamentos demonstram a capacidade dos usuários do tipo "funcionário" em gerenciar os automóveis e dos clientes realizarem a locação dos veículos, bem como a capacidade dos usuários do tipo "cliente" em efetuarem reservas de locações de veículos.

![MER](https://user-images.githubusercontent.com/46981155/97718683-fe662d80-1aa4-11eb-9335-ff39bd0aa372.png)
#### FIGURA 6. Modelo Entidade-Relacionamento

### Tabela do Banco de dados

As tabelas do banco estão descritas a seguir. Elas foram construídas a partir do mapeamento do Modelo Entidade-Relacionamento descrito no tópico anterior. Os atributos assinalados com * indicam obrigatoriedade. Os atributos escritos em letras maiusculas são as chaves primárias das tabelas. Esse mapeamento foi implementado utilizando o PostgreSQL. O banco de dados gerado foi utilizado no desenvolvimento da aplicação.

- Automovel(PLACA, cor*, Chassis*, Modelo*, Direção\_Assistida*, Ar\_condicionado*, Manutenção*, Nro\_de\_Porta*, Quilometragem*, Transmissão*, Marca*, Tipo\_de\_combustivel*, Renavam*,Tipo*,Status*,Valor*)
- Locacao(COD\_LOCACAO,cod\_automovel, Valor\_total*,Data\_devolução*,Data\_alocação*)
- Usuario(COD\_USUARIO, Data\_nascimento* ,Nome* ,CPF*, Rua*,CEP*, Cidade*, Bairro*)
- Funcionario(COD\_FUNCIONARIO, Função*)
##### COD\_FUNCIONARIO referencia COD\_USUARIO
- Cliente(COD\_CLIENTE, Carteira\_de\_motorista*)
##### COD\_CLIENTE referencia usuario(COD\_USUARIO)
- Reserva(COD\_RESERVA, COD\_LOCACAO, COD\_CLIENTE, COD\_AUTOMOVEL,status)
##### COD\_CLIENTE referencia cliente(COD\_USUARIO)
##### COD\_LOCACAO referencia locacao(COD\_LOCACAO)
##### COD\_AUTOMOVEL referencia automovel(PLACA)

## Aplicações utilizadas no desenvolvimento 

Para construir a aplicação, foi feito uso das seguintes aplicações: para a escrita de código, utilizou-se o VSCode; para o banco de dados, utilizou-se o PgAdmin e o PostgreSQL. Adicionalmente, este trabalho foi hospedado no GitHub.

## Conexão entre aplicação e banco de dados

Para conectar a aplicação com o banco de dados PostgreSQL é utilizado  um drive de conexão. O drive de conexão é responsável por fornecer a conexão entre o  banco de dados e a aplicação, implementando um  protocolo para transferir a consulta e o resultado entre cliente e banco de dados.

### Configuração da conexão

Como a parte de \textit{back-end} da aplicação é feita pela linguagem PHP, o drive de conexão usado é PDO, que significa PHP Data Object. O PDO é apenas orientado para objetos e suporta uma variedade de tipos de bancos de dados diferentes que usam PHP, como MySQL, MSSQL, Informix e o PostgreSQL.

A conexão é simples e é feita em poucas linhas de código. Primeiramente, é preciso passar os detalhes do servidor, como IP Host , a porta de conexão, usuário e senha que foram configurados na criação do servidor, como foi dito no tópico 2 deste artigo. Após reunir todos os parâmentos, é preciso colocá-los dentro da função PDO como mostra na Figura 7 e pronto, a aplicação está conectada com o banco de dados.

![4 0 1](https://user-images.githubusercontent.com/46981155/97718741-0b831c80-1aa5-11eb-9b81-f26b6cae8e86.png)
#### FIGURA 7. Drive de conexão com o banco.

## Interfaces

A aplicação desenvolvida fornece 3 tipos de acessos. Um deles é o acesso "standart", ou seja, o acesso do usuário não logado ao sistema.Nessa interface, cuja página inicial é ilustrada na Figura 8, apresentam-se os menus da aplicação e descrições sobre o sistema e suas funcionalidades.

![5 0 1](https://user-images.githubusercontent.com/46981155/97718778-13db5780-1aa5-11eb-8b6e-91a22b8fba60.png)
#### FIGURA 8. Tela Inicial da aplicação.

Os menus apresentados na Figura 8 repetem-se quando o usuário faz login no sistema. A página principal, por sua vez, altera-se de acordo com o tipo de usuário logado na aplicação. Usuários do tipo cliente têm a possibilidade de alterar seus dados, alugar carro e alterar suas reservas. O aluguel de carros também poderá ser feito através das páginas que categorizam os veículos. Isso será demonstrado a seguir. Note também que quando um usuário está logado no sistema, o menu "Login" torna-se "Logout". Clicar em "Logout" desvincula o usuário da aplicação e a página inicial torna-se a página "standart" novamente. Veja essas informações na Figura 9.

![5 0 2](https://user-images.githubusercontent.com/46981155/97718815-1b9afc00-1aa5-11eb-8fb0-3309abee61aa.png)
#### FIGURA 9. Algumas funcionalidades do usuário cliente.

A Figura 10 apresenta a página inicial do usuário funcionário. Nela, constam-se as funcionalidades que podem ser executadas pelo usuário funcionário. Essas funcionalidades são específicas do papel do funcionário, e incluem a manutenção de veículos (incluindo enviá-los ao mecânico e retirá-los de lá), a criação de novos funcionários, manutenção de dados do cliente e de seus próprios dados. Um usuário funcionário é o único capaz de cadastrar novos usuários do tipo funcionário no sistema, mas é incapaz de editar os dados de funcionários que não sejam ele próprio. Em um uso comercial desta aplicação, naturalmente já constaria um usuário funcionário cadastrado para que esse seja o responsável por criar novos funcionários e abastecer o banco de dados com os veículos da empresa utilizadora desta aplicação.

![5 0 3](https://user-images.githubusercontent.com/46981155/97719393-c8757900-1aa5-11eb-96ae-097a79320772.png)
#### FIGURA 10. Algumas funcionalidades do usuário funcionario.

No que tange ao menu da aplicação, afirmou-se anteriormente que a página principal varia conforme o tipo de usuário logado. A implementação disso baseou-se na questão de Sessões, em PHP, conforme mostra a Figura 11.

![5 0 4](https://user-images.githubusercontent.com/46981155/97719430-d62afe80-1aa5-11eb-861e-1b1342250865.png)
#### FIGURA 11. Sessão em PHP.

Com base na sessão, montou-se o menu da forma indicada na Figura 12: com base no tipo de usuário logado na aplicação, direciona-se para a página correspondente. Dessa forma, um usuário "cliente", que possui menos privilégios que um usuário "funcionário", é incapaz de acessar as funcionalidades que não lhe dizem respeito.

![5 0 5](https://user-images.githubusercontent.com/46981155/97719462-ddeaa300-1aa5-11eb-9e9d-ebe7c2a53633.png)
#### FIGURA 12. Sessão em PHP.

A questão das sessões também é utilizada nas páginas relativas às categorias dos veículos. A Figura 13 ilustra essa distinção. Nela, note que o veículo é exibido para ambos os usuários, mas com funcionalidades distintas. Nesta figura, apresenta-se 3 visualizações de um mesmo veículo. Na visualização da esquerda, tem-se a visão desse veículo pelo funcionário. Nela, apresenta-se um botão que permite que o funcionário altere dados desse veículo. Na visualização do meio, apresenta-se a visão do usuário "cliente". Ele tem um potão que lhe permite alugar o veículo. Já na visualização da direita, tem-se a tela "standart", ou seja, o que é mostrado quando não há usuário logado no sistema. Essa visão é interessante para um sistema desse tipo porque permite que potenciais clientes, que ainda não têm login no sistema, visualizem os carros que existem para ser alugados. Isso serve para chamar a atenção desse visualizador da página e torná-lo um potencial cliente.

![5 0 6](https://user-images.githubusercontent.com/46981155/97719497-e7740b00-1aa5-11eb-82f9-cf82373ca649.png)
#### FIGURA 13. Diferentes visualizações de veículo de acordo com o usuário logado.

### Alugando veículos

Um usuário do tipo "cliente" logado no sistema pode solicitar o aluguel de um determinado veículo. A solicitação pode partir de formas diferentes. Uma dessas formas é seguindo diretamente às páginas que categorizam os carros, presentes no menu. A segunda forma é acessando a página principal e clicando no botão "Alugar automóvel", conforme foi ilustrado na Figura 9. Nesse segundo caso, há um redirecionamento às páginas de categorias. Conforme ilustrou a visualização central da Figura 13. Ao clicar em "Alugar", o sistema redireciona para a página ilustrada na Figura 14, onde o cliente seleciona a data de início e de fim do aluguel do automóvel. A placa do carro já vem selecionada a partir do carro escolhido.

![5 0 7](https://user-images.githubusercontent.com/46981155/97719518-ee9b1900-1aa5-11eb-9298-11fbd2327907.png)
#### FIGURA 14. Menu aluguel de carros.

Após o cliente selecionar as datas desejadas, o sistema puxa os dados passados de carro, data inicial de locação e data final de locação. Além disso, também seleciona os dados do usuário logado na sessão, que selecionou o carro desejado para locação. A seguir, realiza-se uma checagem de disponibilidade do carro nas datas desejadas. Para isso, o sistema tenta selecionar no banco de dados da aplicação os códigos de locação referentes às datas de início e de fim. Se o retorno é igual a um código, isso indica que o veículo selecionado já está locado no período total ou parcial desejado. Nesse caso, o sistema indica ao usuário cliente a necessidade de trocar as datas de locação ou trocar o veículo escolhido. A seguir, estão os códigos SQL que demonstram essa chegagem.

#### SELECT codlocacao FROM locacao WHERE codautomovel=$placaAutomovel AND datadevolucao BETWEEN $dataLocacao AND $dataDevolucao;

#### SELECT codlocacao FROM locacao WHERE codautomovel=$placaAutomovel AND dataalocacao BETWEEN $dataLocacao AND $dataDevolucao;

Na Figura 15, pode-se visualizar como é feito o cálculo do valor da locação. Cada veículo possui, em sua tabela, um campo com o valor da diária (que pode ser alterado por usuários do tipo "funcionário"). O sistema calcula a diferença de tempo entre a data de devolução e a data de locação; em seguida, por meio de um cálculo matemático, transforma essa diferença em dias inteiros; por fim, multiplica o valor da diária do carro (recebido, nesta página, via SQL) pela quantidade de dias de locação. Realizados os cálculos, o sistema armazena em duas tabelas: na tabela locação, ficam armazenados os dados relativos ao automóvel: código do automóvel, data de locação, data de devolução e valor total gasto pelo cliente. Na tabela reserva, ficam armazenados o código do automóvel, o código do cliente, o código da locação e o status. O status é uma variável booleana que, em todas as execuções, é setada como "true". A variável status torna-se "false" se houver um cancelamento dessa reserva, atendendo a uma regra de negócio que consiste em não apagar dados do banco, apenas torná-los "inúteis" se necessário for. Após as inserções na tabela, está concretizada a reserva de locação. Esses valores são visíveis ao usuário futuramente para eventual cancelamento ou alteração até a data de início da locação. Após esse período, continuam visíveis a ele, mas não são manipuláveis mais.

![5 0 8](https://user-images.githubusercontent.com/46981155/97719545-f65abd80-1aa5-11eb-879c-c16034b19e08.png)
#### FIGURA 15. Cálculo de diárias.

## Segurança 

Nesta seção são feitas algumas considerações sobre segurança na aplicação. Primeiro, trata-se da questão do SQL Injection, uma invasão que pode acontecer no momento do login de usuários. Em seguida, aborda-se também a questão das funcionalidades permitidas a cada tipo de usuário.

### Evitando SQL Injection 

O SQL Injection consiste em uma técnica de injeção de código com capacidade de acessar ao banco de dados, o que representa um risco. Ocorre, geralmente, durante a entrada de um usuário. Quando solicita-se ao usuário a entrada no sistema, como um nome/senha, o usuário fornece, em vez disso, uma instrução em SQL que será executada no banco de dados sem o conhecimento do administrador do banco.

A principal forma de evitar o SQL Injection se dá a partir de uma validação dos dados digitados pelo usuário. Há duas abordagens:

A primeira abordagem consiste em rejeitar dados que são conhecidamente inválidos. O problema dessa abordagem dá-se no fato de que o desenvolvedor não necessariamente terá conhecimento acerca dos que sejam dados inválidos. É difícil conhecê-los e entender como devem ser modificados, visto que novas formas de “dados inválidos” são sempre descobertos.

A segunda é aceitar somente os dados que são conhecidamente válidos: É considerada a melhor estratégia usada , pois o programador sabe como deve ser a entrada e assim, é possível gerar estratégias para que a aplicação consiga aceitar somente a entrada adequada.

Na hora de realizar o login, uma aplicação geralmente realiza a consulta do usuário e da senha digitados pelo usuário. Essa consulta é realizada no banco de dados e, portanto, utiliza um código SQL para isso. Imaginando uma consulta do gênero cujo SQL fosse: "SELECT * FROM usuario WHERE cpf='\$cpfUsuario' AND senha='\$senhaUsuario'", uma entrada que deixasse o campo de login em branco e digitasse no campo senha os caracteres: 'or''=', conseguiria logar na aplicação. Isso aconteceria porque o jogo de aspas simples validaria o código SQL de select. Esse, ficaria da seguinte forma: "SELECT * FROM usuario WHERE cpf='' AND senha = ''or''=''.". Usuário e senha são campos em branco, e campo em branco é igual a campo em branco. Logo, valida-se a query e uma invasão é realizada.

Com o intuito de impedir que isso aconteça, a aplicação implementou uma verificação de senha sem utilizar diretamente a variável do programa na query SQL, conforme ilustra a Figura 16. Dessa forma, ao preparar a variável primeiro para depois executá-la na query, uma invasão como a descrita anteriormente não ocorrerá nesses termos. 

![6 0 1](https://user-images.githubusercontent.com/46981155/97719567-fc509e80-1aa5-11eb-96ae-dd66fc9d0354.png)
#### FIGURA 16. Evitando o SQL Injection.

## Permissões para o usuario

Outra questão importante para a segurança da aplicação é que usuários de um tipo não interfiram em funções de usuários de outro tipo. Seria um problema de segurança se, por exemplo, um usuário do tipo cliente tivesse acesso às funcionalidades de um usuário funcionário.

A aplicação trata da resolução desse problema a partir já do login do usuário. Um usuário da aplicação só pode ser cadastrado por um funcionário da locadora. Esse funcionário é o responsável por categorizar esse novo usuário como cliente ou outro funcionário. Ao realizar um login, o sistema realiza uma busca naqueles dados informados e identifica o tipo de usuário que acabou de realizar login. Após essa varredura, salva-se na sessão do usuário logado um atributo que realiza essa identificação. É a partir disso que o sistema direciona o usuário às páginas cujo acesso dele é permitido. Um usuário cliente, por exemplo, não terá acesso à página que realiza manutenções no cadastro de veículos, já que o sistema não redireciona, em nenhum momento, a ela.

Além disso, as páginas possuem layouts diferentes conforme o tipo do usuário. Um exemplo disso foi o abordado na Figura 13 da seção 4.1, que mostrou como um funcionário, um cliente e um usuário não logado visualizam um carro cadastrado no sistema. O funcionário tem o botão para editar disponível; o cliente, o alugar; um usuário não logado, nenhum. Além desse exemplo, temos também a página principal com suas três versões.

### Sistema operacional do servidor

Para manter uma boa segurança no sistema operacional que gerencia os recursos para o servidor, foram tomadas algumas ações:

- Instalação de um Antivírus: o antivírus é uma ferramenta que ajuda a evitar que possíveis ataques de malwares e spyware aconteçam no sistema operacional em que o servidor está rodando. Isso aumenta a segurança e melhora a confiabilidade e estabilidade do servidor. No caso do servidor utilizado nesta aplicação, foi instalado o antivírus Kaspersky;

- Atualização do sistema operacional: de tempos em tempos, a empresa por trás do sistema operacional lança atualizações que corrigem falhas de segurança do sistema. É sempre bom mantê-lo atualizado para que o sistema seja mais seguro contra ataques.

- Evitar a instalação de programas que não agregam nada ao funcionamento do servidor: para evitar perdas de desempenho e de segurança no sistema operacional onde o servidor está funcionando, deve-se evitar que sejam instalados programas que não agregam melhorias ao servidor. Além dos programas roubarem desempenho do servidor, pois rodam juntos no sistema, os programas podem ter algum problema e travar o sistema operacional da máquina, fazendo com que o servidor pare de funcionar.

## Considerações Finais

Considera-se que o objetivo deste estudo foi atingido. Nos tópicos anteriores, foi descrito todo o processo envolvido na confecção do sistema para gerenciamento de aluguel de carros, desde a criação e configuração de um servidor de banco de dados até a completa criação de uma aplicação utilizando HTML, CSS, JavaScript e PHP.

A aplicação, cujas funcionalidades foram aqui apresentadas, mostrou-se capaz de realizar todas as tarefas que se propôs a fazer: mantém os cadastros de veículos, funcionários e clientes e é capaz de realizar todas as etapas de gerenciamento do aluguel dos veículos. Tudo isso é feito de maneira satisfatória, ou seja, a aplicação mantém conexão plena com o servidor configurado.

Por sua vez, o servidor também atende às suas obrigações, mantendo armazenados os dados relativos à aplicação e sendo responsivo às solicitações da mesma. 

Como trabalhos futuros, sugere-se o aprimoramento de questões de design das páginas, incluindo adaptações às diretrizes de design de empresas que eventualmente utilizem desse sistema. 

Dado o cenário atual da internet, com seu enorme fluxo de usuários, e a busca dessas pessoas por serviços que facilitam a vida e poupam tempo, encerra-se este trabalho ressaltando a aplicabilidade real desta aplicação para empresas do ramo de aluguel de automóveis, que, de porte de uma ferramenta como essa, tendem a maximizar a base de clientes e, por consequência, de lucros.
