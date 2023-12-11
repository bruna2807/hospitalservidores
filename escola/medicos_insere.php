<?php

$nome = $_POST['nome'];
$especializacao = $_POST['especializacao'];
$numero = $_POST['numero'];


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

$consulta = "INSERT INTO `medicos`(`id`, `nome`, `especializacao`, `numero`) VALUES (NULL, '". $nome ."', '". $especializacao ."' '". $numero ."');";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/portifolio/escola/medicos.php');


?>