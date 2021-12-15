<?php
    
    include 'conecta.php';
    include 'autentica.php';
    $id = $_GET['nome'];

    if($_SESSION["adm"] == 1)
    {
        $adm = "block";
    }
    else
    {
        $adm = "none";
    }
?> 

<meta charset="UTF-8"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<head>
    <style>
        .loroJose
        {
            box-shadow: rgb(255, 193, 7) 0px 0.0625em 0.0625em, rgb(255, 193, 7) 0px 0.125em 0.5em, rgb(255, 193, 7) 0px 0px 0px 1px inset;
            width: 500px;
            border-radius: 3%;
            background-color: white;
            position: relative;
            left: 390px;
            top:100px;
            padding: 10px;
        
        }

        
        body{
            background: linear-gradient( to bottom,#f5c936 40%,#A88926 ,black);

        }
        .divAjusta{

            align-items: center;
        }
        
        .titulo
        {
            font-size: 17px;
            color:rgb(31, 30, 30);
            font-weight: 600;
            font-family:Arial Black;
            /*text-shadow: #000 6px 7px 6px;*/
            position:relative;
            left:20px;
        }
        .conteudo
        {
            font-size: 15px;
            color:;
            font-family: Calibri;
            
        }
        .link
        {
            color:#ffc107;
            font-family:Arial;
            font-size:14px;
            padding:16px 31px;
            text-decoration:none;
            text-shadow:2px 1px 4px #ffc107;
            
        }
        .button1
        {
            box-shadow: 2px 0px 4px 1px #ffc107;
            background-color:#000000;
            border-radius:22px;
            border:2px solid #ffc107;
            display:inline-block;
            cursor:pointer;
            color:#ffc107;
            font-family:Arial;
            padding:2px 2px;
            text-decoration:none;
            text-shadow:2px 1px 4px #ffc107;
            position: relative;
            left:390px;
            top:100px
        }
        .perfil{
            color:black;
        }
    </style>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="paginaInicial.php"><img style="max-width:40px; margin-top: -7px; margin-bottom: -4px;" src="https://cdn.discordapp.com/attachments/883821651471523900/919018439199309824/logo.png"></a>
                
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="paginaInicial.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="postagensZ.php?nome=<?php echo $_SESSION['nome']?>">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="attUser.php">Alterar Dados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Sair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="display:<?php echo $adm ?>;" href="dashboardAdm.php" target="_blank" onclick="window.open(this.href, this.target, 'width=754,height=479'); return false;">Admin Dashboard</a>
                    </li>
                     <button type="button" class="btn btn-warning" style="display: <?php echo $adm ?>;" id="bb" value="Dashboard" style="bb" name="dashboard">
                </ul>
                <form method="POST" class="form-inline my-2 my-lg-0" style="float: right;" action="formAt.php" >
                    <input name="busc" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>

    <div>
    </div>
    <?php                        
        
        $sql = "SELECT * FROM postagens WHERE id = '$id'";
        $res = mysqli_query($conexao,$sql);
        $linhas = mysqli_num_rows($res);

        if($linhas <= 0)
        {
            echo "<h1>Parece que este usuário não possui nenhuma postagem.</h1>";
        }
        else
        {
            for($i=0; $i < $linhas; $i++)
            {
                $kok = $_SESSION['adm'];
                $user = mysqli_fetch_array($res);
                echo "<div class='loroJose'>
                <p class='titulo'>".$user["titulo"]."</p>
                <hr style='width=100%'>
                <p class='conteudo'>".$user["conteudo"]."</p>
                </div>"; 
                if($user['usuario'] == $_SESSION['nome'])
                {
                    echo "<div class='btn-group'>";
                    echo "<button style='position:relative;' class='button1'><a class='link' href='editarPost.php?nome=".$user['usuario']."&id=".$user["id"]."'>Editar</a></button>";
                 }    
                if($kok == 1 || $user['usuario'] == $_SESSION['nome'])
                
                {
                        echo "<button style='position:relative;' class='button1' target='_blank'><a href='excluiPost.php?nome=".$user['usuario']."&id=".$user["id"]."' class='link'>Deletar</a></button>";
                        echo "</div>";
                        echo "<br>";
                        echo "<br>";
                }
                else{}
                    echo "</div>";
                
                
            }
        }
    ?>
</body>
