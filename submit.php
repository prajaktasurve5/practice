<?php
// mysql connection


$name=$_POST["fullname"];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$email=$_POST['user@example.com'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
// store register value
$query="INSERT INTO user (name,mobile,password,email,gender,city,address,pincode) values ('$name','$mobile','$password','$email','$gender','$city','$address','$pincode') ";
$connect=mysqli_connect('localhost','root','','learn');
if(mysqli_query($connect,$query))

echo "inserted";
else
echo "failed";

?>