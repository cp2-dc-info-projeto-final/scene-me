<?php
include 'conecta.php';                      
include 'autentica.php';
$hyu = $_SESSION["nome"];
$nomeId = mysqli_query($conexao, "SELECT id FROM userdados WHERE nome = '$hyu'");
    $nomeArray = mysqli_fetch_array($nomeId);
    
if($_SESSION["adm"] == 1)
{
    $adm = "block";
}
else
{
    $adm = "none";
}


?>

<html>
    <head>
<meta charset="UTF-8"/>
        <style>
            .claquete
            {
                font-size: 20px;
            }

            .claqueteCurtido
            {
                font-size: 20px;
                font-color: blue;
                color: blue;
            }
            
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <link href="https:// maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

        <title>Página Inicial</title>
        <link rel="stylesheet" type="text/css" href="CSS.css"> 
 
    </head>
    <body>
        
        <!--<div id="mySidenav" class="sidenav">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php
            echo "<a href='postagensZ.php?nome=".$_SESSION['nome']."'>Perfil</a>";
            ?>
                                            
            <a href="attUser.php" id="I" name="">Alterar Dados</a>
            <a href="login.php" id="I">Sair</a>
            <button type="button" class="btn btn-warning" style="display: <?php echo $adm ?>;" id="bb" value="Dashboard" style="bb" name="dashboard">
            <a id="bb" class="bb" style="display: <?php echo $adm ?>;" href="dashboardAdm.php" target="_blank" onclick="window.open(this.href, this.target, 'width=754,height=479'); return false;">Admin Dashboard</a>
            </div>    
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <div class="collapse navbar-collapse busca" id="busca">
                <form class="form-inline my-8 my-lg-2" method="POST" action="formAt.php">
                    <input class="form-control mr-sm-4 busca" type="search" placeholder="Search" aria-label="Search" name="busc">
                    <button class="btn btn-outline-success my-2 my-sm-0 busca" type="submit">Buscar Usuário 🔎</button>
                </form>
            </div>-->
        
        <!-- BUSCA -->
        <!-- criar uma navbar -->
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
                         <a class="nav-link" href="postagensZ.php?nome=<?php echo $nomeArray[0]; ?>">Perfil</a>
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
                </ul>
                <form method="POST" class="form-inline my-2 my-lg-0" style="float: right;" action="formAt.php" >
                    <input name="busc" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>


        <!-- POSTAR -->
        <button class='button1' onclick="Appear(true)">Criar um Post</button>
        <section style="display: none; padding-top: 1px; height: 170px; width: 210px; margin: 20px auto; background: #ccc; box-shadow: 0 0 3px #000;" id="xd" name="xd" class="cria">
            <form method="POST" action="arquivonovo.php">
                <label for="titul">Insira o título:</label>
                <input type="text" placeholder="Digite aqui:" name="titul"></input>
                <label for="conten">Insira o conteúdo:</label>
                <input type="textarea" rows="3" placeholder="conten" name="conten" rows="3s"></input>
                <input type="submit"></input>

               
            </form>
            <button onclick="Appear(false)">Fechar</button>
        </section>


        
        <!-- POSTAR -->
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

            echo "  <div class='loroJose'>
                        <div class='loroJoJo'>
                            <b><a href='postagensZ.php?nome=".$user['usuario']."'><p>".$user['autor']."</p></a></b>
                            <hr style='width: 100%;'>
                            <p class='titulo'>".$user["titulo"]."</p>
                        </div>
                        <hr style='width=100%'>
                        <p class='conteudo'>".$user["conteudo"]."</p>";


            //query de busca das curtidas (postagem)
            $userID = $user['id'];
            
            $curtidasVerifica = "SELECT autorCurtida FROM curtidas WHERE curtidaPostId = '$userID'";

            //result da busca 
            $resCurVer = mysqli_query($conexao,$curtidasVerifica);
            
            //pegar a quantidade de valores do result
            $linhasCurVer = mysqli_num_rows($resCurVer);

            $curtidaControle = 0;

            $totalCurtidas = 0;


            for($g=0; $g < $linhasCurVer; $g++)
            {
                //colocar o autor atual em um array
                $autorCur = mysqli_fetch_array($resCurVer);

                if($_SESSION["nome"] == $autorCur["autorCurtida"])
                {
                    $curtidaControle = 1;
                }
                else
                {

                }
                $totalCurtidas++;
            }

            if($curtidaControle == 0)
            {
                echo "<form method='POST' action='curtir.php' id='curtirForm'>";
                echo "<label for='curtir'>".$totalCurtidas."</label>";
                echo "<button class='claquete' type='submit' name='curtir' id='curtirButton'>👍</button>";
                echo "<input type='hidden' name='curtir' value='sim'></input>";
                echo "<input type='hidden' name='idCurtida' value='".$user["id"]."'></input>";
                echo "<input type='submit' style='display:none;'></input>";
                echo "</form>";
            }
            else
            {
                echo "<form method='POST' action='curtir.php' id='curtirForm'>";
                echo "<label for='curtir'>".$totalCurtidas."</label>";
                echo "<button type='submit' class='claqueteCurtido' name='curtir' id='curtirButton'>👍</button>";
                echo "<input type='hidden' name='curtir' value='nao'></input>";
                echo "<input type='hidden' name='idCurtida' value='".$user["id"]."'></input>";
                echo "<input type='submit' style='display:none;'></input>";
                echo "</form>";
            }

            $curtidaControle = 0;


            echo "<button class='button1' onclick='Disappear(".$i.")' style='display:block;'>Comentários</button>";
            echo "<section id='".$i."' style='display: none; margin: 20px auto; background: #ccc; box-shadow: 0 0 3px #000; border:none;
            background:none;' id='comentarios'>";
            
            //pegar o postID atual
            $postID = $user["id"];

            //pesquisar todos os comentários relacionados a essa postagem
            $newSql = "SELECT conteudo FROM comentarios WHERE postID = '$postID'";

            //pesquisar os autores da postagem atual
            $outraSql = "SELECT autor FROM comentarios WHERE postID = '$postID'";

            //pesquisar os ids da postagem atual
            $quartoSql = "SELECT id FROM comentarios WHERE postID = '$postID'";
            
            //result da busca dos comentários
            $res2 = mysqli_query($conexao, $newSql);
                        
            //result da busca dos autores
            $res3 = mysqli_query($conexao, $outraSql);
            
            //result da busca dos autores
            $res4 = mysqli_query($conexao, $quartoSql);

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
                    $ids = mysqli_fetch_array($res4);
                    echo "<p><b style='font-size:18px;'>".$autores["autor"]."</b></p>";
                    echo "<br>";
                    echo "<p>".$comments["conteudo"]."</p>";
                    echo "<br>";
                    $commentID = $ids["0"];
            
                    $curtidasCVerifica = "SELECT autorCommentCurtida FROM curtidas WHERE curtidaCommentId = '$commentID'";

                    //result da busca 
                    $resComCurVer = mysqli_query($conexao,$curtidasCVerifica);
                    
                    //pegar a quantidade de valores do result
                    $linhasComCurVer = mysqli_num_rows($resComCurVer);

                    $curtidaComControle = 0;

                    $totalComCurtidas = 0;


                    for($l=0; $l < $linhasComCurVer; $l++)
                    {
                        //colocar o autor atual em um array
                        $autorComCur = mysqli_fetch_array($resComCurVer);

                        if($_SESSION["nome"] == $autorComCur["autorCommentCurtida"])
                        {
                            $curtidaControle = 1;
                        }
                        else
                        {

                        }
                        $totalComCurtidas++;
                    }

                    if($curtidaControle == 0)
                    {
                        echo "<form method='POST' action='comCurtida.php' id='curtirComForm'>";
                        echo "<label for='curtir'>".$totalComCurtidas."</label>";
                        echo "<button class='claquete' type='submit' name='curtir' id='curtirComButton'>👍</button>";
                        echo "<input type='hidden' name='curtir' value='sim'></input>";
                        echo "<input type='hidden' name='idCurtida' value='".$ids["0"]."'></input>";
                        echo "<input type='submit' style='display:none;'></input>";
                        echo "</form>";
                    }
                    else
                    {
                        echo "<form method='POST' action='comCurtida.php' id='curtirComForm'>";
                        echo "<label for='curtir'>".$totalComCurtidas."</label>";
                        echo "<button type='submit' class='claqueteCurtido' name='curtir' id='curtirComButton'>👍</button>";
                        echo "<input type='hidden' name='curtir' value='nao'></input>";
                        echo "<input type='hidden' name='idCurtida' value='".$ids["0"]."'></input>";
                        echo "<input type='submit' style='display:none;'></input>";
                        echo "</form>";
                    }

                    $curtidaControle = 0;



                    if($autores['autor'] == $_SESSION['nome'])
                    {
                        echo "<div class='btn-group'>";
                        echo "<button class='button1'><a class='link' href='editaComentario.php?id=".$ids["id"]."'>Editar</a></button>";                         
                 
                        echo "<button class='button1' target='_blank'><a href='excluiComentario.php?id=".$ids["id"]."' class='link'>Deletar</a></button>";
                        echo "</div>";
                        echo "<br>";
                        echo "<br>";
                    }

                    else if($_SESSION['adm'] == 1)
                    {
                            echo "<div class='btn-group'>";
                            echo "<button class='button1' target='_blank'><a href='excluiComentario.php?id=".$ids["id"]."' class='link'>Deletar</a></button>";
                            echo "</div>";
                            echo "<br>";
                            echo "<br>";
                    }
                }
            }
    
           
            
            echo "</section>";
            echo "<section>";
            echo "<form method='POST' action='comentar.php'>";
            echo "<label for='conten'></label>";
            echo "<input type='textarea' rows='3' placeholder='conteudo' name='conten' ></input>";
            echo "<button class='button1' type='submit'>Comentar</input>";
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
        <!-- Como um link -->

  
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

    function Disappear(id)
    {   
        var ss = document.getElementById(id);
        if(ss.style.display == "none")
        {
            ss.style.display = "block";
        }
        else
        {
            ss.style.display = "none";
        }
    }

    document.getElementById("comentarios").onclick = function()
    {
        document.getElementById("II").submit();
    }

    function Comentar()
    {

        z.style.display = "block";
    }

    document.getElementById("I").onclick = function()
    {
        document.getElementById("II").submit();
    }

    document.getElementById("curtirButton").onclick = function()
    {
        document.getElementById("curtirForm").submit();
    }

    document.getElementById("curtirComButton").onclick = function()
    {
        document.getElementById("curtirComForm").submit();
    }

    function openNav() 
    {
        document.getElementById("mySidenav").style.width = "250px";
    }   
    
    function closeNav()
    {
        document.getElementById("mySidenav").style.width = "0";
    }

    function changeButton(x)
    {
        x.classList.toggle("claqueteCurtido");
    }
</script>   
