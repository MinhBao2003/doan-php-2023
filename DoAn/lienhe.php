<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Liên Hệ</title>
    <link rel="stylesheet" href="hearder.css">
    <style>
        .container {
    width: 30%;
    margin: auto;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
    input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
 
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
 
input[type=submit]:hover {
    background-color: #45a049;
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
<div class="container">
    <h2>Liên Hệ Với Chúng Tôi</h2>
    <form action="/action_page.php">
        <label for="fname">Họ Và Tên</label>
        <input type="text" id="name" name="name" placeholder="Nhập họ và tên...">
 
        <label for="lname">Email</label>
        <input type="text" id="email" name="email" placeholder="Nhập email...">
 
        <label for="country">Số Điện Thoại</label>
        <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại...">
 
        <label for="address">Địa Chỉ</label>
        <input type="text" id="address" name="address" placeholder="Nhập địa chỉ...">
 
        <input type="submit" value="Submit">
    </form>
</div>
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