<?php
if (isset($_POST['submit_btn'])) {
    $to = "jesilafoumiya@gmail.com";
    $subject = $_POST['p_subject'];
    $message = "Name: " . $_POST['p_name'] . "\r\n" .
               "Email: " . $_POST['p_email'] . "\r\n" .
               "Phone Number: " . $_POST['p_phone'] . "\r\n" .
               "Subject: " . $_POST['p_subject'] . "\r\n" .
               "Message: " . $_POST['p_message'];
               
    $headers = "From: vibrotech.seo@gmail.com" . "\r\n" .
               "Reply-To: vibrotech.seo@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    if (mail($to, $subject, $message, $headers)) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
?>