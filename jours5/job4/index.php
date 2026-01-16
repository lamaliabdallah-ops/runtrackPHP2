<?php
function calcule($a, $operation, $b)
{

    $result = 0;
    switch ($operation) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $b != 0 ? $a / $b : "Division par zéro";
            break;
        case '%':
            $result = $b != 0 ? $a % $b : "Modulo par zéro";
            break;
        default:
            return "Opération invalide";
    }
    return $result;
}

echo calcule(10, '+', 5);
?>