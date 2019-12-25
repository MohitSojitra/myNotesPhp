<?php
    include "config.php";

    $id = $_GET['id'];
    $query = "DELETE FROM `Notes` WHERE id = $id ";
    mysqli_query($link , $query);
    echo "delete run";
    header('location:index.php');

?>