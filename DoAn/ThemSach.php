<?php
    session_start();
    $Ten_SL="T";
    $MS_SLI=$_SESSION['MSIT'];
    $Servername = "localhost";
     $Username = "root";
     $Password = "";
     $Dataname = "dientu";
     $conn = new mysqli($Servername, $Username, $Password, $Dataname);
     /*if($conn->connect_errno)
     {
         die(" Không kết nối được!!! ".$conn->connect_errno); 
     }
     else
     {
         //echo "Đăng nhập CSDL thành công ";
     }*/
    for($i=1;$i<sizeof($MS_SLI);$i++)
    {
        $Ten_SL="T".$i;
        $sql1="update thietbi set SLTON=SLTON+".$_GET[$Ten_SL]." where MASP='".$MS_SLI[$i]."'";
        mysqli_query($conn,$sql1);
        echo "Số Lượng thêm là".$_GET[$Ten_SL];
        
    }
    $SQL_DMSach_SL = "SELECT * FROM thietbi";
        $Dl_DMSach = $conn -> query($SQL_DMSach_SL);
        if($Dl_DMSach -> num_rows > 0)
        {
            echo "<table border=1 align=center style='text-align:center'>"; 
            echo "<tr><td> Mã SP  </td><td> Tên Sách </td><td> Mã NSX </td><td> Số Lượng Tồn </td><td> Giá Bán </td> <td> Hình </td> <td> Ghi Chú </td> <tr><br>";
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
                
                
            }
        }

?>