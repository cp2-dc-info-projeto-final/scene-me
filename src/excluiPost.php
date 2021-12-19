<?php
 
 include 'conecta.php';
 $id = $_GET['id'];
 $nomeUrl = $_GET['nome'];

 //apagar post
 $sql = "DELETE FROM postagens WHERE id = '$id'";
 $deletar = mysqli_query($conexao, $sql);

//apagar comentário
$sql = "DELETE FROM comentarios WHERE postId = '$id'";
$deletar = mysqli_query($conexao, $sql);

//apagar as curtidas
$sql = "DELETE FROM curtidas WHERE curtidaPostId = '$id'";
$deletar = mysqli_query($conexao, $sql);

$nom = "Location: postagensZ.php?nome=" . $nomeUrl;

 header($nom);
 
 
 exit;

?>