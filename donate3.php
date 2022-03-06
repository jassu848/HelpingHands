
<?php
session_start();

$con=mysqli_connect('localhost','root','unstable84');
mysqli_select_db($con,'HelpingHandDb');

$name=$_SESSION['name'];
$quantity=0;
$total=$_POST['range'];
$donation_type='Money Donation';
$location='chennai';
// $_SESSION['ftotal']=$total;
// echo $_SESSION['ftotal'];
$donation_id=rand(1000,100000);
$s="select * from donation where donation_id='$donation_id'" ;
$contains=mysqli_query($con,$s);
while($contains!=0)
{
    $donation_id=rand(1000,100000);
    $s="select * from donation where donation_id='$donation_id'" ;
    $contains=mysqli_query($con,$s);
}
$user_id="select * from user_info where username='$$name'"  ;
$user_id=mysqli_query($con,$user_id);
$q1="insert into donations(Donation_id,user_id) values('$donation_id','$user_id')";
mysqli_query($con,$q1);
$q2="insert into donations_details(Donation_id,donation_type,quantity,total) values('$donation_id','$donation_type','$quantity','$total')";
mysqli_query($con,$q2);



    //echo $reg;
    
    
  
?>  