<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">  
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Início</span></a></li>
                        <li><a href="/"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Voltar</span></a></li>       
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                             
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Olá!</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter ">
                            <div class="sales report">                         
                                <table class="table table-hover table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">E-Mail</th>
                                            <th scope="col">Senha</th>
                                            <th scope="col">Data de Nascimento</th>
                                            <th scope="col">Possui Mod?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include 'conecta.php';
                                            include 'autentica.php';
                                            if($_SESSION["adm"] == 1)
                                            {
                                                $sql = "SELECT * FROM userdados";
                                                $res = mysqli_query($conexao,$sql);
                                                $linhas = mysqli_num_rows($res);

                                                for($i=0; $i < $linhas; $i++)
                                                {
                                                    $usuario = mysqli_fetch_array($res);
                                                    if($usuario["adm"] == 1)
                                                    {
                                                        $x = "Sim";
                                                    }
                                                    else
                                                    {
                                                        $x = "Não";
                                                    }

                                                    echo "<tr>";
                                                    echo "<td>".$usuario["nome"]."</td>";
                                                    echo "<td>".$usuario["email"]."</td>";
                                                    echo "<td>:".$usuario["senha"]."</td>";
                                                    echo "<td>".$usuario["dataNasc"]. "</td>";
                                                    echo "<td>".$x."</td>";
                                                    echo "<td>";
                                                    echo "<form action='dashImput.php' method='POST'> ";
                                                    echo "<div class='btn-group'>";
                                                    echo "<input type='hidden' name='email' id='email' style='display:hidden' value='" .$usuario["email"]. "'></input>";
                                                    echo "<button type='submit' class='btn btn-danger' target='_blank'> Deletar</button>";
                                                    echo "</form>";
                                                    echo "</div>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            else
                                            {
                                                echo "Acesso negado";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function()
    {
        $('[data-toggle="offcanvas"]').click(function()
        {
            $("#navigation").toggleClass("hidden-xs");
        });
    });
</script>