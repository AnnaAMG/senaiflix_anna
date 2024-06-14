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
$sql = "DELETE FROM clientes WHERE id='$id'";
$resultado = $conn ->query($sql);

header('Location: clientes_listar.php');


?>