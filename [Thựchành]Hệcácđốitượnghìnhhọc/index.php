<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Hệ các đối tượng hình học</title>
</head>

<body>
    <?php
    include_once('circle.php');
    include_once('cylinder.php');
    include_once('rectangle.php');
    include_once('square.php');

    $circle = new Circle('Circle 01', 3);
    echo 'Circle area: ' . $circle->calculateArea() . '<br />';
    echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

    $cylinder = new Cylinder('Cylinder 01', 3, 4);
    echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
    echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

    $rectangle = new Rectangle('Rectangle 01', 3, 4);
    echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

    $square = new Square('Square 01', 4, 4, 4);
    echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
    ?>
</body>

</html>