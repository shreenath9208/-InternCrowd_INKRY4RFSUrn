<?php
session_start();
$db_hostname="localhost";
$db_username="root";
$db_password="shree@2002";
$db_name="interncrowd";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "Something went wrong".mysqli_connect_error();
}

$email =$_POST['email'];
$password =$_POST['password'];

// $sql="insert into login(Email, Password) values ('$email','$password')";
$sql="select * from signup  where Email_Address='$email' and  Password='$password'";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Failed to connect please contact Admin".mysqli_error($conn);
    exit;
}

if (mysqli_num_rows($result)>0){
    $error[]="user is alredy registred with us";
    

}


mysqli_close($conn);
// echo " You Login  is  successfully";
// mysqli_close($conn);

?>




