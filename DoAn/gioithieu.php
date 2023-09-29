<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Giới Thiệu</title>
    <link rel="stylesheet" href="hearder.css">
    <style>
        h2 {
            background-color: ;
            }
        .wrapper {
            max-width: 800px;
            margin: 0 auto;
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
.div2{
  height: 1px;
  width: 1000px;
  background: black;
  margin-left: 300px;
}
.div1{
  height: 1px;
  width: 1000px;
  background: black;
  margin-left: 300px;
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
        echo "<br>";
        echo "<h1 align=center>Trang Giới Thiệu Sản Phẩm Của Chúng Tôi</h1>";
        echo "<br>";
 
        echo "<div class=div2 >";
         echo "</div>";
        // Define variables for the laptops' specifications
        $laptops = array(
            array("company" => "Acer", "brand" => "Aspire 5", "price" => 649.99, "memory" => "8 GB", "storage" => "512 GB SSD", "image" => "https://m.media-amazon.com/images/I/5148TDwfiIL._AC_.jpg"),
            array("company" => "Apple", "brand" => "MacBook Air", "price" => 999.99, "memory" => "8 GB", "storage" => "256 GB SSD", "image" => "https://help.apple.com/assets/6245F680C5F7A066DA6C7DEC/6245F687C5F7A066DA6C7E12/vi_VN/6a39e220c6cb4ef8535e5c7f922c2a80.png"),
            array("company" => "Dell", "brand" => "XPS 13", "price" => 1299.99, "memory" => "16 GB", "storage" => "512 GB SSD", "image" => "https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/xps-notebooks/xps-13-9320/media-gallery/xs9320nt-xnb-shot-5-1-gy.psd?fmt=pjpg&pscan=auto&scl=1&wid=3827&hei=3863&qlt=100,1&resMode=sharp2&size=3827,3863&chrss=full&imwidth=5000"),
            array("company" => "Asus", "brand" => "ZenBook UX425", "price" => 799.99, "memory" => "8 GB", "storage" => "512 GB SSD", "image" => "https://i.ytimg.com/vi/rI5onlcT7DY/maxresdefault.jpg")
        );

        // Use a loop to output each laptop's ind image
        foreach ($laptops as $laptop) {
            echo "<div style=margin-left:420px>";
            echo "<h2>" . $laptop["brand"] . "</h2>";
            echo "<h3>" . $laptop["company"] . "</h3>";
            echo "<img src='" . $laptop["image"] . "' style='max-width: 300px;margin-left:300px' >";
            echo "<p>Price: $" . $laptop["price"] . "</p>";
            echo "<p>Memory: " . $laptop["memory"] . "</p>";
            echo "<p>Storage: " . $laptop["storage"] . "</p>";
            echo "</div>";
              echo "<br>";
            echo "<br>";
            echo "<div class=div1 >";
             echo "</div>";
        }
        ?>
        <div class="contact-info" align="center">
          <h2>Thông tin liên hệ</h2>
          <p>Địa chỉ: 123 Đường ABC, Quận XYZ, Thành phố HCM</p>
          <p>Điện thoại: 0123 456 789</p>
          <p>Email: info@example.com</p>
        </div>
  
</body>
</html>