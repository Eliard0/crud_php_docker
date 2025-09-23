<?php
    $servername = "db";
    $username = "root";
    $password = "12345";
    $dbname = "cursos";
    $charset = "utf8mb4";
    $port = "3306";

    $connection = "mysql:host=$servername;port=$port;dbname=$dbname;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    try {
        $pdo = new PDO($connection, $username, $password, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
?>
