<?php
    include "conecta.php";
    include "autentica.php";

    $senhaA = $_POST["senhaA"];
    $senha = $_POST["senha"]; 
    $nome = $_POST["nome"];
    $dataNasc = $_POST["dataNasc"];
    $email = $_POST["email"];
    $adm = $_POST["adm"];


    $login = mysqli_query($conexao,"SELECT senha FROM userdados WHERE senha ='$senhaA'");
    $res = mysqli_fetch_row($login);
    if($res)
    {
        $jorge = "UPDATE userdados SET nome = '$nome', adm = '$adm', dataNasc = '$dataNasc', email = '$email', senha = '$senha' WHERE senha = '$senhaA';";
        mysqli_query($conexao, $jorge);

        //testar se a sessão de adm do cara é 0 após a atualização
        /*
        $queryNova = mysqli_query($conexao, "SELECT adm FROM userdados WHERE email = '$emaiL'");
        $res = mysqli_query($conexao,$queryNova);
        $linhas = mysqli_num_rows($res);
        $usuario = mysqli_fetch_array($res);
        */
        
        /*
        if($usuario['adm'] != $adM)
        {
            session_destroy();
            echo "<br>O usuário foi atualizado com sucesso, porém verificamos que você não possui mais privilégios de administrador. <br>Por favor, faça o seu login novamente:";
            echo "<br><a href='login.php'>Login</a>";
        }
        else
        {            
            echo "<br>O usuário foi atualizado com sucesso!";
        }
        */
        echo "<br>O usuário foi atualizado com sucesso!";
    } 
?>