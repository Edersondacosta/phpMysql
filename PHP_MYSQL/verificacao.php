<?php
//Faz a verificação se há sessão, se não houver, redireciona para index
session_start();
if(!$_SESSION["nome"]){
    header("location:index.php");
    exit();
}
?>