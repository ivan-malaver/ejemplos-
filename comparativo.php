<?php
/**
 * Script mejorado para capturar entrada por consola en PHP
 * Demuestra diferentes métodos con validación y manejo de errores
 */

// Función para mostrar título centrado
function mostrarTitulo($texto) {
    $longitud = strlen($texto);
    $linea = str_repeat("=", $longitud + 4);
    echo "\n$linea\n  $texto\n$linea\n\n";
}

// Mostrar encabezado
mostrarTitulo("DEMOSTRACIÓN DE ENTRADA POR CONSOLA");

// 1. Usando fgets() - Método universal
echo "MÉTODO 1: fgets(STDIN)\n";
echo "Ingrese su nombre: ";
$nombre = trim(fgets(STDIN));
if (empty($nombre)) {
    $nombre = "(No ingresado)";
}

// 2. Usando readline() - Mejor experiencia (si está disponible)
echo "\nMÉTODO 2: readline()";
if (function_exists('readline')) {
    $apellido = readline("Ingrese su apellido: ");
    if (empty($apellido)) {
        $apellido = "(No ingresado)";
    }
} else {
    $apellido = "(readline no disponible)";
    echo "\nAdvertencia: La función readline() no está disponible\n";
}

// 3. Usando stream_get_line() - Para control de longitud
echo "\nMÉTODO 3: stream_get_line()\n";
echo "Ingrese su ciudad (máx. 100 caracteres): ";
$ciudad = stream_get_line(STDIN, 100);
$ciudad = trim($ciudad) ?: "(No ingresada)";

// 4. Usando fscanf() - Para entrada formateada
echo "\nMÉTODO 4: fscanf()\n";
echo "Ingrese su edad (solo números): ";
$edad_valida = false;
$edad = null;

if (fscanf(STDIN, "%d\n", $edad) != 1) {
    echo "Advertencia: Edad no válida, se usará 0\n";
    $edad = 0;
}

// Mostrar resultados
mostrarTitulo("DATOS INGRESADOS");
echo sprintf("%-15s: %s\n", "Nombre", $nombre);
echo sprintf("%-15s: %s\n", "Apellido", $apellido);
echo sprintf("%-15s: %s\n", "Ciudad", $ciudad);
echo sprintf("%-15s: %d años\n", "Edad", $edad);

// Mostrar disponibilidad de funciones
mostrarTitulo("FUNCIONES DISPONIBLES");
$funciones = [
    'fgets' => 'Lectura básica universal',
    'readline' => 'Mejor experiencia interactiva',
    'stream_get_line' => 'Control de longitud',
    'fscanf' => 'Entrada formateada'
];

foreach ($funciones as $func => $descripcion) {
    $disponible = function_exists($func) ? '✓ Disponible' : '✖ No disponible';
    echo sprintf("%-16s: %-20s %s\n", $func, $disponible, $descripcion);
}

echo "\n";
?>