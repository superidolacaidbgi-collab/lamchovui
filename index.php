<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label> Diem toan </label> <br>
        <input type="text" name="toan"> <br>
        <label> Diem van </label> <br>
        <input type="text" name="van"> <br>
        <label> Diem hoa </label> <br>
        <input type="text" name="hoa"> <br>
        <input type="submit" value="ket qua">
    </form>

    <?php
        $toan = $_POST["toan"];
        $van = $_POST["van"];
        $hoa = $_POST["hoa"];
        $diemtb = null;

        $tong = $toan + $van + $hoa ;
        $diemtb = $tong / 3;
        $diemtb = round($diemtb,1);

        echo " diem cua ban la: {$diemtb} <br>";

        if ($diemtb <= 5 ){
            echo" ban da qua mon ";
        }
        else{
            echo" ban da rot mon ";
        }
        
    ?>
</body>
</html>