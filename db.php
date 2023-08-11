<?php
$servername="localhost";
$username="root";
$password="";
$database="ebook";
$con = mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("Error Deleting :" .mysqli_error($con));
}
?>