<?php

$name = $_POST["name"];
$fname = $_POST["fname"];
$email = $_POST["email"];
$phone = $_POST["phone"];


$con = mysqli_connect("localhost","root","","crud") or die("Connection failed");
$query = "INSERT INTO tbl_student(name, fname, email, phone) VALUES ('{$name}','{$fname}','{$email}','{$phone}')";

if (mysqli_query($con,$query)) {
    echo 1;
}
else{
    echo 0;
}



?>