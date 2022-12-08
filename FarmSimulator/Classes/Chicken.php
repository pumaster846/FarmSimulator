<?php
declare(strict_types=1);
namespace Classes;

class Chicken extends Animal {
    protected string $animalType = 'Chicken';
    protected string $animalProduct = 'Egg';

    public function setQuantityProduct(): int {
        return rand(0,1);
    }
}