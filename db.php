<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ola mundo</title>
</head>
<body>
    <?php
        $servername = "db";
        $username = "root";
        $password = "12345";
        $dbname = "cursos";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if($connection->connect_error){
            die("falha na conexao" .  $connection->connect_error);
        }

        echo "db online";
    ?>
</body>
</html>