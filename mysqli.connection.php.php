<?php
$host = "localhost";
$username = "root";
$passwd = "YES ";
$dbname = "mydb";
//Creating a connection
$con = mysqli_connect("localhost","root","","mydb");

if($con){
print("Connection Established Successfully");
}else{
print("Connection Failed ");
}?>