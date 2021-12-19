<?php
    include "conecta.php";
    include "autentica.php";

    $senhaA = $_POST["senhaA"];
    $senha = $_POST["senha"]; 
    $nome = $_POST["nome"];
    $dataNasc = $_POST["dataNasc"];
    $email = $_POST["email"];
    $emailA = $_POST["emailA"];
    $adm = $_POST["adm"];
    $erro = 0;

    $senha_cript = password_hash($senhaA, PASSWORD_DEFAULT);
    $login = mysqli_query($conexao,"SELECT senha FROM userdados WHERE email = '$emailA'");
    $res = mysqli_fetch_array($login);
    $senhaPCript = $res[0];

        $jorge = "UPDATE userdados SET nome = '$nome', dataNasc = '$dataNasc', email = '$email', senha = '$senha_cript', adm = '$adm' WHERE email = '$emailA'";
        mysqli_query($conexao, $jorge);
        if($_SESSION['email'] == $emailA)
        {
            session_destroy();
            header('Location: login.php');
        }
        else
        {
            header('Location: dashboardAdm.php');
        }

?>