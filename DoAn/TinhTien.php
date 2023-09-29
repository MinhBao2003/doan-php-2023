<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $GiaBan = array(0);
    $GiaBan = $_SESSION['GIABAN'];

    $TenSach = array(0);
    $TenSach = $_SESSION['TENSP'];   
    
    $MaSach = array(0);
    $MaSach = $_SESSION['MASP'];  

    $SoLuong_KHMUA=array(0);
    $MaSach_KHMUA=array(0);

    $TongThanhToan = 0; 
    $tang = 0;
    $th="C"; 
    $Ten="";
    echo "<table border=0 align = center>";
    echo "<tr>";
    echo "<tr><td> STT </td><td> Tên SP </td><td> Giá Bán </td><td> Số Lượng </td><td> Thành Tiền </td><tr><br>";
        for($i=0 ; $i<=sizeof($GiaBan) ; $i++)
        {
            $th = "C".$i;
            $Ten = "T".$i;
            if(isset($_GET[$th])=="1")
            {
                $tang++;
                $MaSach_KHMUA[$tang]=$MaSach[$i-1];
                $SoLuong_KHMUA[$tang]=$_GET[$Ten];
                echo "<tr><td>".$tang."&nbsp &nbsp</td> <td>".$TenSach[$i-1]."&nbsp &nbsp &nbsp &nbsp</td> <td>".$GiaBan[$i-1]."&nbsp &nbsp &nbsp &nbsp</td> <td>".$_GET[$Ten]."&nbsp &nbsp &nbsp &nbsp</td> <td>".$GiaBan[$i-1]*$_GET[$Ten]."&nbsp &nbsp &nbsp &nbsp</td> <tr><br>";
                $TongThanhToan += $GiaBan[$i - 1] * $_GET[$Ten];
            }
        }
    echo "<tr><td></td> <td> Tổng tiền cần trả = ".$TongThanhToan." ₫</td></td></tr>"; 
    echo "</tr>";
    echo "</table>";
    echo "<form action='ĐanhMucSach.php' method='get'> <input type='Submit' value='Thanh Toán'>";

        $_SESSION['$MaSach_KHMUA']=$MaSach_KHMUA; 
        $_SESSION['$SoLuong_KHMUA']=$SoLuong_KHMUA;

    echo "</form>";
?>
</body>
</html>
