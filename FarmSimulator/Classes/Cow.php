<?php
declare(strict_types=1);
namespace Classes;

class Cow extends Animal {
    protected string $animalType = 'Cow';
    protected string $animalProduct = 'Milk';

    public function setQuantityProduct(): int {
        return rand(8,12);
    }
}