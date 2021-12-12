<?php

    include 'conecta.php';
    include 'autentica.php';
    //Pegar os valores do form, atribuir a tabela.

    $titulo = $_POST['titul'];
    $conteudo = $_POST['conten'];
    $user = $_SESSION["nome"];

    $padrao = "none";

    $sql = "INSERT INTO postagens (titulo, conteudo, usuario) VALUES ('$titulo','$conteudo','$user');";       
    mysqli_query($conexao, $sql);


    //pesquisar os ids da postagem atual
    $procurarCurtida = "SELECT id FROM postagens WHERE conteudo = '$conteudo'";
            
    //result da busca dos comentários
    $res2 = mysqli_query($conexao, $procurarCurtida);
    $arrayInteract = mysqli_fetch_array($res2);

    mysqli_query($conexao, "INSERT INTO curtidas (autorCurtida, curtidaPostId) VALUES ('$padrao', '$arrayInteract[0]')");
    header('Location: paginaInicial.php');

?>