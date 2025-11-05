<?php
declare(strict_types=1);
require_once __DIR__ . '/Saludo.php';

final class SaludoEspanol implements Saludo
{
    public function pedirNombre(): string
    {
        echo "Ingrese su nombre: ";
        return trim(readline());
    }

    public function saludar(string $nombre): string
    {
        return "¡Hola, $nombre! ¿Cómo estás?";
    }
}
