<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age:604800");
header("Access-Control-Request-Headers: x-requested-with");
header("Access-Control-Allow-Headers: *");
date_default_timezone_set('America/Sao_Paulo');

$localhost = "db4free.net";
$user = "folhetosdecanto";
$password = "WT7LhHvT.iF.#_9";
$database = "folhetosdecanto";
global $pdo;
try {
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    $pdo = new PDO("mysql:dbname=".$database."; host=".$localhost, $user, $password, $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "conectado";
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>
