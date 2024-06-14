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
$sql = "DELETE FROM assinaturas WHERE id_assinaturas='$id_assinaturas'";
$resultado = $conn ->query($sql);

header('Location: assinaturas_listar.php');


?>