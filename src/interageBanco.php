<?php

include "conecta.php";
include "autentica.php";

$conteudo = $_POST["conteudo"];
$id = $_POST["id"];

$login = mysqli_query($conexao,"SELECT id FROM comentarios WHERE id ='$id'");
$res = mysqli_fetch_row($login);
if($res)
{
    $jorge = "UPDATE comentarios SET conteudo = '$conteudo' WHERE id = '$id';";
    mysqli_query($conexao, $jorge);

    header("Location: paginaInicial.php");
} 

else
{
    echo "<p>Ocorreu um erro</p><br><p>Tente novamente</p>";
}

?>