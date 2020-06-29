<?php
// include_once('ComparableCircle.php');
include_once('CircleComparator.php');

// $circleOne = new ComparableCircle('circleOne', 8);
// $circleTwo = new ComparableCircle('circleTwo', 2);

// var_dump($circleOne->compareTo($circleTwo));

$circleOne = new Circle('circleOne' , 6);
$circleTwo = new Circle('circleTwo' , 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));