<?php
    //conexão com o BD
    $servidor="localhost";
    $usuario="tccControlador";
    $senha="milleniun145";
    $dbname="sceneme";

    $conexao=mysqli_connect($servidor,$usuario,$senha,$dbname);
  
    if(!$conexao)
    {
        die("erro:" .mysqli_connect_error());
    }
?>
