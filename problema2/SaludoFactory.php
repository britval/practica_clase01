<?php
declare(strict_types=1);

require_once __DIR__ . '/SaludoEspanol.php';
require_once __DIR__ . '/SaludoIngles.php';

final class SaludoFactory
{
    public static function crear(string $idioma): Saludo
    {
        return match (strtolower($idioma)) {
            'es', 'espanol', 'español' => new SaludoEspanol(),
            'en', 'ingles', 'inglés' => new SaludoIngles(),
            default => throw new InvalidArgumentException("Idioma no soportado: $idioma"),
        };
    }
}
