<?php
// Mostrar título del formulario
echo "FORMULARIO SIMPLE\n";
echo "----------------\n\n";

// Pedir y leer nombre
echo "Ingrese su nombre: ";
$nombre = trim(fgets(STDIN));

// Pedir y leer edad
echo "Ingrese su edad: ";
$edad = trim(fgets(STDIN));

// Validar que no estén vacíos
if (empty($nombre) || empty($edad)) {
    echo "\nERROR: Nombre y edad son obligatorios\n";
    exit;
}

// Validar que edad sea número
if (!is_numeric($edad)) {
    echo "\nERROR: La edad debe ser un número\n";
    exit;
}

// Mostrar resultados
echo "\nDATOS INGRESADOS:\n";
echo "Nombre: $nombre\n";
echo "Edad: $edad\n";
echo "----------------\n";

// Opcional: Guardar en archivo (descomentar para usar)
// file_put_contents('datos.txt', "Nombre: $nombre, Edad: $edad\n", FILE_APPEND);
?>