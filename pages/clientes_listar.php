<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "senaiflix_anna";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn -> connect_error){
die ("Error conecção");
}

$sql = "SELECT * FROM clientes ORDER BY nome ASC";
$resultado = $conn ->query($sql);


?>

<table border ="1" widht='50%'>
    <tr>
        <th> Id: </th>
        <th> Nome: </th>
        <th> CPF: </th>
        <th> Endereço: </th>
        <th> Bairro: </th>
        <th> Cidade: </th>
        <th> Estado: </th>
        <th> CEP: </th>
        <th> Email: </th>
        <th> Telefone: </th>
        <th> Editar: </th>
        <th> Remover: </th>

</tr>


<?php
while($linha = $resultado->fetch_assoc()){
?>
   <tr> 
            <td> <?php echo $linha['id']; ?> </td>
            <td> <?php echo $linha['nome']; ?></td>
            <td> <?php echo $linha['cpf']; ?></td>
            <td> <?php echo $linha['endereco']; ?></td>
            <td> <?php echo $linha['bairro']; ?></td>
            <td> <?php echo $linha['cidade']; ?></td>
            <td> <?php echo $linha['estado']; ?></td>
            <td> <?php echo $linha['cep']; ?></td>
            <td> <?php echo $linha['email']; ?></td>
            <td> <?php echo $linha['telefone']; ?></td>
        
            <td><a href='clientes_edita.php?id=<?php echo $linha['id']; ?>'> Editar </a></td>
            <td><a href='clientes_remover.php?id=<?php echo $linha['id']; ?>'> Remover </a></td>
            </tr>


 <?php           
}
?>
    





        </table>
        <a href="clientes_cadastro.php"> Novo Cadastro </a>