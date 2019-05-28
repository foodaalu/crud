<?php
    include 'process.php';
    $id = $_GET['id'];
    $q = "DELETE FROM data WHERE id = $id";
    mysqli_query($conn,$q);
    header('location: display.php');
?>