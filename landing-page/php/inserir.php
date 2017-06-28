<?php
$servername = "localhost";
$username = "lucas";
$password = "123";
$dbname = "testeasbr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$telefone = $_REQUEST["telefone"];
$regiao = $_REQUEST["regiao"];
$unidade = $_REQUEST["unidade"];
$data_nascimento = $_REQUEST["data_nascimento"];
$score = $_REQUEST["score"];

$sql = "INSERT INTO formulario (nome, email, telefone, regiao, unidade, data_nascimento, score)
VALUES ('$nome', '$email', '$telefone', '$regiao', '$unidade', '$data_nascimento', '$score')";

if (mysqli_query($conn, $sql)) {
    echo "Registro criado com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

