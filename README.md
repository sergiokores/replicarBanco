# replicarBanco
Replicar de um banco de dados master para um slave
Não foi muito facil, porem não tão dificil assim... 
A ideia aqui foi criar um algoritmo que pudesse rodar
sem a nescessidade de instalar pacotes adicionais ao server ou
configurar algo diretamente no gerenciador do banco...

Basta configurar o arquivo de conexão colocando os 
dados de uma conexão master (de onde você quer copiar tudo)

Atente apenas para a conexão com o banco slave... pois o banco precisa existir,
apenas crie a base de dados slave e configure a conexão slave de acordo com os 
parametros da mesma... 

Configurou? Rode o index e pronto... 


O script não monitora modificações. cheguei a implementar a função que comparava 
os registros e só atualizava se encontrasse alguma diferença, mas em bancos com 1 milhão de registros ja buga em 
algum ponto, afinal de contas, são duas conexões com um volume de dados imenso... 

Então o que o script faz é buscar  tudo que está no Master, truncar o slave e inserir os novos registros 
atualizados... 

