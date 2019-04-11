<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <title>Future Value Calculator</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $investment = $_POST["investment"];
        $rate = $_POST["rate"] / 100;
        $years = $_POST["years"];
        $result = $investment;
        for ($i = 0; $i < $years; $i++) {
            $result += $investment * $rate;
        }
        echo "<div id='content'>
                <h1>Future Value Calculator</h1>
                <form>
                    <div id='data'>
                        <p>Investment Amount:$" . $investment . " </p>
                        <p>Yearly Interest Rate: " . $rate . "%</p>
                        <p>Number of Years:" . $years . "</p>                     
                        <p>Result: $" . $result . "</p>
                    </div>
                </form>            
            </div>";
    }
    ?>