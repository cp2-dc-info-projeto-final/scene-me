<?php
    session_start(); //sempre iniciar sessão
    $t = false; //checker da sessão. Falso ou verdadeiro

    //se a sessão de email é válida, a sessão é verdadeira
    if(isset($_SESSION["email"]))
    {
        $t = true;
    }
    else{}

    //se a sessão de adm é válida, a sessão é verdadeira
    if(isset($_SESSION["adm"]))
    {
        $adm = $_SESSION["adm"];
        $t = true;
    }    
    else{}

    //se a sessão de senha é válida, a sessão é verdadeira
    if(isset($_SESSION["senha"]))
    {
        $t = true;
    }
    else{}

    //se a sessão for verdadeira o código inferido a este é executado normalmente.
    //Se não for o usuário é redirecionado a página de login
    if($t == true)
    {
        include "conecta.php";
        mysqli_close($conexao);
    }
    else
    {
        header('location: login.php');
    }
?>
