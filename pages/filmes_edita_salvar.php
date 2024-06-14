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
   
    
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$ano_lancamento = $_POST['ano_lancamento'];
$genero = $_POST['genero'];
$classificacao = $_POST['classificacao'];
$data_cadastro = date ("Y-m-d H:i:s");
$data_atualizacao = date ("Y-m-d H:i:s");
$status = 0;
    

    $q = "UPDATE filmes SET titulo='$titulo', descricao='$descricao', ano_lancamento='$ano_lancamento', genero='$genero', classificacao='$classificacao', data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao'";

    if($conn->query($q)==TRUE){
        echo " Atualizado com sucesso!";

    }else{
        echo "Error";
    }
}

$conexao->close();
header('Location: clientes_listar.php')

?>