<?php
declare(strict_types=1);
use Classes\Farm as Farm;
use Classes\Cow as Cow;
use Classes\Chicken as Chicken;

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    include_once($class . '.php');
});

$farm = new Farm();

$farm->registrationAnimals(new Cow, 10);
$farm->registrationAnimals(new Chicken, 20);

$farm->printInfoMessage('В ферме находится:');
$farm->getCountAnimalsInBarn();

$farm->printInfoMessage("За неделю было собрано <b>{$farm->getQuantityProductsInStorage()}</b> единиц продукции");

$farm->printInfoMessage("<i>Съездили на рынок, купили животных.</i>");

$farm->registrationAnimals(new Cow, 1);
$farm->registrationAnimals(new Chicken, 5);

$farm->printInfoMessage('В ферме находится:');
$farm->getCountAnimalsInBarn();

$farm->printInfoMessage("За неделю было собрано <b>{$farm->getQuantityProductsInStorage()}</b> единиц продукции");