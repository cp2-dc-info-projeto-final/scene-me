<?php
 
 include 'conecta.php';
 $id = $_GET['id'];
 $sql = "DELETE FROM comentarios WHERE id = '$id'";
 $deletar = mysqli_query($conexao, $sql);

 header("Location: paginaInicial.php");
?>