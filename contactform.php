<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["number"];
    $product = $_POST["product"];
    $textmessage = $_POST["message"];

    $to = "shubham.brandingwaale@gmail.com";
    $subject = "Contact Enquiry";
    $message = "Name :" . $name . "\n";
    $message .= "Email :" . $email . "\n";
    $message .= "Phone :" . $phone . "\n";
    $message .= "Product :" . $product . "\n";
    $message .= "Message :" . $textmessage . "\n";
    $header = "From: " . $email;

    if (empty($name) || empty($email) || empty($phone) || empty($product) || empty($textmessage)) {
        /*header("location:thankyou.php");*/
    } else {
        if (mail($to, $subject, $message, $header)) {
            header("location:thankyou.php");
        } else {
            header("location:index.php");
        }
    }
}
?>