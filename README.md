# Resumo: Conceitos e Comandos Essenciais de Docker e Docker Compose

Este documento serve como um guia rápido dos principais conceitos e comandos utilizados no desenvolvimento com Docker e Docker Compose.

---

### 1. Conceitos-Chave do Docker

* **Docker:** É uma plataforma que utiliza containers para empacotar aplicações e suas dependências, garantindo que o ambiente de desenvolvimento seja o mais próximo possível do ambiente de produção.

* **Docker Image:** É um "molde" ou um template imutável que contém o código da sua aplicação e todas as tecnologias necessárias para ela funcionar (ex: PHP, MySQL, Node.js, etc.).

* **Dockerfile:** É o arquivo de texto que contém as instruções para construir uma imagem Docker, especificando a imagem base, bibliotecas a serem instaladas, arquivos a serem copiados, e outros detalhes da configuração.

* **Docker Volume:** É a forma recomendada de armazenar dados de maneira persistente. Por padrão, os dados dentro de um container são temporários e são apagados quando o container é removido.

---

### 2. Comandos de Docker Compose

O **Docker Compose** é uma ferramenta para gerenciar e orquestrar múltiplos containers que compõem uma única aplicação (ex: um container para a aplicação web, outro para o banco de dados).

* `docker compose up -d`: Cria e inicia todos os containers definidos no arquivo `docker-compose.yml`. A flag `-d` (detach) executa os containers em segundo plano, sem bloquear o terminal.

* `docker compose ps`: Lista todos os containers do projeto, mostrando seus status e portas.

* `docker compose stop [nomeDoContainer]`: Para todos os containers. Se você adicionar o nome de um container no final, somente ele será parado.

* `docker compose down`: Para e remove todos os containers, redes e volumes criados pelo `docker compose up`.

* `docker compose logs [nomeDoContainer]`: Exibe os logs do container especificado, o que é útil para depurar erros.

---

### 3. Comandos Úteis do Docker

* **Gerenciamento de Redes:**
    * `docker network ls`: Lista todas as redes criadas no Docker.
    * `docker network create [nomeDaRede]`: Cria uma nova rede.

* **Acessando Containers:**
    * `docker exec -it [nomeDoContainer] [comando]`: Permite executar um comando dentro de um container em execução.
    * **Exemplo:** `docker exec -it nomeDaImagem mysql -u root -p` para acessar o terminal do MySQL dentro do container.

---

### 4. Flags (Parâmetros) Comuns

* `-it`: As flags `-i` (interactive) e `-t` (tty) são usadas juntas para permitir que você interaja com o container através do terminal.

* `-p`: Usada para mapear uma porta do container para uma porta do seu computador.
    * **Exemplo:** `-p 8080:80` mapeia a porta `80` do container para a porta `8080` do seu computador.

* `-u`: Usada para especificar o usuário que irá executar um comando dentro do container.
    * **Exemplo:** `-u root` para rodar como o usuário `root`.