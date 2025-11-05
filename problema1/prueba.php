<?php
declare(strict_types=1);

require_once __DIR__ . '/Rectangulo.php';
require_once __DIR__ . '/Triangulo.php';
require_once __DIR__ . '/Circulo.php';

$figuras = [
    new Rectangulo(5, 3),
    new Triangulo(3, 4, 5),
    new Circulo(2.5),
];

foreach ($figuras as $f) {
    echo $f->describe(), PHP_EOL;
}
