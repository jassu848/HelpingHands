<?php
session_start();

$con=mysqli_connect('localhost','root','unstable84');
mysqli_select_db($con,'unserinfo');

$name=$_POST['username'];
$pass=$_POST['password'];

$s="select * from user_table where username='$name' && password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
     header('location:main.php');
   echo "Hello";
}
else{
  header('location:invalidcredentials.php');
 echo "Byr";
}

?>