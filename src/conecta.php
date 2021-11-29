<?php
    //conexão com o BD
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="userinfo";

    $conexao=mysqli_connect($servidor,$usuario,$senha,$dbname);
  
    if(!$conexao)
    {
        die("erro:" .mysqli_connect_error());
    }
?>
