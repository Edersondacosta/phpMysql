<?php
//Arquivo de Login ao sistema
include("connect.php");
include("verificacao.php");
session_start();
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    </html><link href="style.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
    
<?php
$query = "select * from clientes order by first_name asc";
$result= mysqli_query($con, $query); //Recebe a conexão mais a query 
$retorno = mysqli_fetch_array($result); // Retorna os dados da pesquisa em um array
$row = mysqli_num_rows($result); //Atribui a qtde de linhas resultantes a variável row

if ($row == ''){
    echo "<h3>Não existem dados cadastrados</h3>";
   

}else{
    
?>


<h3>Relatório de Clientes</h3><br/>
<table border="1" align="center">
        <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Último Nome</td>
        <td>Fone</td>
        <td>Endereço</td>
        <td>Sexo</td>
        <td>E-mail</td>
        <?php
        while($data=mysqli_fetch_array($result)){
            $id = $data['id'];
            $first_name = $data['first_name'];
            $last_name = $data['last_name'];
            $fone = $data['fone'];
            $address = $data['address'];
            $sexo = $data['sexo'];
            $email_address = $data['email_address']; 
        
        ?>
        

        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $first_name; ?></td>
        <td><?php echo $last_name; ?></td>
        <td><?php echo $fone; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $sexo; ?></td>
        <td><?php echo $email_address; ?></td>
    </tr>
    <?php

}?>


</table>   

<?php

}?>
</body>
</html>