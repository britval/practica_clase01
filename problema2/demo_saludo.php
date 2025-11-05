<?php
declare(strict_types=1);
require_once __DIR__ . '/SaludoFactory.php';

echo "Seleccione idioma (es/en): ";
$idioma = trim(readline());

try {
    $saludo = SaludoFactory::crear($idioma);
    $nombre = $saludo->pedirNombre();
    echo "\n" . $saludo->saludar($nombre) . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
