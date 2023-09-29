<!DOCTYPE html>
<html>
<head>
  <title>Trang chủ</title>
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="hearder.css">
  <style>
    .slideshow {
      width: 1570px;
      height: 600px;
      position: relative;
      overflow: hidden;
    }

    .slideshow img {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .slideshow img.active {
      opacity: 1;
    }

    .slideshow-controls {
      position: absolute;
      bottom:20px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 1;
    }

    .slideshow-controls button {
      background-color: ;
      border: none;
      color: ;
      cursor: pointer;
      padding: 8px 16px;
      margin: 0 10px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 5px;
      outline: none;
    }
    a{
      text-decoration: none;
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
button{
  margin-left: 60px
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
  <div class="slideshow" style="margin-left: ;margin-top: 20px">
    <img src="https://webmedia.com.vn/images/2021/07/quang-cao-banner-bao-dien-tu-gearvn.jpg" class="active">
    <img src="https://i.ytimg.com/vi/He88NLGoI1I/maxresdefault.jpg">
    <img src="https://i.ytimg.com/vi/fM0WWLrjzn8/maxresdefault.jpg">
    <img src="https://webmedia.com.vn/images/2020/05/banner-slide-laptop-moi-gia-re-nhat-quang-ninh.jpg">
    <div class="slideshow-controls">
      <button onclick="prevSlide()">&#8249;</button>
      <button onclick="nextSlide()">&#8250;</button>
    </div>
  </div>
  <?php
  session_start();
     $Servername = "localhost";
     $Dataname = "dientu";
     $Username = "root";
     $Password = "";
     $GiaBan=array(0);
     $TenSach=array(""); 
     $MaSach=array(""); 
     $Tang=0; 
     $Tang1=0; 
     $conn = new mysqli($Servername, $Username, $Password, $Dataname);
     if($conn->connect_errno)
     {
         die(" Không kết nối được!!! ".$conn->connect_errno); 
     }
     else
     {
         //echo "Đăng nhập CSDL thành công ";
     }
     echo "<br>";
     echo "<br>";
     echo "<div class=div1 >";
     echo "</div>";
     echo "<h1 align=center>Bán Máy Tínnh</h1>";
     $sql_Q = "SELECT * FROM thietbi";
     $result = $conn -> query($sql_Q);
     if($result -> num_rows > 0)
    {   
        echo "<br>";
        echo "<table  align=center>"; 
        echo "<tr>";
        while($row=$result -> fetch_assoc())
        {
            $MaSach[$Tang]=$row["MASP"];
            $GiaBan[$Tang]=$row["GIABAN"];
            $TenSach[$Tang]=$row["TENSP"];
            $Tang++;
            $Tang1++;
            if($Tang1 == 6)
            {
                $Tang1 = 0;
                echo "</tr><tr>";
            } 
            echo "<td>
                <img src=".$row["HINH"]." alt='' width='250px' height='220px' align=center>
                <br>Mã Sản Phẩm : ".$row["MASP"]."
                <br>Tên Sản Phẩm : ".$row["TENSP"]." <br>Giá Bán : ".$row["GIABAN"]."
                <br><button ><a href='BANHANG.php'>Trang Sản Phẩm</button>
            </td>";
        }
        echo "</tr>";
        echo "</table>";
    } 
    echo "<br>";
    echo "<br>";
    echo "<div class=div1 >";
     echo "</div>";
    
    echo "<h1 align=center>Bán Điện Thoại</h1>";
    $sql_Q = "SELECT * FROM dienthoai";
     $result = $conn -> query($sql_Q);
     if($result -> num_rows > 0)
    {   
        echo "<br>";
        echo "<table  align=center>"; 
        echo "<tr >";
        while($row=$result -> fetch_assoc())
        {
            $MaSach[$Tang]=$row["MASP"];
            $GiaBan[$Tang]=$row["GIABAN"];
            $TenSach[$Tang]=$row["TENSP"];
            $Tang++;
            $Tang1++;
            if($Tang1 == 6)
            {
                $Tang1 = 0;
                
            } 
            echo "<td>
                <img src=".$row["HINH"]." alt='' width='250px' height='220px' align=center>
                <br>Mã Sản Phẩm : ".$row["MASP"]."
                <br>Tên Sản Phẩm : ".$row["TENSP"]." <br>Giá Bán : ".$row["GIABAN"]."
                <br><button align=center><a  href='BANHANG.php'>Trang Sản Phẩm</button>
            </td>";
        }
        echo "</tr>";
        echo "</table>";
    } 
    echo "<br>";
    echo "<br>";
    echo "<div class=div1 >";
   echo "</div>";
 
  ?>
  <h1 align="center">Địa Chỉ</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7837.5908826434215!2d106.75698999357908!3d10.826960700000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175275e172c3a31%3A0x4f2163abce0bc860!2zQ3R5IFROSEggVHJ1eeG7gW4gVGjDtG5nIFRyw60gVsWpKFRWVGVhbSk!5e0!3m2!1svi!2s!4v1685330599634!5m2!1svi!2s" width="1560" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <?php
  echo "<br>";
    echo "<br>";
    echo "<div class=div1 >";
   echo "</div>";
  ?>
  <div class="contact-info" align="center">
  <h2>Thông tin liên hệ</h2>
  <p>Địa chỉ: 123 Đường ABC, Quận XYZ, Thành phố HCM</p>
  <p>Điện thoại: 0123 456 789</p>
  <p>Email: info@example.com</p>
  </div>
  <script>
    var slides = document.querySelectorAll('.slideshow img');
    var currentSlide = 0;

    function nextSlide() {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add('active');
    }

    function prevSlide() {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      slides[currentSlide].classList.add('active');
    }

    setInterval(function() {
      nextSlide();
    }, 5000);
  </script>
</body>
</html>