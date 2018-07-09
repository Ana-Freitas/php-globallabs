<?php
session_start();

$categorias = []; //array numerico
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome']; //array associativo que recupera o valor do name html
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente!'; //array associativo que associa  um valor a umachave
   header('location: index.php'); //para voltar a pagina de index.php
   return;
}

else if(strlen($nome) < 3)
{
   $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 carateres!'; 
   header('location: index.php'); 
   return;
}

else if(strlen($nome) > 40 )
{
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso!'; 
   header('location: index.php'); 
   return;
}

else if(!is_numeric($idade))
{
   $_SESSION['mensagem-de-erro'] = 'Informe um numero para idade!'; 
   header('location: index.php'); 
   return;
}
//var_dump($nome);
//var_dump($idade);


if($idade >= 6 && $idade <= 12)
{
   for($i=0; $i<count($categorias);$i++)
   {
       if($categorias[$i]=='infantil')
         
       {
           $_SESSION['mensagem-de-sucesso'] =  "O nadador " .$nome. " compete na categoria " .$categorias[$i];
           header('location: index.php');
           return;
       }
   }
}

else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
         {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria adolescente";
            header('location: index.php');
            return;
        }
    }
}
else if ($idade >18 && $idade <=60)
{
    for($i = 0; $i < count($categorias); $i++)
   {
       if($categorias[$i] == 'adulto')
         {
             $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria adulto";
             header('location: index.php');
             return;
            }
   }
}

?>

