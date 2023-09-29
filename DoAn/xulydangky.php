<?php
   /* $TK="";
    $MK="";
    $HT="";
    $Email="";*/

    function ThemTk()
               {
                $Servername="localhost";
                $Dataname="dientu";
                $Username="root";
                $Password="";
                $conn=new mysqli ($Servername, $Username, $Password, $Dataname);
                $sql_q = "SELECT * FROM taikhoan";
                $result = $conn->query($sql_q);
                if($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        if($_GET['username1']==$row["UserName"])
                        {
                            echo "<br>"."Tài Khoảng Đã Tồn Tại";
                            return;
                         }
                    }
                }
                $sql="insert into TaiKhoan values('".$_GET['username1']."','".$_GET['password1']."','1')";
                //ThemTk();
                echo "Đăng ký thành công "; 
                mysqli_query($conn,$sql);
                header("Location:dangnhap.php");
                exit;
               }

    $username1 = $_GET ["username1"];
    $length  =  strlen($username1); 
    if ($length < 7) 
    {  
        echo "username cần tối thiểu 7 ký tự.";  
        echo "<br>";         
    }
    else 
    {
        echo "username Bạn là ";
        echo $username1; 
        echo "<br>";
    }

    $password1 = $_GET ["password1"];
    $length  =  strlen($password1); 
    if ($length < 6) 
    {  
        echo "password1 tối thiểu 6 ký tự.";
        echo "<br>";           
    }
    else 
    {
        echo "password Bạn là";
        echo $password1; 
        echo "<br>";
    }

    $password2 = $_GET ["password2"];
    $length  =  strlen($password2); 
    if ($length < 6) 
    {  
        echo "password cần tối thiểu 6 ký tự.";
        echo "<br>";           
    }
    else 
    {
        if($password2==$password1)
        {
            echo "password nhập lại Bạn là ";
            echo $password2; 
            echo "<br>";
        }
        else
        {
            echo "password nhập lại của bạn sai";
            echo "<br>";
        }
        
    }



    $email = $_GET ["email"];
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if (!preg_match ($pattern, $email) )
    {  
        echo "Vui lòng địa chỉ vui lòng nhập @."; 
        echo "<br>";          
    }
    else 
    {
        echo "email Bạn là ";
        echo $email; 
        echo "<br>";
    }

    $sdt = $_GET ["sdt"];
    if (!preg_match ("/^[0-9]*$/",$sdt)) 
    {  
        echo "chỉ được nhập số.";
        echo "<br>";           
    }
    else 
    {
        echo "sdt Bạn là ";
        echo $sdt; 
    }


    if( $_GET['username1']&&$_GET['password2']&&$_GET['password1']&&$_GET['email']&&$_GET['sdt'])
    {
        if($password2==$password1)
        {
            echo "<br>";
            if (!preg_match ("/^[0-9]*$/",$sdt)) 
                {  
                    echo "đăng ký thất bại sđt sai";
                    echo "<br>";           
                }
                else
                {
                   // echo "Đăng ký thành công ";
                    $email = $_GET ["email"];
                    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
                    if (!preg_match ($pattern, $email) )
                    {  
                        echo " đăng ký thất bại Vui lòng địa chỉ vui lòng nhập @."; 
                        echo "<br>";          
                    } 
                    else 
                    {
                        
                        ThemTk();
                    }
           
                }     
        }
        else
        {
            echo "<br>";
            echo " đăng ký thất bại mật khẩu lần 2 sai";
        } 
    }
    else
     {
            echo"<br>";
            echo "Đăng ký sai kiểm tra lại tài khoảng";
     }
?>