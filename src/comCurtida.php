<?php
include 'conecta.php';
include 'autentica.php';

  $curtidaPostId = $_POST['idCurtida'];
  $curtirQ = $_POST['curtir'];
  $autorC = $_SESSION["nome"];
    if($curtirQ == "sim")
    {
        $sql = "INSERT INTO curtidas (autorCommentCurtida, curtidaCommentId) VALUES ('$autorC','$curtidaPostId')";
        mysqli_query($conexao, $sql);
        header("Location: paginaInicial.php");
    }
    else
    {
        $sql = "DELETE FROM curtidas WHERE autorCommentCurtida = '$autorC' AND curtidaCommentId =  '$curtidaPostId'";
        mysqli_query($conexao, $sql);
        header("Location: paginaInicial.php");
    }
?>