<?php
function calculadoraSimple() {
    echo "Calculadora básica\n";
    echo "Ingrese operación (+, -, *, /): ";
    $operacion = trim(fgets(STDIN));
    
    echo "Ingrese primer número: ";
    $num1 = (float)fgets(STDIN);
    
    echo "Ingrese segundo número: ";
    $num2 = (float)fgets(STDIN);
    
    switch($operacion) {
        case '+': return $num1 + $num2;
        case '-': return $num1 - $num2;
        case '*': return $num1 * $num2;
        case '/': return $num2 != 0 ? $num1 / $num2 : "Error: división por cero";
        default: return "Operación no válida";
    }
}

echo "Resultado: " . calculadoraSimple();
?>