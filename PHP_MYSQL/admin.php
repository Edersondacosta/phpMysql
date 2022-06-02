<?php
//Página de redirecionamento de login

session_start();
include("verificacao.php");

if ($_SESSION['funcao'] != 'adm'){
    header("location: index.php");
    exit();
    }

?>

<h3>Página ADMIN </br></h3>

<?php
echo "Usuário = ".$_SESSION['nome']."<br>";
echo "Função = ".$_SESSION['funcao']."<br>";
?>
<a href="logout.php">Sair</a>