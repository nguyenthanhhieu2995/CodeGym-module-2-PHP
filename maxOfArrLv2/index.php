<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
        $rowOfArray = $colOfArray = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rowOfArray = $_POST["row"];
            $colOfArray = $_POST["col"];
        }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="number" placeholder="row of array" value="<?php echo $rowOfArray ?>" name="row" style='width:100px;'>
        <input type="number" placeholder="col of array" value="<?php echo $colOfArray?>" name="col" style='width:100px;'>
        <input type="submit" value="Size of array">
    </form>
    <?php
    function maxOfArray($matrix)
    {
        $max = $matrix[0][0];
        $rowOfMax = $colOfMax = 0;
        foreach ($matrix as $row => $array) {
            foreach ($array as $col => $value)
                if ($max < $value) {
                    $max = $value;
                    $rowOfMax = $row + 1;
                    $colOfMax = $col + 1;
                };
        }
        $result = array($max, $rowOfMax, $colOfMax);
        return $result;
    };
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $matrix = array('row' => array(), 'col' => array());
        echo "<table><tbody>";
        for ($row = 0; $row < $rowOfArray; $row++) {
            echo "<tr>";
            for ($col = 0; $col < $colOfArray; $col++) { 
                $matrix[$row][$col] = mt_rand(0,100);
                echo "<td style='width:50px;'>".$matrix[$row][$col]."</td>";  
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        $result = maxOfArray($matrix);
        echo "<br/>Giá trị lớn nhất: $result[0] tại hàng $result[1] cột $result[2]";
    }
    ?>

</body>

</html>