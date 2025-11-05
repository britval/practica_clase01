<?php
declare(strict_types=1);

/**
 * =====================================================
 * INTERFAZ: Saludo
 * =====================================================
 */
interface Saludo
{
    /**
     * Devuelve el saludo.
     *
     * @param string $nombre
     * @return string Saludo
     */
    public function saludar(string $nombre): string;
}
