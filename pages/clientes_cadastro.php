

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Formulario</title>
    
    
</head>
<body>


    <form method='post' action='clientes_cadastro_salvar.php'>


        <h1> Cadastro de clientes </h1>

Nome: <input type="text"  name="nome" ><br><br>

CPF: <input type="text"  name="cpf" ><br><br>

Endereço: <input type="text"  name="endereco" ><br><br>

Bairro: <input type="text"  name="bairro" ><br><br>

Cidade: <input type="text"  name="cidade" ><br><br>

Estado: <input type="text"  name="estado" ><br><br>

CEP: <input type="text"  name="cep" ><br><br>

Email: <input type="email"  name="email" ><br><br>

Telefone: <input type="text"  name="telefone" ><br><br>


<input type="submit" value="Concluir cadastro">

        </form>

        <a href="clientes_listar.php"> Visualizar </a>

</body>
</html>