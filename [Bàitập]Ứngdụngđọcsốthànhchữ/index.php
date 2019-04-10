<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <style>
        input[type=text] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <br />
    <h3>Ứng dụng đọc số thành chữ</h3>
    <form method="post">
        <input type="text" name="convert" placeholder="Nhập số cần đọc" />
        <input type="submit" id="submit" value="Tìm" />
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST["convert"]);
        // $number = $_POST["convert"];
        // switch ($number) {
        //     case 0:
        //         echo 'Số không';
        //         break;
        //     case 1:
        //         echo 'Số một';
        //         break;
        //     case 2:
        //         echo 'Số hai';
        //         break;
        //     case 3:
        //         echo 'Số ba';
        //         break;
        //     case 4:
        //         echo 'Số bốn';
        //         break;
        //     default:
        //         echo 'Không tìm thấy';
        //         break;
        // }
    }
    ?>
</body>

</html>