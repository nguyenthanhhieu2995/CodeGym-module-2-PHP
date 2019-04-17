<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Hiển thị thông báo nếu người dùng nhập vào chỉ số không hợp lệ</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input name="generate" type="submit" value="Generate Array">
    </form>
    <?php
    if (isset($_POST["generate"])) {
        $_SESSION["result"] = "<br><div style='width:980px;'>";
        for ($i = 0; $i < 100; $i++) {
            $_SESSION["size"][$i] = mt_rand(0, 99);
            $_SESSION["result"] .= " " . $_SESSION['size'][$i];
        }
        $_SESSION["result"] .= "</div>";
        echo $_SESSION["result"];
        echo "</br><span>Index of array</span><form method='POST'>
        <input name='index' type='number' min='0' max='99' style='width:50px'>
        </br><input type='submit' value='Find value'>";
    }
    if (isset($_POST["index"])) {
        $indexOfArray = $_POST["index"];
        echo $_SESSION["result"];
        echo "<br> Giá trị của mảng ở vị trí $indexOfArray là: <b>" . $_SESSION["size"][$indexOfArray] . "</b>";
    }

    ?>
</body>

</html>