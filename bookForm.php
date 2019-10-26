<?php

$name = $_POST["name"];
$mailcus = $_POST["mail"];
$mobile = $_POST["mobile"];
$date = $_POST["date"];
$pack = $_POST["pack"];
$type = $_POST["typeName"];
$accom = 'No';
$trans = 'No';
$food = 'No';
$mailsend = "zriadventures@gmail.com";

//HEADERS

$headers = "From: ZRI Adventures - Experiences <experience@zriadventures.com>\r\n";
$headers .= "Reply-To: experience@zriadventures.com\r\n";
$headers .= "Return-Path: experience@zriadventures.com\r\n";


date_default_timezone_set('Asia/Colombo');
$currentDate = date('m/d/Y h:i:s a', time());

$subj = "New Booking on " . $currentDate;

if (isset($_POST["select"])) {
    $acc = $_POST["select"];
    if (isset($acc[0]))
        $accom = "Accomodation";
    if (isset($acc[1]))
        $trans = "Transport";
    if (isset($acc[2]))
        $food = "Food";
}


$body = "Type : " .$type. "\nName : " . $name . "\nMail : " . $mailcus . "\nMobile : " . $mobile .
    "\nDate : " . $date . "\nNo of Pax : " . $pack . "\nAdditional Features : " . $accom . ", " . $trans . ", " . $food;

$mesage = "Hi " . $name .

"

\nThank you choosing ZRI Adventures!

\nWe hope to bring you an adventure to remember.

\nYour booking details are as follows;

\nType : " .$type. "\nName : " . $name . "\nMail : " . $mailcus . "\nMobile : " . $mobile .
"\nDate : " . $date . "\nNo of Pax : " . $pack . "\nAdditional Features : " . $accom . ", " . $trans . ", " . $food.

"

\nWe will get in touch with you as soon as possible.

\nEnjoy, be safe and most importantly capture your favorite moments!

\nYou can tag us on Facebook and Instagram to be featured!! ";

$res = mail($mailsend, $subj, $body, $headers);
$res1 = mail($mailcus,$subj,$mesage, $headers);


if ($res == 1) {
    
    session_start();
    $_SESSION['nameTest'] = " done";
    header("Location:book.php");
} else {
    echo ("\nNot send");
}
