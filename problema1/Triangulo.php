<?php
declare(strict_types=1);

require_once __DIR__ . '/AbstractShape.php';

final class Triangulo extends AbstractShape
{
    public function __construct(
        private float $a,
        private float $b,
        private float $c
    ) {
        parent::__construct('Triángulo');
        self::assertPositive('Lado a', $a);
        self::assertPositive('Lado b', $b);
        self::assertPositive('Lado c', $c);

        // Desigualdad triangular
        if (($a + $b <= $c) || ($a + $c <= $b) || ($b + $c <= $a)) {
            throw new InvalidArgumentException(
                'Los lados no forman un triángulo válido.'
            );
        }
    }

    public function getArea(): float
    {
        $s = ($this->a + $this->b + $this->c) / 2; // semiperímetro
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function getPerimeter(): float
    {
        return $this->a + $this->b + $this->c;
    }
}
