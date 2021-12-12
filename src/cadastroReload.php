<?php
include("conecta.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataNasc = $_POST['dataNasc'];
$erro = 0;

//verifica e-mail
$queryCompara = "SELECT email FROM userdados WHERE email = '$email'";
$result = mysqli_query($conexao, $queryCompara);
$arrayInteract = mysqli_fetch_array($result);

//verifica nome
$queryNome = "SELECT nome FROM userdados WHERE nome = '$nome'";
$result2 = mysqli_query($conexao, $queryNome);
$arrayNome = mysqli_fetch_array($result2);


if(strlen($arrayInteract[0]) > 5 && strlen($arrayNome[0]) < 5)
{
    $erro =1;
    header("Location: index.php?perg=sim&nome=nao");
}

else if(strlen($arrayInteract[0]) < 5 && strlen($arrayNome[0]) > 5)
{
    $erro =1;
    header("Location: index.php?perg=nao&nome=sim");
}

else if(strlen($arrayInteract[0]) > 5 && strlen($arrayNome[0]) > 5)
{
    $erro =1;
    header("Location: index.php?perg=sim&nome=sim");
}
else
{
    $erro = 0;
}

if($erro == 0)
{
    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "INSERT INTO userdados(nome,email,senha,dataNasc) VALUES ('$nome','$email','$senha_cript','$dataNasc');";       
    mysqli_query($conexao, $sql);
    header('Location: login.php');
}
else{}
?>

<script>
window.onload() = function{
    document.getElementById("II").submit();
}
</script>