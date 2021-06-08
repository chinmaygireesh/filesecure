<?php
session_start();
include('db/connection.php');

$tbl_name="register"; // Table name 
date_default_timezone_set('Asia/Kolkata');
// Connect to server and select databse.

//echo "sssfff";
// username and password sent from form 
$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password'];


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

	
if(isset($_POST['login']))
{
echo "teacher $myusername $mypassword";

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
echo $count;
if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
 $result = mysqli_query($con,"SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'") or die('Could not connect: ' . mysqli_error($con));

while($row = mysqli_fetch_array($result))
  {

//$_SESSION['company_name'] =$row['company_name'];


  
$_SESSION['userid'] =$row['id'];
$_SESSION['privelage'] =$row['privelage'];

date_default_timezone_set("Asia/Calcutta");

$d=date('Y:m:d H:i:s');

$ip=$_SERVER['REMOTE_ADDR'];
$_SESSION['login_user']=$myusername;
$_SESSION['login_name']=$myusername;
$_SESSION['user']=$myusername;

	header("location:dashboard.php");
  }
}


else
{
echo "sss";
header("location:login.php?a=1");

}





}

?>
 
 



