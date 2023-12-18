<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'upload';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /* if($conexao->connect_erro)
    {
        echo'erro';
    }
    else{
        echo 'ok';
    } */

?>