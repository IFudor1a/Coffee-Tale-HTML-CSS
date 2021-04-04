<?php
  $name = trim(strip_tags($_POST["name"]));
  $surname = trim(strip_tags($_POST["surname"]));
  $email = trim(strip_tags($_POST["email"]));
  $address = trim(strip_tags($_POST["address"]));
  $subject = "Регистрация на сайте file:///C:/Users/HP/Desktop/Program%20learning/Website%20that%20I%20wil%20do%20by%20my%20own/page.html";
  $msg = "Ваши данные формы регистрации:\n" ."Name: $name\n" ."Surname: $surname\n" ."Your email: $email\n" ."Address: $address";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: Alisher <alisher.berik222@gmail.com>" . "\r\n";
  $headers .= address. "\r\n";
  if(!empty($name) && !empty($sex) && !empty($email) && !empty($country) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    mail($email, $subject, $msg, $headers);
    echo "Спасибо! Мы приняли ваш заказ!.";
    }
?>