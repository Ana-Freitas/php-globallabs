<?php
session_start();

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome']; //array associativo que recupera o valor do name html
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);


defineCategoriaCompetidor($nome, $idade);
header('location: index.php');




?>

