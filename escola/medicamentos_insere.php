<?php

$nome = $_POST['nome'];
$mododeuso = $_POST['modo de uso'];


//echo $nome;


// Salva no banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "hospital";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
} else {
    //echo "Conectado com o banco!";
}

$consulta = "INSERT INTO `medicamentos`(`id`, `nome`, `modo de uso`) VALUES (NULL, '". $nome ."', '". $mododeuso ."');";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/portifolio/escola/medicamentos.php');


?>