<?php

$conn = mysqli_connect("localhost", "root", "", "myNotes");
//$conn = mysqli_connect("127.0.0.1:56244", "azure", "6#vWHD_$", "dominant_mota522");
mysqli_set_charset($conn, "utf8");
if (!$conn) {
    echo "Database is not connected";
}
else
{
   echo "connected";
}

?>
