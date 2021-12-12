<?php
 
include 'conecta.php';
$email = $_POST['email'];

$novaSql = mysqli_query($conexao, "SELECT nome FROM userdados WHERE email = '$email'");
$nomE = mysqli_fetch_array($novaSql);
$nome = $nomE[0];


//pegar posts
$pegarPosts = mysqli_query($conexao, "SELECT id FROM postagens WHERE usuario = '$nome'");
$linhas = mysqli_num_rows($pegarPosts);
        
//loop para imprimir tudo dos results
for($i=0; $i < $linhas; $i++)
{
    $array = mysqli_fetch_array($pegarPosts);
    $idDaPostagem = $array["id"];
    mysqli_query($conexao, "DELETE FROM postagens WHERE id = '$idDaPostagem'");
}


//pegar comentarios
$pegarComentarios = mysqli_query($conexao, "SELECT postId FROM comentarios WHERE autor = '$nome'");

$linhas = mysqli_num_rows($pegarComentarios);
        
//loop para apagar tudo dos results
for($i=0; $i < $linhas; $i++)
{
    $array = mysqli_fetch_array($pegarPosts);
    $idDaPostagem = $array["id"];
    mysqli_query($conexao, "DELETE FROM comentarios WHERE postId = '$idDaPostagem'");
}



//pegar curtidas
$pegarComentarios = mysqli_query($conexao, "SELECT curtidaPostId FROM curtidas WHERE autorCurtida = '$nome'");

$linhas = mysqli_num_rows($pegarPosts);
        
//loop para apagar tudo dos results
for($i=0; $i < $linhas; $i++)
{
    $array = mysqli_fetch_array($pegarPosts);
    $idDaPostagem = $array["curtidaPostId"];
    mysqli_query($conexao, "DELETE FROM curtidas WHERE curtidaPostId = '$idDaPostagem'");
}


//apagar usuário
$sql = "DELETE FROM userdados WHERE email = '$email'";
$deletar = mysqli_query($conexao, $sql);


header('Location: dashboardAdm.php');
exit;

?>