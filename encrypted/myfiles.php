<?php
include("header2.php");
?>
  <div class="service mt-125">
            <div class="container">



<?php


include("db/connection.php");

//-------------------------------------conformation message-------------------
$f= $_REQUEST['message'];

if($_REQUEST['a']==1){
echo "<div class='alert alert-danger'>$f  ___Deleted from database ...</div>";
}
elseif($_REQUEST['a']!=""){
  echo "<div class='alert alert-danger'>ERROR  ".$_REQUEST['a']."</div>";
}
//-----------------------------------conformation message-----------------------
echo "<table class='table'>";

  echo "<tr><th>Title </th><th>File name</th><th>File id</th><th>Description</th><th>Updated time</tr>";





//SELECTING files upadated by current user from files table
$result = mysqli_query($con,"SELECT * FROM  files where username='$_SESSION[login_user]' ") or die('Could not connect: ' . mysqli_error($con));

while($row = mysqli_fetch_array($result)) //processing each file  one by one 
  {

$title=$row['title'];
$file_name=$row['file'];
$d=$row['description'];
$date=$row['updated_time'];
$id=$row['id'];


echo "<tr><td>$title</td><td>$file_name</td><td>$id</td><td>$d</td></td> $email</td><td>$date</td><td>";
//Alert box for conforming the deletion
echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deletefile.php?file_id=$id&fname=$file_name' class='btn btn-primary'>Delete file</a>";
    
    
  }
echo "</table>";
?>







<?php

?>



