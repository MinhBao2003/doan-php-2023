<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "vinhbaominh04102003@gmail.com"; // Địa chỉ email của bạn
    $subject = "Thông tin liên hệ từ trang web của bạn";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Tạo nội dung email
    $email_content = "Họ và tên: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Nội dung:\n$message\n";

    // Gửi email
    if (mail($to_email, $subject, $email_content)) {
        echo "Cảm ơn bạn đã liên hệ với chúng tôi!";
    } else {
        echo "Có lỗi xảy ra khi gửi email. Vui lòng thử lại sau.";
    }
}
?>