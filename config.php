<?php

$servername="localhost";
$username="root";
$password="";
$database="customer";

//connection
$conn=mysqli_connect($servername,$username,$password,$database);
//connection was not successful
if(!$conn)
{
    die("failed to connect" . mysqli_connect_error()) ;
}
else{
    // echo 'connection successful';
}

?>