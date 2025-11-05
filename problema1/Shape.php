<?php
declare(strict_types=1);

interface Shape {
    public function getArea(): float;
    public function getPerimeter(): float;
    public function getName(): string;
}
