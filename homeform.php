<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["number"];
        $product = $_POST["product"];
    
        $to = "shubham.brandingwaale@gmail.com";
        $subject = "Contact Enquiry";
        $message = "Name :" . $name . "\n";
        $message .= "Email :" . $email . "\n";
        $message .= "Phone :" . $phone . "\n";
        $message .= "Product :" . $product . "\n";
        $header = "From: " . $email;
    
        if (empty($name) || empty($email) || empty($phone) || empty($product)) {
            header("location:thankyou.php");
        } else {
            if (mail($to, $subject, $message, $header)) {
                echo 'success';
            } else {
                echo 'error';
            }
        }
    }
?>
