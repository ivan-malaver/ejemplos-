<?php
// Función para leer entrada desde la consola
function leerEntrada($mensaje) {
    echo $mensaje;
    return trim(fgets(STDIN));
}

// Mostrar encabezado del formulario
echo "=== FORMULARIO DE REGISTRO (CONSOLA) ===\n\n";

// Solicitar datos al usuario
$nombre = leerEntrada("Ingrese su nombre: ");
$apellido = leerEntrada("Ingrese su apellido: ");
$edad = leerEntrada("Ingrese su edad: ");
$email = leerEntrada("Ingrese su email: ");

// Validación básica
if (empty($nombre) || empty($apellido) || empty($edad) || empty($email)) {
    echo "\nError: Todos los campos son obligatorios.\n";
    exit;
}

if (!is_numeric($edad)) {
    echo "\nError: La edad debe ser un número.\n";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "\nError: El email no tiene un formato válido.\n";
    exit;
}

// Mostrar los datos ingresados
echo "\n=== DATOS REGISTRADOS ===\n";
echo "Nombre: $nombre\n";
echo "Apellido: $apellido\n";
echo "Edad: $edad\n";
echo "Email: $email\n";
echo "=========================\n";

// Aquí podrías guardar los datos en una base de datos o archivo
// file_put_contents('registros.txt', "$nombre,$apellido,$edad,$email\n", FILE_APPEND);
?>