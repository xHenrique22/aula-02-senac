<?php
    
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_aulaform';

    $conexao = new mysqli('localhost','root','','db_aulaform');

    if($conexao->connect_error)
    {
        die( "Errou em alguma parada");
    }
    else
    {
        echo "Conexão rodando certinho";
    }

?>