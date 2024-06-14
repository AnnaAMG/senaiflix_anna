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

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_cadastro = date ("Y-m-d H:i:s");
$data_atualizacao = date ("Y-m-d H:i:s");
$status = 0;

$sql = "INSERT INTO clientes ( nome, cpf, endereco, bairro, cidade, estado, cep,  email, telefone, data_cadastro, data_atualizacao, status) VALUES ( '$nome', '$cpf', '$endereco', '$bairro', '$cidade', '$estado','$cep', '$email', '$telefone','$data_cadastro', '$data_atualizacao', '$status')";

if ($conn -> query($sql)== TRUE) {
    echo "Cadastro realizado com sucesso!!";
}
else{
    echo "Erro ao inserir registro!". $conn->error;
}    

}

?>