<?php
        session_start();
        include("conecta.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $dataNasc = $_POST['dataNasc'];
        $erro = 0;

            if(strlen($nome) < 5){
                echo "O nome deve possuir mais de 5 caracteres<br>";
                $erro = 1; 
            } else{}

            if(strlen($nome) > 15){
                echo "O nome deve possuir menos de 15 caracteres<br>";
                $erro = 1;
            } else{}
          
            if(strlen($senha) < 5){
                echo "A senha deve ter mais de 5 caracteres<br>";
                $erro = 1;
            }else{}
          
            if(strlen($senha) > 15){
                echo "A senha deve ter menos de 15 caracteres<br>";
                $erro = 1;
            }else{}
           
            if(strlen($email) < 8 || strstr($email,'@') == FALSE){
                echo "Insira seu email corretamente. <br>";
                $erro = 1;
            }else{}
            
            if(strlen($email) >40 || strstr($email,'@') == FALSE){
                echo "Insira seu email corretamente. <br>";
                $erro = 1;
            }else{}
            
            if($erro == 0){
                $sql = "INSERT INTO userdados(nome,email,senha,dataNasc) VALUES ('$nome','$email','$senha','$dataNasc');";       
                mysqli_query($conexao, $sql);
                header('Location: paginaInicial.php');
            }
            
            else{
                echo"Algo está errado :( <br> Tente novamente".mysqli_connect_error($conexao);
            }
            
        mysqli_close($conexao);
?>