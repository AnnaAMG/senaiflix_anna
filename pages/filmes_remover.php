<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "senaiflix_anna";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn -> connect_error){
die ("Error conecção");
}

$id = $_GET['id'];
$sql = "DELETE FROM filmes WHERE id_filmes ='$id'";
$resultado = $conn ->query($sql);

header('Location: filmes_listar.php');


?>