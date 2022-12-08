<?php
declare(strict_types=1);
namespace Classes;

abstract class Animal{
    protected string $animalType;
    protected string $animalProduct;

    public function getAnimalType() : string {
        return $this->animalType;
    }
    public function getAnimalProduct() : string {
        return $this->animalProduct;
    }
    abstract public function setQuantityProduct() : int;
}