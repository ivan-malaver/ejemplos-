<?php
// Usando fgets(STDIN)
echo "Con fgets():\n";
echo "Ingrese su nombre: ";
$nombre1 = trim(fgets(STDIN));

// Usando readline()
echo "\nCon readline():\n";
$nombre2 = readline("Ingrese su nombre nuevamente: ");

// Mostrar resultados
echo "\nResultados:\n";
echo "fgets(): $nombre1\n";
echo "readline(): $nombre2\n";
?>