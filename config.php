<?php
$user = 'root';
$password = 'root';
$db = 'myNotes';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
    if($link)
    {
       echo "Connected";
    }
    else{
       echo "does not connected";
    }
?>
