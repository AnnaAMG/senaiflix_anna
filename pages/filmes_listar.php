<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "senaiflix_anna";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn -> connect_error){
die ("Error conecção");
}

$sql = "SELECT * FROM filmes ORDER BY titulo ASC";
$resultado = $conn ->query($sql);


?>

<table border ="1" widht='50%'>
    <tr>
        <th> Id: </th>
        <th> Titulo: </th>
        <th> Descrição: </th>
        <th> Ano Lançamento: </th>
        <th> Genero: </th>
        <th> Classificação: </th>
        <th> Editar: </th>
        <th> Remover: </th>

</tr>


<?php
while($linha = $resultado->fetch_assoc()){
?>
   <tr> 
            <td> <?php echo $linha['id_filmes']; ?> </td>
            <td> <?php echo $linha['titulo']; ?></td>
            <td> <?php echo $linha['descricao']; ?></td>
            <td> <?php echo $linha['ano_lancamento']; ?></td>
            <td> <?php echo $linha['genero']; ?></td>
            <td> <?php echo $linha['classificacao']; ?></td>
        
        
            <td><a href='filmes_edita.php?id=<?php echo $linha['id_filmes']; ?>'> Editar </a></td>
            <td><a href='filmes_remover.php?id=<?php echo $linha['id_filmes']; ?>'> Remover </a></td>
            </tr>


 <?php           
}
?>
    





        </table>
        <a href="filmes_cadastro.php"> Novo Cadastro </a>