<?php
declare(strict_types=1);
require_once __DIR__ . '/Saludo.php';

final class SaludoIngles implements Saludo
{
    public function pedirNombre(): string
    {
        echo "Enter your name: ";
        return trim(readline());
    }

    public function saludar(string $nombre): string
    {
        return "Hello, $nombre! How are you?";
    }
}
