<?php
    $Servername="localhost";
    $Dataname="dientu";
    $Username="root";
    $Password="";
    $conn=new mysqli ($Servername, $Username, $Password, $Dataname);
    if($conn->connect_error)
    {
        die("Connection failed:".$conn->connect_error);
    }
    else
    {
        echo "Đăng nhập thàng Công !";
    }
    $sql="SELECT UserName, PassWord, PhanQuyen from TaiKhoan"; 
    $TK=$conn->query($sql); 
    if ($TK->num_rows > 0)
    {
        while($row=$TK->fetch_assoc())
        {
            if($_GET['US']==$row["UserName"]&&$_GET['PA']==$row["PassWord"])
            {
                echo " Đăng nhập thành công !!!".$_GET['US'];
                header("Location:BANHANG.php");
                exit;
                return ;
            }
        }
    } 
    echo " Đăng nhập không thành công ???";
?>