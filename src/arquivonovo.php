<?php

    include 'conecta.php';
    include 'autentica.php';
    //Pegar os valores do form, atribuir a tabela.

    $titulo = $_POST['titul'];
    $conteudo = $_POST['conten'];
    $user = $_SESSION["nome"];
    $autor = $_SESSION["nome"];

    $essiqueeli = mysqli_query($conexao, "SELECT id FROM userdados WHERE nome = '$user'");
    $essiqueeliArrei = mysqli_fetch_array($essiqueeli);
    $enfiaAliPfv = $essiqueeliArrei[0];

    $padrao = "none";

    $sql = "INSERT INTO postagens (titulo, conteudo, usuario, autor) VALUES ('$titulo','$conteudo','$enfiaAliPfv','$autor')";       
    mysqli_query($conexao, $sql); 

    header('Location: paginaInicial.php');

?>