<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');



$circle = new Circle('Circle 01', 3);

$cylinder = new Cylinder('Cylinder 01', 3, 4);

$rectangle = new Rectangle('Rectangle 01', 3, 4);

$square = new Square('Square 01', 4, 4, 4);

$arrayOfShape = array($circle, $cylinder, $rectangle, $square);
echo '<b>Before resize :</b><br/>';
foreach ($arrayOfShape as $key => $value) {
    echo $value->name . ' area:' . $value->calculateArea() . '<br/>';
}
echo '<b>After resize :</b><br/>';
$percent = mt_rand(1,100);
echo 'Resize size of Shape :' .($percent) . '%<br/>';
foreach ($arrayOfShape as $key => $value) {
    $value->resize($percent/100);
    echo $value->name . ' area:' . $value->calculateArea() . '<br/>';
}
