<?php

function validaNome(string $nome) : bool
{
        if(empty($nome))
        {
            setarMensagemDeErro('O nome não pode ser vazio, por favor preencha-o novamente!'); //array associativo que associa  um valor a umachave
            return false;
        }

        else if(strlen($nome) < 3)
        {
            setarMensagemDeErro('O nome não pode conter menos de 3 carateres!'); 
            return false;
        }

        else if(strlen($nome) > 40 )
        {
            setarMensagemDeErro('O nome é muito extenso!'); 
             return false;
        }

    return true;

}

function validaIdade(string $idade) : bool
 {
        if(!is_numeric($idade))
        {

            setarMensagemDeErro('Informe um numero para idade!'); 
            return false;
        }

        return true;
}
