<?php

  include "conecta.php";
  //valor de email do form
  $email = $_POST["email"];
    
  //valor da senha do form
  $senha = $_POST["senha"];


  //query que busca senha, email e valor de adm (se adm = 1 usuário é adm
  //se for 0 ele não tem privilégios)
  $sql = mysqli_query($conexao,"SELECT senha, email, adm FROM userdados WHERE email ='$email' AND senha = '$senha'");

  //passando a function mysqli_fetch para testar se a query teve resultado
  $res = mysqli_fetch_array($sql);

  //testa a query. Se verdadeiro inicia a sessão com email, senha e valor de adm 
  //e redirect para PagInicial
  if($res)
  {
    echo "<pre>";
    print_r($res);
    echo "</pre>";
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
    $_SESSION["adm"] = $res["adm"];
    //colocar o valor adm retirado da query. Aqui é onde está o erro
    header('location: paginaInicial.php');
  }
  else //erro na query
  {
    echo "Erro"; //iremos aprimorar isto mais tarde
    header('location: login.php');
  }
?>