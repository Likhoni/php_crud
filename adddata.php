<?php
require_once "conn.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile_number = $_POST['mobile_number'];
 
    if ($name != "" && $mobile_number != "") {
        $sql = "INSERT INTO students (`name`, `mobile_number`) VALUES ('$name', '$mobile_number')";
        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Name, Mobile Number cannot be empty!";
    }
}
 