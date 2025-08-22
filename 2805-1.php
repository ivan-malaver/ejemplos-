<?php
// ============================================
// 1) BUCLE FOR
// ============================================
// Se usa cuando sabes cuántas veces quieres repetir algo.
// Sintaxis: for (inicialización; condición; incremento)

for ($i = 0; $i < 5; $i++) {
    echo "FOR → Iteración número: $i" . PHP_EOL;
}

echo PHP_EOL; // línea en blanco para separar bloques


// ============================================
// 2) BUCLE WHILE
// ============================================
// Se ejecuta MIENTRAS la condición sea verdadera.
// Si la condición es falsa desde el inicio, no entra nunca.

$contador = 0;

while ($contador < 5) {
    echo "WHILE → Iteración número: $contador" . PHP_EOL;
    $contador++; // si no lo incrementamos, sería un bucle infinito
}

echo PHP_EOL;


// ============================================
// 3) BUCLE DO...WHILE
// ============================================
// La condición se evalúa DESPUÉS de ejecutar el bloque.
// Garantiza que se ejecute al menos una vez.

$contador = 0;

do {
    echo "DO...WHILE → Iteración número: $contador" . PHP_EOL;
    $contador++;
} while ($contador < 5);

echo PHP_EOL;


// ============================================
// 4) BUCLE FOREACH
// ============================================
// Sirve para recorrer arrays o colecciones fácilmente.

$frutas = ["Manzana", "Banana", "Naranja"];

foreach ($frutas as $indice => $fruta) {
    echo "FOREACH → En índice $indice está la fruta: $fruta" . PHP_EOL;
}

echo PHP_EOL;


// ============================================
// 5) BUCLE ANIDADO
// ============================================
// Un bucle dentro de otro. Ejemplo: tabla de multiplicar.

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "ANIDADO → $i x $j = " . ($i * $j) . PHP_EOL;
    }
    echo "--- Fin de fila ---" . PHP_EOL;
}

echo PHP_EOL;


// ============================================
// 6) BREAK y CONTINUE
// ============================================
// - break: rompe el ciclo completamente
// - continue: salta a la siguiente iteración

for ($i = 0; $i < 10; $i++) {
    if ($i == 3) {
        continue; // salta cuando $i = 3
    }
    if ($i == 7) {
        break; // rompe el ciclo cuando $i = 7
    }
    echo "CONTROL → Número: $i" . PHP_EOL;
}


// Ejercicio: contar pares e impares del 1 al 20

$pares = 0;    // contador de números pares
$impares = 0;  // contador de números impares

// Recorremos los números del 1 al 20
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "Número $i → PAR" . PHP_EOL;
        $pares++; // sumamos al contador de pares
    } else {
        echo "Número $i → IMPAR" . PHP_EOL;
        $impares++; // sumamos al contador de impares
    }
}

// Mostrar resumen final
echo PHP_EOL; // salto de línea
echo "Total de pares: $pares" . PHP_EOL;
echo "Total de impares: $impares" . PHP_EOL;
?>

?>
