<?php
/**
 * Función que captura datos por consola y realiza acciones
 * @param string $mensaje Mensaje a mostrar al usuario
 * @return mixed Resultado de la acción realizada
 */
function interactuarConsola($mensaje) {
    echo $mensaje;
    $entrada = trim(fgets(STDIN)); // Captura la entrada
    
    // Realiza diferentes acciones según la entrada
    switch(true) {
        case $entrada === 'saludar':
            return "¡Hola! ¿Cómo estás?";
            
        case $entrada === 'sumar':
            echo "Ingrese primer número: ";
            $num1 = (float)trim(fgets(STDIN));
            echo "Ingrese segundo número: ";
            $num2 = (float)trim(fgets(STDIN));
            return "Resultado: " . ($num1 + $num2);
            
        case $entrada === 'fecha':
            return "La fecha actual es: " . date('d-m-Y');
            
        case strpos($entrada, 'buscar ') === 0:
            $termino = str_replace('buscar ', '', $entrada);
            return "Buscando información sobre: $termino";
            
        case empty($entrada):
            return "No ingresaste nada";
            
        default:
            return "No entendí tu comando. Prueba con: saludar, sumar, fecha o buscar algo";
    }
}

// Ejemplo de uso
echo "Comandos disponibles:\n";
echo "- saludar\n- sumar\n- fecha\n- buscar [algo]\n\n";

$resultado = interactuarConsola("Ingrese un comando: ");
echo "\n$resultado\n";

// Versión interactiva continua:
/*
do {
    $resultado = interactuarConsola("\nIngrese un comando (o 'salir' para terminar): ");
    echo "\n$resultado\n";
} while ($resultado !== "No entendí tu comando. Prueba con: saludar, sumar, fecha o buscar algo");
*/
?>