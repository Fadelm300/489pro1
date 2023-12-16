<?php
$name =$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$pnumber=$_POST['phone_number'];
$address=$_POST['address'];

$conn = new mysqli('localhost','root','','pharmacy');
if($conn->connect_error)
{
    die('connection failed :'.$conn->connect_error);
}else
{
    $stmt = $conn->prepare("insert into patient(username,password,email,phone_number,address) 
    values(?,?,?,?,?)");
    $stmt->bind_param("sssis",$name,$password,$email,$pnumber,$address);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

?>