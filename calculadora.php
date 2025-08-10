<?php
// Mostrar título de la calculadora
echo "CALCULADORA BÁSICA\n";
echo "------------------\n\n";

// Pedir primer número
echo "Ingresa el primer número: ";
$num1 = trim(fgets(STDIN));

// Pedir segundo número
echo "Ingresa el segundo número: ";
$num2 = trim(fgets(STDIN));

// Pedir operación
echo "Operación (+, -, *, /): ";
$operacion = trim(fgets(STDIN));

// Realizar cálculo
$resultado = 0;
switch ($operacion) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            echo "\nError: No se puede dividir por cero\n";
            exit;
        }
        break;
    default:
        echo "\nError: Operación no válida\n";
        exit;
}

// Mostrar resultado
echo "\nResultado: $num1 $operacion $num2 = $resultado\n";
?>