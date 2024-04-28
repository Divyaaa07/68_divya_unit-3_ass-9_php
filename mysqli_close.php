<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "mydb";
//Creating a connection
$con = mysqli_connect("localhost","root","","mydb");
$res = mysqli_close($con);
if($res){
print("Connection Closed");
}else{
    print("There is an issue while closing the connection");
    }
?>

