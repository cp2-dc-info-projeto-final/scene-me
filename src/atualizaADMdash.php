<?php
include 'conecta.php';
    include 'autentica.php';
    $id = $_GET['id'];

    $sql = "SELECT nome, email, senha, dataNasc, id, adm FROM userdados WHERE id = '$id'";
    $res = mysqli_query($conexao,$sql);
    $linhas = mysqli_num_rows($res);
    $usuario = mysqli_fetch_array($res);
?>

<DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .blink
            {
                width: 200px;
                height:200px;
            }
            #imagem
            {
                background-size: cover;
            }
            #sombra
            {
                text-shadow: #000 4px 5px 4px;
            }             
        </style>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Scene-Me</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='formulario.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src='main.js'></script>
    </head>
    <body background="https://coolwallpapers.me/picsup/6052536-wallpapers-frames-cinema-samples-film-filming-creative-minimalism.jpg" >
        <div class="blink"></div>
        <form action="admDashAtualiza.php" method="POST">     
            <div class="col-md-4 offset-md-5 align-items-center">  
                <h1 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif " id="sombra"><b style="color:#ffc107;">Scene-Me   🎬 </b> </h1>  
            </div> 
            <div class="col-md-4 offset-md-4  align-items-center">
                <label for="nome" class="form-label"></label>
                <input type="text" class="form-control justify-content-center" name="nome" placeholder="Nome" value = "<?php echo $usuario['nome']?>" >
            </div>
            <div class="col-md-4 offset-md-4 align-items-center">
                <label for="email" class="form-label"></label> 
                <input type="email" class="form-control justify-content-center" name="email" placeholder="Email" value = "<?php echo $usuario['email']?>" >
            </div>
            <div class="col-4 offset-md-4 align-items-center" style="color: rgb(0, 0, 0);">
                <label for="senha" class="form-label justify-content-center"><i class="bi bi-lock"></i></label> 
                <input type="text" class="form-control justify-content-center " name="senha" placeholder="Senha" >
            </div>
            <div class="col-4 offset-md-4 align-items-center">
                <label for="dataNasc" class="form-label justify-content-center"><i class="bi bi-calendar-date"></i></label>
                <input type="date" class="form-control justify-content-center" name="dataNasc" value = "<?php echo $usuario['dataNasc']?>">
            </div>
            <div class="col-md-4 offset-md-4  align-items-center">
                <label for="adm" class="form-label"></label>
                <input type="number" min="0" max="1" class="form-control justify-content-center" name="adm" placeholder="1 para sim e 0 para não" value = "<?php echo $usuario['adm']?>" >
            </div>
            <div class="col-4 offset-md-4 align-items-center mt-4" >
                <button type="submit" class="btn btn-dark">Atualizar</button>⠀⠀⠀⠀⠀⠀           
            </div>
            <input type="hidden" name="senhaA" id="senhaA" style="display:hidden" value="<?php echo $usuario['senha']?>"></input>";
            <input type="hidden" name="emailA" id="emailA" style="display:hidden" value="<?php echo $usuario['email']?>"></input>";
        </form>     
    </body>
</html>
