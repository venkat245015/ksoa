<?php

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$mobile = $_POST['mobile'];
$total = $_POST['total'];
$veg = $_POST['veg'];
$nonveg = $_POST['nonveg'];
$subject1 = "Registration for Querencia'18 : " . $name;
$message = $_POST['msg'];
$message="Name:".$name.'<br/>City: '.$city.'<br/>State: '.$state.'<br/>Mobile: '.$mobile.'<br/>Total Participants: '.$total.'<br/>Total Veg: '.$veg.'<br/>Total Non Veg: '.$nonveg;
$from = "From: $name<$email>\r\nReturn-path: $email";
$subject = "A message submitted in your contact form";
$message = "Name:" . $name . "

             Email:" . $email . "

             Subject:" . $subject1 . "

             Message:"
        . $message;
$from = "admin@acvrexports.com";
$subject = strip_tags($subject);
$message = strip_tags($message);
mail("venkat245015@gmail.com", $subject, $message, $from);
?>