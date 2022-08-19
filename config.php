<?php

$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'exemplo_tcc';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/*if($conexao->connect_errno)
{
    echo "Erro na conexão com o banco de dados";
}
else
{
    echo "Conexão efetuada com sucesso";
}*/

?>