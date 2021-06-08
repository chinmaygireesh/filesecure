<?php
include("header2.php");
?>
  <div class="service mt-125">
            <div class="container">







<?php
include("db/connection.php");


//echo "update file_request set status='Decline' where id='$_REQUEST[file_id]'";
mysqli_query($con,"update file_request set status='Decline' where id='$_REQUEST[file_id]' ");
echo "<table class='table'>";

  echo "<tr><th>Title </th><th>User Details(Address,Email)</th><th> Approve</th><th>Confidentiality</th></tr>";





$result = mysqli_query($con,"SELECT * FROM  file_request where owner_id='$_SESSION[login_user]' ") or die('Could not connect: ' . mysqli_error($con));

while($row = mysqli_fetch_array($result))
  {

	$result2 = mysqli_query($con,"SELECT * FROM  register where username='$row[username]' ") or die('Could not connect: ' . mysqli_error($con));
	$row2 = mysqli_fetch_array($result2);
$name=$row2['name'];
$address=$row2['address'];
$email=$row2['email'];




$result2 = mysqli_query($con,"SELECT * FROM  files where id='$row[file_id]' ") or die('Could not connect: ' . mysqli_error($con));
$row2 = mysqli_fetch_array($result2);
$confidentiality=$row2['Confidentiality'];
	  
	  
	  
	  echo "<tr><td>$row2[title]  </td><td>$row[name] $address $email</td><td>";
	  
	  
	  
	  if($row['path']=="")
echo	  "<a href='approve.php?file_id=$row[file_id]&rid=$row[id]' class='btn btn-primary'>Approve</a>
<a href='?file_id=$row[id]&rid=$row[id]' class='btn btn-primary'>Decline</a></td><td>$row2[Confidentiality]</td>
$row[status]
";
	  else
	  {
		  echo "Already Approved";
	  }
	  
	  
	  
	  
	  
	  echo "</td></tr>";


  }
echo "</table>";
?>




<?php

?>



