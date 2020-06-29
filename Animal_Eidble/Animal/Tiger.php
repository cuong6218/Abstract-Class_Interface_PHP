<?php
include_once('AbstractFile/Animal.php');
class Tiger extends Animal{
        public function makeSound()
        {
            echo 'Tiger say roar';
        }
    }