<?php

$dsn = 'mysql:host=localhost;dbname=u750204740_portalsaberga';
$username = "u750204740_salaberga";
$password = "paoComOvo123!@##";

try {
    $conexao = new PDO($dsn, $username, $password);
    
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

?>