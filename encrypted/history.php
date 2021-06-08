<?php
include("header2.php");
?>
  <div class="service mt-125">
            <div class="container">







<?php
include("db/connection.php");
echo "<table class='table'>";

  echo "<tr><th>Title </th><th>Owner</th><th> Approve</th></tr>";





$result = mysqli_query($con,"SELECT * FROM  file_request where username='$_SESSION[login_user]' ") or die('Could not connect: ' . mysqli_error($con));

while($row = mysqli_fetch_array($result))
  {
$result2 = mysqli_query($con,"SELECT * FROM  files where id='$row[file_id]' ") or die('Could not connect: ' . mysqli_error($con));
$row2 = mysqli_fetch_array($result2);

	  
	  
	  
	  echo "<tr><td>$row2[title] </td><td>$row[owner_id]</td><td>";
if($row['path']!="")
echo	  "<a href='$row[path]' class='btn btn-primary' target='_blank'>Download 	  </a>";
	  else
	  {
		  echo "Pending";
	  }
	  
	  echo "</td></tr>";


  }
echo "</table>";
?>




<?php

?>



