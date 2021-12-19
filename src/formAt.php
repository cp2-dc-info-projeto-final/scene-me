<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                             
                    </header>
                </div>
                <div class="user-dashboard">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter ">
                            <div class="sales report">                         
                                <table class="table table-hover table-dark">
                                    <thead>
                                        <style>
                                        body{

                                            background: linear-gradient( to right, #f5c936 40%,#A88926 ,black);  
                                        }
                                        </style>
                                        <tr>
                                            <th scope="col">Nome</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $x = $_POST['busc'];
                                            include 'conecta.php';
                                            include 'autentica.php';

                                            $sql = "SELECT id FROM userdados WHERE nome LIKE '%".$x."%' ";
                                            $res = mysqli_query($conexao,$sql);
                                            $linhas = mysqli_num_rows($res);

                                            $sql2 = "SELECT nome FROM userdados WHERE nome LIKE '%".$x."%' ";
                                            $res2 = mysqli_query($conexao,$sql2);

                                            for($i=0; $i < $linhas; $i++)
                                            {
                                                $usuario2 = mysqli_fetch_array($res2);
                                                $usuario = mysqli_fetch_array($res);

                                                echo "<tr>";
                                                echo "<td>".$usuario2[0]."</td>";
                                                echo "<td>";
                                                echo "<button class='btn'><a href='postagensZ.php?nome=".$usuario[0]."' class='text-light'>Visualizar</a></button>";
                                                echo "</div>";
                                                echo "</td>";
                                                echo "</tr>";
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