<html>
    <head> 
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="/css/style.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

        <title>Página Principal</title>
        <style>
            .b
            {
                display:none;
            }
        </style>
    </head>
 
    
    <body background="https://cdn.shopify.com/s/files/1/0305/4075/9177/products/N07162_2.jpg?v=1610505843">

        <form method="POST">
            <input type="submit" class="btn btn-warning" value="Sair" name="sair"><p>   </p>
            <input type="submit" class="btn btn-warning" value="Alterar Dados" name="altDados"><p>   </p>
            <button type="button" class="btn btn-warning" id="bb" value="Dashboard" style="bb" name="dashboard">
            <a id="bb" class="bb" href="dashboardAdm.php" target="_blank" onclick="window.open(this.href, this.target, 'width=754,height=479'); return false;">Admin dashboard</a>

        </form>
        <?php    
            include 'autentica.php';

            //logout
            if(isset($_POST["sair"]))
            {
                echo "botão foi clicado";
                header('location: login.php');
                session_destroy();
                exit;   
            }
            else{}

            //página de alteração de dados
            if(isset($_POST["altDados"]))
            {
                header('location: attUser.php');
            } 
            else{}
        ?>
    </body>
</html> 