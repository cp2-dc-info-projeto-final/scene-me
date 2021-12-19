<?php

include 'conecta.php';                      
include 'autentica.php';

if(isset($_GET['perg']))
{
  $perg = $_GET['perg'];  
}
else{$perg = "nao";}

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
    <body background="https://coolwallpapers.me/picsup/6052536-wallpapers-frames-cinema-samples-film-filming-creative-minimalism.jpg">
        <div class="blink"></div>
        <form action="atualizaDados.php" method="POST">     
            <div class="col-md-4 offset-md-5 align-items-center">  
                <h1 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif " id="sombra"><b style="color:#ffc107;">Scene-Me   🎬 </b> </h1>  
            </div> 
            <div class="col-md-4 offset-md-4  align-items-center">
                <label for="nome" class="form-label"></label>
                <input type="text" class="form-control justify-content-center" id="nomeLabel" name="nome" placeholder="Nome novo" >
            </div>
            <div class="col-md-4 offset-md-4 align-items-center">
                <label for="email" class="form-label"></label> 
                <input type="email" class="form-control justify-content-center"  id="emailLabel" name="email" placeholder="Email novo" >
            </div>
            <div class="col-4 offset-md-4 align-items-center" style="color: rgb(0, 0, 0);">
                <label for="senha" class="form-label justify-content-center"><i class="bi bi-lock"></i></label> 
                <input type="password" class="form-control justify-content-center " id="senhaLabel" name="senha" placeholder="Senha nova">
            </div>
            <div class="col-4 offset-md-4 align-items-center">
                <label for="dataNasc" class="form-label justify-content-center"><i class="bi bi-calendar-date"></i></label>
                <input type="date" class="form-control justify-content-center" name="dataNasc">
            </div>
            <div class="col-md-4 offset-md-4  align-items-center">
                <label for="emailA" class="form-label"></label>
                <input type="text" class="form-control justify-content-center"  id="emailALabel" name="emailA" placeholder="Email antigo                                                                             🔒 ">
            </div>
            <div class="col-md-4 offset-md-4  align-items-center">
                <label for="senhaA" class="form-label"></label>
                <input type="text" class="form-control justify-content-center" id="senhaALabel" name="senhaA" placeholder="Senha antiga                                                                             🔒 ">
            </div>
            <div class="col-4 offset-md-4 align-items-center mt-4" >
                <button type="submit" style="display:none;" id="enviarB" class="btn btn-dark">Atualizar</button>⠀⠀⠀⠀⠀⠀           
            </div>
        </form>
        <button value="<?php echo $perg; ?>" style="display:none;" id="ppp">.</button>
        <button class="btn btn-dark" id="validacao" style="display:block; position: relative; top:-8%; left: 33%;">Validar</button>  
    </body>
</html>

<script>
    var controle = 0;

    window.onload = function()
    {
        var ppp = document.getElementById("ppp").value;
        if(ppp == "sim")
        {
            alert("Por favor, confira o e-mail e a senha antiga.");
        }
        else
        {
            
        }
    }

    document.getElementById('validacao').onclick = function() 
    {
        var nome = document.getElementById("nomeLabel").value;
        var email = document.getElementById("emailLabel").value;
        var senhaLabel = document.getElementById("senhaLabel").value;
        var emailA = document.getElementById("emailALabel").value;
        var senhaALabel = document.getElementById("senhaALabel").value;

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

        if(email.length <8 || emailA.length < 8)
        {
            controle++;
            alert("O seu e-mail é curto demais");
        }
        else
        {

        }

        if(email.length > 40 || emailA.length > 40)
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
