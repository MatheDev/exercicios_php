<?php 

/*
    Crie uma função que simule uma entrada em uma balada
    Onde se a pessoa for maior de 18 ela pode entrar na balada
    Se ela for menor e idade e tiver acompanhada com alguém maior de 18 pode entrar
    Caso ela não estiver acompanhada com um maior de idade ou for menor que 18 ela não pode entrar
    
*/

function entrada_balada($idade, $acompanhante = false){
    if($idade < 18 && $acompanhante){
        return "Acesso liberado, você é menor de idade mas está acompanhado de um maior de idade" . "<br>";
    }else if($idade < 18){
        return "Acesso Negado, você é menor de idade" . "<br>";
    }else if($idade >= 18){
        return "Acesso liberado, você é maior de idade" . "<br>";
    }
}

echo entrada_balada(15, true);