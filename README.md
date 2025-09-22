docker network ls - para verificas as rede
docker network create ( nome da rede ) - para criar uma rede

docker compose ps - serve para listar todos os container
docker compose up - serve para criar e execultar os containers usar a flag ( -d ) no final para nao bloquear o terminal
docker compose stop - para parar os containers se coloca o nome do container no final para somente o indicado
docker compose rm  (nomeDoContainer ) - para apagar o container

para acessa o banco de dados pelo bash use o comando:
docker exec -it nomeDaImagem mysql -u Usuario -p 


flags:
-it -> interage com o docker pelo terminal
-p  -> usado para mapear a porta do container e do computado
-u  -> usado para especificar o usuario que vai usar o comando


services: 
  web: 
    # image: php:apache
    build: ./docker/web
    volumes: 
      - ./:/var/www/html/
    ports: 
      - 80:80
  db: 
    image: mysql:latest
    volumes:
      - db:/var/lib/mysql/
    environment:  
      - MYSQL_ROOT_PASSWORD=12345
      - MYSQL_DATABASE=cursos

volumes:
  db:
  

# ser usar um usuario que nao seja o root no mysql use essa configuracao no environment
# - MYSQL_ROOT_PASSWORD=12345
# - MYSQL_DATABASE=cursos
# - MYSQL_USER=root
# - MYSQL_PASSWORD=12345
 