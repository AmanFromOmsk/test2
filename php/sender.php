<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $to = "amanrahim2@gmail.com";
    $date = date("d.m.Y");
    $time = date("h:i");
    $from = $email;
    $subject = "заявка с сайта";

    $msg="
    Имя: $name /n
    Телефон: $phone n/
    Почта: $email";
    mail($to, $subject, $msg, "From: $from");
    
?>