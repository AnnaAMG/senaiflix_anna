<?php

include 'conexao.php';

$id = $_GET['id'];
$q = "SELECT * FROM clientes WHERE id='$id'";
$resultado = $conn->query($q);

if($resultado->num_rows <= 0){

    echo "Usuário não encontrado";
    exit();
}

$linha = $resultado->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Formulario</title>
    
    
</head>
<body>


    <form method='post' action='clientes_edita_salvar.php'>


        <h1> Editar cadastro de clientes </h1>

Nome: <input type="text" id="nome" name="nome"  value="<?php echo $linha['nome'];?>"><br><br>

CPF: <input type="text" id="cpf" name="cpf"  value="<?php echo $linha['cpf'];?>"><br><br>

Endereço: <input type="text" id="endereco" name="endereco"  value="<?php echo $linha['endereco'];?>"><br><br>

Bairro: <input type="text" id="bairro" name="bairro"  value="<?php echo $linha['bairro'];?>"><br><br>

Cidade: <input type="text" id="cidade" name="cidade"  value="<?php echo $linha['cidade'];?>"><br><br>

Estado: <input type="text" id="estado" name="estado"  value="<?php echo $linha['estado'];?>"><br><br>

CEP: <input type="text" id="cep" name="cep"  value="<?php echo $linha['cep'];?>"><br><br>

Email: <input type="email" id="email" name="email"  value="<?php echo $linha['email'];?>"><br><br>

Telefone: <input type="text" id="telefone" name="telefone"  value="<?php echo $linha['telefone'];?>"><br><br>


<input type="submit" value="Concluir edição">

        </form>

        <a href="clientes_listar.php"> Voltar </a>

</body>
</html>