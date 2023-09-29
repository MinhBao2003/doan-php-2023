<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Ký</title>
    <link rel="stylesheet" href="hearder.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        form {
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #ccc;
            max-width: 500px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            color: #444;
        }
        label {
            display: inline-block;
            width: 120px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #777;
        }
        input[type="text"],
        input[type="password"] {
            padding: 8px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-family: inherit;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        button {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff6347;
        }
        .contact-info {
  margin-top: 20px;
  padding: 20px;
  background-color: #98FB98;
  border-radius: 5px;
  box-shadow: 0px 2px 5px #888;
}

.contact-info h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.contact-info p {
  font-size: 16px;
  margin-bottom: 5px;
}

.contact-info a {
  color: #333;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s ease-in-out;
}

.contact-info a:hover {
  color: #f00;
}

.div1{
  height: 1px;
  width: 1000px;
  background: black;
  margin-left: 300px
}
    </style>
</head>
<body>
<?php
     echo "<nav align=center>";
     echo "<ul >";
     echo "<li><a href='trangchu.php'>Trang chủ</a></li>";
     echo "<li><a href='BANHANG.php'>Sản phẩm</a></li>";
     echo "<li><a href='gioithieu.php'>Giới thiệu</a></li>";
     echo "<li><a href='lienhe.php'>Liên hệ</a></li>";
     echo "<li><a href='dangnhap.php'>Login</a></li>";
     echo "</ul>";
     echo "</nav>";
     echo "<br>";
?>
<form action="xulydangky.php" method="GET">
        <table align="center">
            <tr>
                <td colspan="2" align="center"><h1>Form Đăng Ký</h1></td>
            </tr>   
            <tr>
                <td>Username :</td>
                <td><input type="text" id="username1" name="username1"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" id="password1" name="password1"></td>
            </tr>
            <tr>
                <td>Nhập lại Password  :</td>
                <td><input type="text" id="password2" name="password2"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td>SĐt :</td>
                <td><input type="text" id="sdt" name="sdt"></td>
            </tr>
            <tr> 
                <td colspan="2" align="center"><input type="submit" class="button" name="btn_submit" value="Dang ky"><!a href="dangnhap.php"><!/a></td>
            </tr>

        </table>
        
    </form>
    <br><br>
    <div class="div1"></div>
    <div class="contact-info" align="center">
      <h2>Thông tin liên hệ</h2>
      <p>Địa chỉ: 123 Đường ABC, Quận XYZ, Thành phố HCM</p>
      <p>Điện thoại: 0123 456 789</p>
      <p>Email: info@example.com</p>
      </div>
</body>
</html>