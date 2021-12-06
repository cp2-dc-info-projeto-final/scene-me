<?php
include 'conecta.php';                      
include 'autentica.php';

?>

<html>
    <head> 
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="/css/style.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https:// maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

        <title>Página Principal</title>
        <style>
        .loroJose
        {
            box-shadow: rgb(255, 193, 7) 0px 0.0625em 0.0625em, rgb(255, 193, 7) 0px 0.125em 0.5em, rgb(255, 193, 7) 0px 0px 0px 1px inset;
            width: 500px;
            border-radius: 5%;
            background-color: white;
            position: relative;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        .loroJoJo
        {
            background-color:rgb(66, 63, 52);
            box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
            width: 500px;
            height: 40px;
            border-radius: 5%;
            
        }

        .buscaJose
        {
            position: relative;
            top: 50%;
            transform: translate(50, 0%);
        }
        .titulo
        {
            font-size: 20px;
            color:#ffc107;
            font-family: Arial Black;
            font-weight: 600;
            text-shadow: #000 6px 7px 6px;
            
        }
        .conteudo
        {
            font-size: 15px;
            font-family: Calibri;
            
        }
        .link
        {
            color:#ffc107;
            font-family:Arial;
            font-size:12px;
            padding:16px 31px;
            text-decoration:none;
            text-shadow:2px 1px 4px #ffc107;
        }
        body{
            background: linear-gradient( to right,#f5c936 40%,#A88926 ,black); 
          
        }
        .button1
        {
            box-shadow: 2px 0px 4px 1px #ffc107;
            background-color:#000000;
            border-radius:16px;
            border:2px solid #ffc107;
            display:inline-block;
            cursor:pointer;
            color:#ffc107;
            font-family:Arial;
            padding:2px 2px;
            text-decoration:none;
            text-shadow:2px 1px 4px #ffc107;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }
        .busca{
            position: fixed;
            top:0;
            right: 0;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        

    
        .secs
        {
            display: none;
            padding-top: 1px;
            height: 400px;
            width: 600px;
            margin: 20px auto;
            background: #ccc;
            box-shadow: 0 0 3px #000;
        }
        
        
        </style>

    </head>
 
    
    <body>
        <!-- SIDEBAR -->
        
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Perfil</a> 
            <a href="attUser.php" id="I" name="">Alterar Dados</a>
            <a href="login.php" id="I">Sair</a>
            <button type="button" class="btn btn-danger" id="bb" value="Dashboard" style="bb" name="dashboard">
            <a id="bb" class="bb" href="dashboardAdm.php" target="_blank" onclick="window.open(this.href, this.target, 'width=754,height=479'); return false;">Admin Dashboard</a>
            </div>
        <!-- SIDEBAR -->

        <!-- SIDEBAR BUTTON -->
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <!-- SIDEBAR BUTTON -->

        <!-- BUSCA -->
        <div class="collapse navbar-collapse busca" id="busca">
            <form class="form-inline my-2 my-lg-0" method="POST" action="formAt.php">
                <input class="form-control mr-sm-2 busca" type="search" placeholder="Search" aria-label="Search" name="busc">
                <button class="btn btn-outline-success my-2 my-sm-0 busca" type="submit">Buscar Usuário 🔎</button>
            </form>
        </div>
        <!-- BUSCA -->

        <!-- POSTAR -->
        <button onclick="Appear(true)">Criar um Post</button>
        <section style="display: none; padding-top: 1px; height: 170px; width: 210px; margin: 20px auto; background: #ccc; box-shadow: 0 0 3px #000;" id="xd" name="xd">
            <form method="POST" action="arquivonovo.php">
                <label for="titul">Insira o título:</label>
                <input type="text" placeholder="Digite aqui:" name="titul"></input>
                <label for="conten">Insira o conteúdo:</label>
                <input type="textarea" rows="3" placeholder="conten" name="conten" rows="3s"></input>
                <input type="submit"></input>
                <input type="reset"></input>
            </form>
            <button onclick="Appear(false)">Fechar</button>
        </section>
        <!-- POSTAR -->

        <br>
        
        
        <br>
        <br>
        <br>
        <br>
        <br>

        <?php  
        
        //query de busca (postagem)
        $sql = "SELECT * FROM postagens";

        //result da busca
        $res = mysqli_query($conexao,$sql);
        
        //pegar a quantidade de valores do result
        $linhas = mysqli_num_rows($res);
        
        //loop para imprimir tudo dos results
        for($i=0; $i < $linhas; $i++)
        {
            //colocar a postagem atual em um array
            $user = mysqli_fetch_array($res);

            echo "<div class='loroJose'>";
            echo "<div class='loroJoJo'>";
            echo "<p class='titulo'>".$user["titulo"]."</p>";
            echo "</div>";
            echo "<p class='conteudo'>".$user["conteudo"]."</p>";
            echo "<p class'conteudo'>Enviado por: ".$user["usuario"]."</p>";
            echo "<button onclick='CommentAppear()'>Comentários</button>";
            echo "<section style='display: block; padding-top: 1px; margin: 20px auto; background: #ccc; box-shadow: 0 0 3px #000; overflow-y: scroll;' id='comentarios'>";
            
            //pegar o postID atual
            $postID = $user["id"];

            //pesquisar todos os comentários relacionados a essa postagem
            $newSql = "SELECT conteudo FROM comentarios WHERE postID = '$postID'";

            //pesquisar os atuores da postagem atual
            $outraSql = "SELECT autor FROM comentarios WHERE postID = '$postID'";
            
            //result da busca dos comentários
            $res2 = mysqli_query($conexao, $newSql);
                        
            //result da busca dos autores
            $res3 = mysqli_query($conexao, $outraSql);

            //pegar a quantidade de valores para imprimir
            $linhas2 = mysqli_num_rows($res2);

            if($linhas2 == 0)
            {
                
            }
            else
            {
                for($n=0; $n < $linhas2; $n++)
                {
                    $comments = mysqli_fetch_array($res2);
                    $autores = mysqli_fetch_array($res3);
                    echo "<p>Enviado por: ".$autores["autor"]."</p>";
                    echo "<br>";
                    echo "<p>".$comments["conteudo"]."</p>";
                    echo "<br>";
                }
            }
            echo "</section>";
            echo "<form method='POST' action='comentar.php'>";
            echo "<label for='conten'>Insira o comentário:</label>";
            echo "<input type='textarea' rows='3' placeholder='conteudo' name='conten'></input>";
            echo "<input type='submit'></input>";
            echo "<input type='hidden' name='ii' value='".$user["id"]."'></input>";
            echo "</form>";
            echo "</section>";
            echo "</div>";
            echo "<br>";
        }
    ?>

        <?php    

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
<script>
    var x = document.getElementById("xd");
    var y = document.getElementById("comentarios");
    var z = document.getElementById("comentar");
            
    function Appear(testar)
    {
        if(testar == true)
        {
            x.style.display = "block";
        }
        else
        {
            x.style.display = "none";
        }
    }

    function CommentAppear()
    {

        y.style.display = "block";
    }

    function Comentar()
    {

        z.style.display = "block";
    }

    document.getElementById("I").onclick = function()
    {
        document.getElementById("II").submit();
    }

    function openNav() 
    {
        document.getElementById("mySidenav").style.width = "250px";
    }   
    
    function closeNav()
    {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
