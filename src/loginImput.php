<?php

  include "conecta.php";
  //valor de email do form
  $email = $_POST["email"];
    
  //valor da senha do form
  $senha = $_POST["senha"];

  
  //query que busca senha, email e valor de adm (se adm = 1 usuário é adm
  //se for 0 ele não tem privilégios)

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

?>