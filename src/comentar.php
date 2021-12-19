<?php

include "conecta.php";
include "autentica.php";

$conteudo = $_POST["conten"];
$autor = $_SESSION["nome"];
$postId = $_POST["ii"];

    $jorge = "INSERT INTO comentarios(conteudo,autor,postID) VALUES ('$conteudo','$autor','$postId')";
    mysqli_query($conexao, $jorge);
    
    header('Location: paginaInicial.php');
?>