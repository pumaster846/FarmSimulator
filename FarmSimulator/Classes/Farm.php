<?php
declare(strict_types=1);
namespace Classes;
use Traits\Message;

include_once('Traits/Message.php');

class Farm {
    use Message;
    protected array $barn;
    protected array $productStorage;

    public function registrationAnimals(Animal $animals, int $count) : void {
        for ($i=0;$i<$count;$i++) {
            $this->barn["{$animals->getAnimalType()}"][] = uniqid();
            $this->collectProducts($animals);
        }
    }
    public function getCountAnimalsInBarn() : void {
        foreach ($this->barn  as $animalType=>$animals) {
            echo "<li>$animalType: ". count($animals) . "</li>";
        }
    }
    public function getQuantityProductsInStorage() : int {
        static $result;
        foreach ($this->productStorage  as $products) {
            foreach ($products as $value) {
                $result += $value;
            }
        }
        return $result;
    }
    private function collectProducts(Animal $animals) : void {
        for($j=0;$j<7;$j++) {
            $this->productStorage["{$animals->getAnimalProduct()}"][] = $animals->setQuantityProduct();
        }
    }
}