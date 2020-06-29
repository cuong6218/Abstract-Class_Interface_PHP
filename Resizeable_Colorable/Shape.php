<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:14
 */

include('Resize.php');

class Shape implements Resizeable
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
    public function resize($value){
        return $value + $value * rand(0,100)/100;
    }
    
}