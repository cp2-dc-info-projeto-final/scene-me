<?php
include 'conecta.php';
if(isset($_GET['perg']))
{
    $p = $_GET['perg'];
}
else{ $p="nao";}

if(isset($_GET['nome']))
{
    $g = $_GET['nome'];
}
else{ $g="nao";}
?>

<DOCTYPE html>
<html>
    <head>
<meta charset="UTF-8"/>
        <style type="text/css">
            .blink
            {
                width: 140px;
                height:200px;
            }
            
            #sombra
            {
                text-shadow: black 4px 5px 4px;
            }
            .inv{
                position: relative;
                left:10px
                
            }
            .invi{
                position: relative;
                left:177px
                
            }
             
        </style>

        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title">Scene-Me</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='formulario.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src='main.js'></script>
    </head>
    <body background="https://coolwallpapers.me/picsup/6052536-wallpapers-frames-cinema-samples-film-filming-creative-minimalism.jpg" >
        <div class="blink"></div>
        <div>
          <form action="cadastroReload.php" method="POST">              
            <div class="col-md-4 offset-md-5 align-items-center" style="Position: Relative; right: 20px;">  
                <h1 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif " id="sombra"><b style="color:#ffc107;" class="inv">Scene-Me 🎬</b> </h1>  
            </div> 
            <div class="col-md-4 offset-md-4  align-items-center">
                <label for="nome" class="form-label"></label>
                <input type="text" class="form-control justify-content-center" id="nomeLabel" name="nome"  placeholder="nome" required>
            </div>
            <div class="col-md-4 offset-md-4 align-items-center">
                <label for="email" class="form-label"></label> 
                <input type="email" class="form-control justify-content-center" id="emailLabel" name="email" placeholder="email" required>
            </div>
            <div class="col-4 offset-md-4 align-items-center" style="color: rgb(0, 0, 0);">
                <label for="senha" class="form-label justify-content-center"><i class="bi bi-lock"></i></label> 
                <input type="password" class="form-control justify-content-center " id="senhaLabel" name="senha" placeholder="senha" required >
            </div>
            <div class="col-4 offset-md-4 align-items-center">
                <label for="dataNasc" class="form-label justify-content-center"><i class="bi bi-calendar-date"></i></label>
                <input id="dataNasc" type="date" class="form-control justify-content-center" name="dataNasc" required >
            </div>
            <div class="col-4 offset-md-4 align-items-center mt-4" >
                <button type="submit" id="enviarB" class="btn btn-dark" style="display:none; position: absolute; z-index: 4; ">Cadastrar</button><a class="btn btn-dark invi" href="login.php" role="button" id="rest" style="display:block; position: absolute; top: 490px; left:52%; z-index: 5; " >Acessar a minha conta</a>                  
            </div>
          </form>
        <button class="btn btn-dark" id="validacao" style="display:block; position: absolute; top: 490px; left: 33%; z-index: 5; ">Validar</button>
        </div>  
        <button value="<?php echo $p;?>" id="exibir" style="display:none; position: relative; z-index: 5; top:0%; left: 100%;">.</button>
        <button value="<?php echo $g;?>" id="nn" style="display:none; position: relative; z-index: 5; top:0%; left: 100%;">.</button>  
        
    </body>

</html>

<script>
    window.onload = function()
    {
        var perg = document.getElementById("exibir").value;
        var nn = document.getElementById("nn").value;
        if (perg == "sim" && nn == "nao")
        {
            alert("O e-mail fornecido já consta no nosso sistema\nTente novamente");
        }
        else if (perg == "nao" && nn == "sim")
        {  
            alert("O nome fornecido já consta no nosso sistema\nTente novamente");
        }
        else if(perg == "sim" && nn == "sim")
        {
            alert("Este cadastro já consta no sistema\nPor favor, faça o login");
        }
    }
    var controle = 0;

    document.getElementById('validacao').onclick = function() 
    {
        var nome = document.getElementById("nomeLabel").value;
        var email = document.getElementById("emailLabel").value;
        var senhaLabel = document.getElementById("senhaLabel").value;

        if(nome.length < 5)
        {
            controle++;
            alert("O seu nome possui menos de 5 caracteres");
        }
        else
        {

        }

        if(nome.length > 20)
        {
            controle++;
            alert("O seu nome é grande demais\nO máximo aceito em nosso site é de 20 caracteres");
        }
        else
        {

        }

        if(email.length <8)
        {
            controle++;
            alert("O seu e-mail é curto demais");
        }
        else
        {

        }

        if(email.length > 40)
        {
            controle++;
            alert("O seu e-mail é grande demais");
        }
        else
        {

        }

        if(senhaLabel.length < 5)
        {   
            controle++;
            alert("A senha fornecida é curta demais");
        }
        else
        {

        }

        if(senhaLabel.length > 15)
        {
            controle++;
            alert("A senha é grande demais");
        }
        else
        {

        }

        if(controle > 0)
        {
            controle = 0;
        }
        else
        {
            document.getElementById("validacao").style.display = "none";
            document.getElementById("enviarB").style.display = "block";
        }
    }

    


    document.getElementById('nomeLabel').onclick = function Reset() 
    {
        document.getElementById("validacao").style.display = "block";
        document.getElementById("enviarB").style.display = "none";
        controle = 0;
    }

    document.getElementById('emailLabel').onclick = function ResetT() 
    {
        document.getElementById("validacao").style.display = "block";
        document.getElementById("enviarB").style.display = "none";
        controle = 0;
    }

    document.getElementById('senhaLabel').onclick = function ResetTT() 
    {
        document.getElementById("validacao").style.display = "block";
        document.getElementById("enviarB").style.display = "none";
        controle = 0;
    }
</script>