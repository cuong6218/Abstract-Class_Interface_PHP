<?php
  include_once('AbstractFile/Fruit.php');
  class Orange extends Fruit{
      public function howToEat()
      {
          return 'Orange could be juiced';
      }
  }