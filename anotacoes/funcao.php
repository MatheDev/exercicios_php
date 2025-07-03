<?php   

/*
Funções com parâmetros opcionais

Você pode definir parâmetros opcionais em uma função atribuindo valores padrão a eles.
Dessa forma, eles não precisam ser obrigatoriamente informados na chamada.
*/

// Função com parâmetros obrigatórios (todos precisam ser passados)
function somar($n1, $n2, $n3){
    return $n1 + $n2 + $n3;
}

// Exemplo:
// echo somar(3, 5, 8); // ok
// echo somar(2, 4); // ❌ Erro: faltando argumento

// Função com parâmetros opcionais
function somar_opcional($n1, $n2 = 0, $n3 = 0){
    return $n1 + $n2 + $n3;
}

echo somar_opcional(3) . "\n";        // 3
echo somar_opcional(3, 3) . "\n";     // 6
echo somar_opcional(3, 3, 3) . "\n";  // 9

// Função com mensagens descritivas sobre os parâmetros passados
function somar_opcional2($n1, $n2 = null, $n3 = null){
    if ($n2 !== null && $n3 === null) {
        echo "Foram passados os números $n1 e $n2. A soma total é: " . ($n1 + $n2) . "\n";
    } elseif ($n2 === null && $n3 !== null) {
        echo "Foram passados os números $n1 e $n3. A soma total é: " . ($n1 + $n3) . "\n";
    } elseif ($n2 !== null && $n3 !== null) {
        echo "Foram passados os números $n1, $n2 e $n3. A soma total é: " . ($n1 + $n2 + $n3) . "\n";
    } else {
        echo "Foi passado apenas o número $n1.\n";
    }
}

somar_opcional2(10, 90);


/**
 * Forçar que o parâmetro seja de um tipo específico
 * Se colocar um número int ele aceita, pois o int é um subtipo de float
 * Se colocar uma string o php converte mas pode dar um aviso pois é tipagem fraca
 * 
 * @param float $idade valor da idade
 */
function somar_tipo_param(float $idade){
    return "Você tem $idade anos \n";
}

echo somar_tipo_param(18);

/**
 * Funções com parâmetros em tipagem estrita
 * Aceitam somente o tipo declarado, não permitem conversão automática (tipagem fraca).
 * Para ativar a tipagem estrita, usa-se a declaração:
 *     declare(strict_types=1);
 * que deve estar no início do arquivo PHP.
 * 
 * Atenção: a tipagem estrita vale para todo o arquivo onde a declaração está presente,
 * e não apenas para uma função específica.
 */

function param_estrito($idade){
    return "Você tem $idade anos parâmetro estrito\n(declare(strict_types=1);)\n";
}

echo param_estrito("18");


/*
    Funções com parâmetros nomeados

    - Você poderá chamar passando os parâmetros nomeados fora da ordem
*/  

function param_nomeados($n1, $n2){
    return $n1+$n2;
}
// note que quando chamo a função eu passo o parâmetro fora de ordem, mas indicando o valor correspondente ao parâmetro
echo param_nomeados(n2: 15, n1: 45);


/**
 * Para forçar que o retorno de uma função seja de um tipo específico,
 * basta definir o tipo de retorno após os parênteses dos parâmetros,
 * usando dois pontos (:).
 *
 * Exemplo: Esta função espera dois números float e retorna uma string.
 */

function somar_return_especifico(float $n1, float $n2): string {
    return (string)($n1 + $n2); // conversão necessária
}

// EXERCICÍOS 


/*
    Exercicío 01
    Crie uma função que simule uma entrada em uma balada
    Onde se a pessoa for maior de 18 ela pode entrar na balada
    Se ela for menor e idade e tiver acompanhada com alguém maior de 18 pode entrar
    Caso ela não estiver acompanhada com um maior de idade ou for menor que 18 ela não pode entrar
    
*/

function entrada_balada($idade, $acompanhante = false){
    if($idade < 18 && $acompanhante){
        return "Acesso liberado, você é menor de idade mas está acompanhado de um maior de idade\n";
    }else if($idade < 18){
        return "Acesso Negado, você é menor de idade\n";
    }else if($idade >= 18){
        return "Acesso liberado, você é maior de idade\n";
    }
}

echo entrada_balada(15, true);



