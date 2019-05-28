<?php
    $conn = mysqli_connect('localhost','root','') or die('connection failed');
    mysqli_select_db($conn,'crudyoperation');
    if (isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];

    $sql = "INSERT INTO data (name,location)
    VALUES ('$name', '$location')";

    $query = mysqli_query($conn,$sql);
    if ($query){
        echo "data inserted";
    }else {
        die(mysqli_error($conn));
    }

    
    }

?>