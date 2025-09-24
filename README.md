docker serve para tornar o nosso ambiente de desenvolvimento mais proximo ao ambiente de produção.
docker image - er a tecnologia a ser ultilizada como php, react, laravel, mysql, etc.
dockerfile - er o arquivo que contem instrucões de qual imagem baixa, blibiotecas, e onde ficaram armazenados esses dados

docker volume -  é uma forma de armazenar dados de maneira persistente. Por padrão, os dados dentro de um contêiner são temporários e são apagados quando o contêiner é removido.

docker composer - er uma ferramenta para gerenciar varios containers ao mesmo tempo.

docker network ls - para verificas as rede.
docker network create ( nome da rede ) - para criar uma rede.

docker compose ps - serve para listar todos os container.
docker compose up - serve para criar e execultar os containers usar a flag ( -d ) no final para nao bloquear o terminal.
docker compose stop - para parar os containers se coloca o nome do container no final para somente o indicado.
docker compose rm  (nomeDoContainer ) - para apagar o container.
docker compose logs db - para ver os logs
docker compose down - remove todos os containers

para acessa o banco de dados pelo bash use o comando:
docker exec -it nomeDaImagem mysql -u Usuario -p 


flags:
-it -> interage com o docker pelo terminal
-p  -> usado para mapear a porta do container e do computado
-u  -> usado para especificar o usuario que vai usar o comando