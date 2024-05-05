<?php
$conn=mysqli_connect("localhost","root","root","database1");
if($conn){
    echo "Connected";
}
else{
    echo "Failed";
}
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];

$data="INSERT INTO loginform VALUES('$firstName','$lastName','$email','$password','$number')";
$check=mysqli_query($conn,$data);
if($check){
    echo "Data sended";
}
else{
    echo "Data not send";
}
?>