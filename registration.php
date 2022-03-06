<?php
session_start();

$con=mysqli_connect('localhost','root','unstable84');
mysqli_select_db($con,'HelpingHandDb');
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];

$s="select * from user_table where username='$name'";
$em="select * from user_table where Email='$email'";
$result=mysqli_query($con,$s);
$emresult=mysqli_query($con,$em);
$num1=mysqli_num_rows($result);
$num2=mysqli_num_rows($emresult);

if($pass!=$pass2)
{
    
    header('location:confirmpass.php');
    return;
}

if($num1==1||$num2==1){   
    //echo "Email already registered";
      header('location:usernametaken.php');
}
else{
    $reg="insert into user_table(username,Email,password) values('$name','$email','$pass')";
    //echo $reg;
    mysqli_query($con,$reg);
    //echo "Registration successful";
    $_SESSION['name']=$name;
   
    header('location:main.php');
}

?>