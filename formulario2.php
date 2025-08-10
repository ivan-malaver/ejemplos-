<?php
// 1. Mostrar mensaje de bienvenida
echo "FORMULARIO SUPER SIMPLE\n";

// 2. Pedir nombre
echo "Dime tu nombre: ";
$nombre = trim(fgets(STDIN)); // 'fgets(STDIN)' lee lo que escribes

// 3. Pedir edad
echo "Dime tu edad: ";
$edad = trim(fgets(STDIN));   // 'trim()' quita espacios al inicio/final

// 4. Mostrar lo que escribiste
echo "\nRESULTADO:\n";
echo "Te llamas $nombre y tienes $edad años.\n";
?>