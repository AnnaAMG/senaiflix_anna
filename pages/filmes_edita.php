<?php

include 'conexao.php';

$id = $_GET['id'];
$q = "SELECT * FROM filmes WHERE id='$id'";
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


    <form method='post' action='filmes_edita_salvar.php'>


        <h1> Editar cadastro de clientes </h1>

Titulo: <input type="text" id="titulo" name="titulo"  value="<?php echo $linha['titulo'];?>"><br><br>

Descrição: <input type="text" id="descricao" name="descricao"  value="<?php echo $linha['descricao'];?>"><br><br>

Ano Lançamento: <input type="text" id="ano_lancamento" name="ano_lancamento"  value="<?php echo $linha['ano_lancamento'];?>"><br><br>

Genero: <input type="text" id="genero" name="genero"  value="<?php echo $linha['genero'];?>"><br><br>

Classificação: <input type="text" id="classificacao" name="classificacao"  value="<?php echo $linha['classificacao'];?>"><br><br>


<input type="submit" value="Concluir edição">

        </form>

        <a href="clientes_listar.php"> Voltar </a>

</body>
</html>