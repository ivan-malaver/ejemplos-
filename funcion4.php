<?php
function potencia($base, $exponente = 2) {
    return $base ** $exponente;
}

echo potencia(3);    // Output: 9 (usa 2 como exponente)
echo potencia(3, 3); // Output: 27
?>