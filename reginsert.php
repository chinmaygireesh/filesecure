<?php
include("db/connection.php");

if(!mysqli_query($con,"insert into register (name,username,password,course,email,address,gender) value ('$_POST[name]','$_POST[username]','$_POST[password]','$_POST[course]','$_POST[email]','$_POST[address]', '$_POST[gender]')"))
 {
	
   // printf("Error message: %s\n", mysqli_error($con));
   
   //echo "https://erpsoftwares.in/gateway/mail.php?to=$_POST[email]&sub=Login details&txt=Click to enable your account <a href='http://localhost/new/verify.php?email=$_POST[email]'>CLICK</a>";
  ?>
  
  
  
  <?php
  
  
  $s="location:register.php?a=".mysqli_error($con);
  
  
  
  
  
  
  
   // echo $s;
header($s);
}
else
{
   header("location:register.php?a=1&email=$_POST[email]");
}

?>