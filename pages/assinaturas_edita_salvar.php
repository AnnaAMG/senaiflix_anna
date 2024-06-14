<?php

if($_SERVER['REQUEST_METHOD'] =="POST"){

$servidor = "localhost";
$usuario ="root";
$senha = "";
$banco = "senaiflix_anna";


$conn = new mysqli ($servidor, $usuario, $senha, $banco);

if($conn -> connect_error){
    die ("Erro conexão");
}

$id = $_POST['nome'];
$plano = $_POST['plano'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$data_cadastro = date ("Y-m-d H:i:s");
$data_atualizacao = date ("Y-m-d H:i:s");
$status = 0;

$sql = "INSERT INTO clientes ( id, plano, data_inicio, data_fim, data_cadastro, data_atualizacao, status) VALUES ( '$id', '$plano', '$data_inicio', '$data_fim', '$data_cadastro', '$data_atualizacao', '$status')";

if ($conn -> query($sql)== TRUE) {
    echo "Cadastro realizado com sucesso!!";
}
else{
    echo "Erro ao inserir registro!". $conn->error;
}    

}

?>