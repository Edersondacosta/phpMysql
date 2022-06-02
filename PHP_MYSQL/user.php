<?php
//Página de redirecionamento de usuários comuns
session_start();
include("verificacao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
    <link href="style.user.css" rel="stylesheet" id="bootstrap-css">


</head>
<body>
    

<!--<h3>Página User </br></h3>-->

<h5><?php
echo "Usuário = ".$_SESSION['nome']."<br>";
echo "Função = ".$_SESSION['funcao']."<br>";
?></h5>

<a href="logout.php">Sair</a><br/>



<form method="post" action="action_user.php">
        <fieldset> <legend><h3>Cadastro de Clientes</h3></legend>
                        
                        <label for="first_name">Nome Completo:</label> </br>
                        <input id="first_name" name="first_name" type="text"> </br>
                        <label for="last_name">Sobrenome:</label> </br>
                        <input id="last_name" name="last_name" type="text"></br>
                        <label for="fone">Fone:</label> </br>
                        <input id="fone" name="fone" type="text"> </br>
                        <label for="address">Endereço:</label> </br>
                        <input id="address" name="address" type="text"> </br>
                        <label for="email_address">Email:</label> </br>
                        <input id="email_address" name="email" type="email"></br>
                        <b>Sexo</b><br/>
                        <input type="radio" name="sexo" id="masc" value="masculino">
                        <label for="masc"> Masculino</label><br/>
                        <input type="radio" name="sexo" id="fem" value="feminino">
                        <label for="fem"> Feminino</label><br/>
                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Enviar">

        </fieldset>                                        

</form>

<a href="mostra_clientes.php">Pesquisar Clientes</a><br/>


        </body>
</html>