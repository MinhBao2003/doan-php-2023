<?php
    session_start(); 
    $MS=array(0);
    $MS=$_SESSION['$MaSach_KHMUA'];
    $SL=array(0);
    $SL=$_SESSION['$SoLuong_KHMUA'];
    $MS_SLIT=array("");
    $TS_SLIT=array("");
    $tang=1;
    $TenMay = "localhost";
    $TaiKhoan = "root";
    $MatKhau = "";
    $DataBase = "dientu";
    $KetNoi = new mysqli($TenMay, $TaiKhoan, $MatKhau, $DataBase);
   // mysqli_query($KetNoi,"insert into HoaDon Values(',''""')");
    if($KetNoi -> connect_errno)
    {
        die(" Không kết nối được!!! ".$KetNoi -> connect_errno); 
    }
    else
    {
        //echo "Đăng nhập CSDL thành công ";
    }
    for($i=1;$i<sizeof($MS);$i++){
        $sql_update="UPDATE thietbi SET SLTON = SLTON -".$SL[$i]." WHERE MASP='".$MS[$i]."'";
        $rs=mysqli_query($KetNoi,$sql_update);    
    }
    $SQL_DMSach_SL = "SELECT * FROM thietbi";
    $Dl_DMSach = $KetNoi -> query($SQL_DMSach_SL);
    if($Dl_DMSach -> num_rows > 0)
    {
        echo "<table border=1 align=center style='text-align:center'>"; 
        echo "<tr><td> Mã Sách  </td><td> Tên SP </td><td> Mã NSX </td><td> Số Lượng Tồn </td><td> Giá Bán </td> <td> Hình </td> <td> Ghi Chú </td> <tr><br>";
        while($row = $Dl_DMSach -> fetch_assoc())
        {  
            if($row["SLTON"]>10)
            {
                echo "<tr>
                <td>".$row["MASP"]."</td> 
                <td>".$row["TENSP"]."</td> 
                <td>".$row["MANSX"]."</td>
                <td>".$row["SLTON"]."</td> 
                <td>".$row["GIABAN"]."</td> 
                <td><img src=".$row["HINH"]." width='250px' height='220px' align=center> </td>
                </tr>";  
            }
            else
            {
                echo "<tr>
                <td><font color='red'>".$row["MASP"]."</font></td> 
                <td><font color='red'>".$row["TENSP"]."</font></td> 
                <td><font color='red'>".$row["MANSX"]."</font></td>
                <td><font color='red'>".$row["SLTON"]."</font></td> 
                <td><font color='red'>".$row["GIABAN"]."</font></td> 
                <td><img src=".$row["HINH"]." width='250px' height='220px' align=center> </td>
                <td><font color='red'><form action='ThemSach.php' method='get'> <input  type=text name=T".$tang." id=><br> <input style='background-color:yellow' type='Submit' value='Thêm Sách'>
                </form></font></td>
                </tr>";  
                $MS_SLIT[$tang]=$row["MASP"];
                $TS_SLIT[$tang]=$row["TENSP"];
                $tang++;
            }
            
        }
    }
    /*session_start(); */
    $_SESSION['MSIT']=$MS_SLIT;
    $_SESSION['TSIT']=$TS_SLIT;
    
?> 
