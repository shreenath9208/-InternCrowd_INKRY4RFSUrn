<?php
session_start();

if(!isset($_SESSION["em"])){
    
$db_hostname="localhost";
$db_username="root";
$db_password="shree@2002";
$db_name="interncrowd";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo " something went wrong".mysqli_connect_error();
    exit;
}

$na=$_POST["name"];
$em=$_POST["email"];
$pas=$_POST["password"];

$sql="insert into signup(Name , Email_Address, Password) values ('$na','$em','$pas')";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo " the failed to connect".mysqli_error($conn);
    exit;
}

else {
    $_SESSION["em"]=$_POST["email"];
    $_SESSION["pa"]=$_POST["password"];
    // To redirect to the particular page you have to  menation the header method which will redirect to the the particular page 
    header("location:page.php");
}
mysqli_close($conn);
}
else{
   
    $error="This Email is already Registred with us";

}
?>
