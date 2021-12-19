<?php
    include "conecta.php";
    include "autentica.php";

    $senhaA = $_POST["senhaA"];
    $senha = $_POST["senha"]; 
    $nome = $_POST["nome"];
    $dataNasc = $_POST["dataNasc"];
    $email = $_POST["email"];
    $emailA = $_POST["emailA"];
    $erro = 0;

    $senha_cript = password_hash($senhaA, PASSWORD_DEFAULT);
    $login = mysqli_query($conexao,"SELECT senha FROM userdados WHERE email = '$emailA'");
    $res = mysqli_fetch_array($login);
    $senhaPCript = $res[0];
    if(password_verify($senhaA, $senhaPCript) == true)
    {
        $jorge = "UPDATE userdados SET nome = '$nome', dataNasc = '$dataNasc', email = '$email', senha = '$senha_cript' WHERE senha = '$senhaPCript' AND email = '$emailA'";
        mysqli_query($conexao, $jorge);
        session_destroy();
        header('location: login.php');
    }
    else
    {
        header('location: attUser.php?perg=sim');
    }



    /*

      $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
        $queryNome = "SELECT senha FROM userdados WHERE email = '$email'";
        $result2 = mysqli_query($conexao, $queryNome);
        $arrayNome = mysqli_fetch_array($result2);
        $senhaPCript = $arrayNome[0];
        $sql = mysqli_query($conexao,"SELECT nome, senha, email, adm FROM userdados WHERE email ='$email' AND senha = '$senhaPCript'");
        $res = mysqli_fetch_array($sql);
        if(password_verify($senha, $senhaPCript) == true)
        {
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["nome"] = $res["nome"];
            $_SESSION["senha"] = $senha;
            $_SESSION["adm"] = $res["adm"];
            header('location: paginaInicial.php');
        }
        else
        {
            echo "Erro"; //iremos aprimorar isto mais tarde
            header('location: login.php');
        }
    */
?>