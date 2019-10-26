<?php

$name = $_POST["name"];
$mail = $_POST["email"];
$mobile = $_POST["mobile"];
$msg = $_POST["msg"];
$mailres = "zriadventures@gmail.com";

$body= "Name :" . $name ."\nMobile No :" .$mobile . "\nEmail :".$mail . "\nMessage : " . $msg;


$res = mail($mailres, "ZRI Web Customer", $body);

if ($res == 1)
    {
        session_start();
    $_SESSION['nameTest'] = " done";
    header("Location:contact.php");
    }
else {
    echo ("Not send");
}
