<?php 

$conn = new mysqli('localhost','root','','users',3307);
session_start();
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(1);
if(!$conn.mysqli_connect_error())
{
    echo "Connection Denied";
    
}


?>