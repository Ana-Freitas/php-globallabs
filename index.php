<?php

session_start(); //inicia uma sessao e manipula dados de sessao. Deve ser colocado antes de qualuqer codigo
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Formulário de inscrição></title>
    <meta name="author" content="">
    <meta name="viewport" content="width-device-width, initial-scale-1">
</head>

<body>
<p> FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php 

        $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }
    
        //isset verifica se o valor passado foi iniciado
        //se a mensagem-de-erro da $_SESSION tiver iniciado ela vai mostrat o  valor atribuido 
        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '' ;
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Sua idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value="Enviar dados"/></p>

   
</form>
</body>
</html>