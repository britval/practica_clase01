<?php
declare(strict_types=1);

require_once __DIR__ . '/Shape.php';

abstract class AbstractShape implements Shape
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    // Método útil para imprimir un resumen
    public function describe(): string
    {
        return sprintf(
            "%s | área: %.2f | perímetro: %.2f",
            $this->getName(),
            $this->getArea(),
            $this->getPerimeter()
        );
    }

    // Utilidad de validación para lados/medidas > 0
    protected static function assertPositive(string $label, float $value): void
    {
        if ($value <= 0) {
            throw new InvalidArgumentException("$label debe ser > 0");
        }
    }
}
