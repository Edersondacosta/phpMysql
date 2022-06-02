<?php
//Arquivo de Login ao sistema
include("connect.php");
session_start();



/*if (empty ($_POST["nome"]) || empty ($_POST["senha"])){
    header ("location: index.php");
    }*/ 
    
//$nome = mysqli_real_escape_string($con, $_POST["nome"]);
//$senha = mysqli_real_escape_string($con, $_POST["senha"]);

$first_name = mysqli_real_escape_string($con, $_POST["first_name"]);
$last_name = mysqli_real_escape_string($con, $_POST["last_name"]);
$fone = mysqli_real_escape_string($con, $_POST["fone"]);
$address = mysqli_real_escape_string($con, $_POST["address"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$sexo = mysqli_real_escape_string($con, $_POST["sexo"]);



$query_insert = "insert into clientes values (null, '{$first_name}','{$last_name}','{$sexo}','{$fone}','{$address}','{$email}');";

$result_insert= mysqli_query($con, $query_insert); //Recebe a conexão mais a query 



//$retorno_insert = mysqli_fetch_array($result_insert); // Retorna os dados da pesquisa em um array

//if ($result_insert ==''){

    if ($result_insert == ''){
    echo "<script language:'javascript'> window.alert('Não foi possível efetuar o cadastro'); windows.location.href='user.php';</script>";
    exit();
} else
{
    echo "<script language:'javascript'> window.alert('Cadastro efetuado com sucesso'); window.location.href='user.php';</script>";
    exit();
}
?>

