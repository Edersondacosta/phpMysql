<?php
//Arquivo de Conexão ao Banco de dados
$host= "192.168.0.7";
$usuario = "suporte";
$senha = "Suporte@10";
$bd = "senacms";

$con = mysqli_connect($host, $usuario, $senha, $bd);

if ($con -> connect_errno){
    echo "Falha na Conexão: (".$con->connect_errno.")".$con-> connect_error;
}

echo $con->host_info . "\n";

//connect_errno (Número do Erro)
//connect_error (Nome do Erro)
//host_info (Informações da conexão)
?>