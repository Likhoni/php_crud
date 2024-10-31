<?php
//=== (value + datatype)
//== (value)

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME', 'likhonidb'); 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn === false)
{
    die("ERROR: Could not connect." . mysqli_connect_error());
}
?>

