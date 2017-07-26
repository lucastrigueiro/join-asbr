<?php

include_once 'db.php';

//Cria instancia da classe DB
$conn = new DB();

//Conecta
$conn->connect();

//Recebe os dados via post
$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$telefone = $_REQUEST["telefone"];
$regiao = $_REQUEST["regiao"];
$unidade = $_REQUEST["unidade"];
$data_nascimento = $_REQUEST["data_nascimento"];
$score = $_REQUEST["score"];

//Insere os dados
$result = $conn->insert($nome, $email, $telefone, $regiao, $unidade, $data_nascimento, $score);
//Devolve o resultado (sucesso ou o erro)
echo $result;

//Desconecta
$conn->disconnect();

?>