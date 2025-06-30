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
