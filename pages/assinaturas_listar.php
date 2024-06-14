<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "senaiflix_anna";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn -> connect_error){
die ("Error conecção");
}

$sql = "SELECT * FROM assinaturas ORDER BY nome ASC";
$resultado = $conn ->query($sql);


?>

<table border ="1" widht='50%'>
    <tr>
        <th> Id: </th>
        <th> Plano: </th>
        <th> Data Inicio: </th>
        <th> Data Fim: </th>
        <th> Editar: </th>
        <th> Remover: </th>

</tr>


<?php
while($linha = $resultado->fetch_assoc()){
?>
   <tr> 
            <td> <?php echo $linha['id']; ?> </td>
            <td> <?php echo $linha['plano']; ?></td>
            <td> <?php echo $linha['data_inicio']; ?></td>
            <td> <?php echo $linha['data_fim']; ?></td>
        
            <td><a href='assinaturas_edita.php?id=<?php echo $linha['id']; ?>'> Editar </a></td>
            <td><a href='assinaturas_remover.php?id=<?php echo $linha['id']; ?>'> Remover </a></td>
            </tr>


 <?php           
}
?>
    





        </table>
        <a href="assinaturas_cadastro.php"> Novo Cadastro </a>