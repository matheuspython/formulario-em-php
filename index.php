<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    
    if(isset($_POST['acao'])){ //o isset vai fazer com que essa parte do codigo so execute se o usuario apertar no botao
        $nome = @$_POST['nome'];
        $email = @$_POST['email'];
        echo "<div class='confirma'>";
        echo "<div class='centro'>ola:$nome seja bem vindo</div>";
        echo "<div class='centro'>seu email é:$email?</div>";
        echo "<input class='botao centro' type='submit' name='acao' value='confirmar'>";
        echo "</div>";
    }
    ?>
    <form method="post">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="email" placeholder="email">
        <input class="botao" type="submit" name="acao" value="enviar">
    </form>
    
   
    






</body>
</html>