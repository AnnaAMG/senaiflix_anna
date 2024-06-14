<?php

$servidor = "localhost";
$usuario ="root";
$senha = "";
$banco = "senaiflix_anna";

$conn = new mysqli ($servidor, $usuario, $senha, $banco);

if($conn -> connect_error){
    die ("Erro conexão: ". $conn->connect_error);
}

if(!isset($_GET['id'])){

    echo "Usuário não informado!";
    exit();
}


if($_SERVER['REQUEST_METHOD']=='POST'){
   
    
$id = $_POST['nome'];
$plano = $_POST['plano'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$data_cadastro = date ("Y-m-d H:i:s");
$data_atualizacao = date ("Y-m-d H:i:s");
$status = 0;

    

    $q = "UPDATE assinaturas SET id='$id', plano='$plano', data_inicio='$data_inicio', data_fim='$data_fim', data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao'";

    if($conn->query($q)==TRUE){
        echo " Atualizado com sucesso!";

    }else{
        echo "Error";
    }
}

$conexao->close();
header('Location: assinaturas_listar.php')

?>