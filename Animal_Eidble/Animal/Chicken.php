<?php
include_once('AbstractFile/Animal.php');
include_once('InterfaceFile/Edible.php');
class Chicken extends Animal implements Edible{
    public function makeSound()
    {
        echo 'Chicken say oh oh oh';
    }
    public function howToEat()
    {
        echo 'could be fried';
    }
}