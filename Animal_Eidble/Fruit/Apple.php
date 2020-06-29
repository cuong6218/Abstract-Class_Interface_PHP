<?php
    include_once('AbstractFile/Fruit.php');
    class Apple extends Fruit{
        public function howToEat()
        {
            return 'Apple could be slided';
        }
    }