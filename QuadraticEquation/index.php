<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuadraticEquation</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="number" name="a" style="width:50px;" value="<?php if (isset($_POST['a'])){echo $_POST['a'];}?>"><b> x^2 + </b>
        <input type="number" name="b" style="width:50px;" value="<?php if (isset($_POST['b'])){echo $_POST['b'];}?>"><b> x + </b>
        <input type="number" name="c" style="width:50px;" value="<?php if (isset($_POST['c'])){echo $_POST['c'];}?>"><b> = 0 </b><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    include("quadraticEquation.php");
        if (!empty($_POST["a"]) && !empty($_POST["b"]) && !empty($_POST["c"])) {
            $solve = new QuadraticEquation($_POST["a"], $_POST["b"], $_POST["c"]);
            $solve->getRoot();
        }
    ?>
</body>

</html>