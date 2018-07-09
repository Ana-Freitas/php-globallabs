<?php


  


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = []; //array numerico
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    //print_r($categorias);

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if($idade >= 6 && $idade <= 12)
        {
        for($i=0; $i<count($categorias);$i++)
        {
            if($categorias[$i]=='infantil')
                
            {
                setarMensagemDeSucesso("O nadador " .$nome. " compete na categoria " .$categorias[$i]);
                return null;
            }
        }
        }
    
        else if($idade >= 13 && $idade <= 18)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                    setarMensagemDeSucesso("O nadador " .$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else if ($idade >18 && $idade <=60)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
            if($categorias[$i] == 'adulto')
                {
                    setarMensagemDeSucesso("O nadador " .$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
    }

    else 
    {
        removerMensagemSucesso();
        return obterMensagemDeErro();
    }
    
 
}
?>