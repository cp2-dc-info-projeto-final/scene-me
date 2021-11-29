<?php
    include "conecta.php";

    $senhaA = $_POST["senhaA"];
    $senha = $_POST["senha"]; 
    $nome = $_POST["nome"];
    $dataNasc = $_POST["dataNasc"];
    $email = $_POST["email"];
    $erro = 0;

    $login = mysqli_query($conexao,"SELECT senha FROM userdados WHERE senha ='$senhaA'");
    $res = mysqli_fetch_row($login);
    if($res)
    {
        $jorge = "UPDATE userdados SET nome = '$nome', dataNasc = '$dataNasc', email = '$email', senha = '$senha' WHERE senha = '$senhaA';";
        mysqli_query($conexao, $jorge);  
        session_destroy();
        echo "<br>O usuário foi atualizado com sucesso!<br>Por favor, faça o seu login novamente:";
        echo "<br><a href='login.php'>Login</a>";
    } 
?>