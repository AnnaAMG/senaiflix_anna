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
    

    $q = "UPDATE clientes SET nome='$nome', cpf='$cpf', endereco='$endereco', bairro='$bairro', cidade='$cidade',estado='$estado', cep='$cep', email='$email', telefone='$telefone', data_cadastro='$data_cadastro', data_atualizacao='$data_atualizacao'";

    if($conn->query($q)==TRUE){
        echo " Atualizado com sucesso!";

    }else{
        echo "Error";
    }
}

$conexao->close();
header('Location: clientes_listar.php')

?>