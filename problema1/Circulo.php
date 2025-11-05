<?php
declare(strict_types=1);

require_once __DIR__ . '/AbstractShape.php';

final class Circulo extends AbstractShape
{
    public function __construct(private float $radio)
    {
        parent::__construct('Círculo');
        self::assertPositive('Radio', $radio);
    }

    public function getArea(): float
    {
        return M_PI * $this->radio ** 2;
    }

    public function getPerimeter(): float
    {
        return 2 * M_PI * $this->radio;
    }
}
