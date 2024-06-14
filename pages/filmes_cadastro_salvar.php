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

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$ano_lancamento = $_POST['ano_lancamento'];
$genero = $_POST['genero'];
$classificacao = $_POST['classificacao'];
$data_cadastro = date ("Y-m-d H:i:s");
$data_atualizacao = date ("Y-m-d H:i:s");
$status = 0;

$sql = "INSERT INTO filmes ( titulo, descricao, ano_lacamento, genero, classificacao, data_cadastro, data_atualizacao, status) VALUES ( '$titulo', '$descricao', '$ano_lancamento', '$genero', '$data_cadastro', '$data_atualizacao', '$status')";

if ($conn -> query($sql)== TRUE) {
    echo "Cadastro realizado com sucesso!!";
}
else{
    echo "Erro ao inserir registro!". $conn->error;
}    

}

?>