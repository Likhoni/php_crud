<?php
//=== (value + datatype)
//== (value)

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','Jeedni@2024');
define('DB_NAME', 'php_crud'); 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn === false)
{
    die("ERROR: Could not connect." . mysqli_connect_error());
}
?> 

