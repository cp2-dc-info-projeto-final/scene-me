<?php
    include 'conecta.php';
    $email = $_POST['email'];
    $sql = "DELETE FROM userdados WHERE email = '$email'";
    $deletar = mysqli_query($conexao, $sql);

    echo 'Usuário deletado!';
    echo "<br><a href='dashboardAdm.php' target='_blank'>Voltar</a>"; 
?>