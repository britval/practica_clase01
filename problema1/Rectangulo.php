<?php
declare(strict_types=1);

require_once __DIR__ . '/AbstractShape.php';

final class Rectangulo extends AbstractShape
{
    public function __construct(private float $ancho, private float $alto)
    {
        parent::__construct('Rectángulo');
        self::assertPositive('Ancho', $ancho);
        self::assertPositive('Alto', $alto);
    }

    public function getArea(): float
    {
        return $this->ancho * $this->alto;
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->ancho + $this->alto);
    }
}
