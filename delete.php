<?php
require_once "conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM students WHERE  id = '$id'";
if(mysqli_query($conn , $sql)){
    header("location: index.php");
}else{
    echo "Something went wrong, Please try again later.";
}
?>