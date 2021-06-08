<?php
include("header2.php");
?>
  <div class="service mt-125">
            <div class="container">







<?php
include("db/connection.php");
if($_REQUEST['file']!="")
{
mysqli_query($con,"insert into file_request (file_id,username,owner_id) value ('$_REQUEST[file]','$_SESSION[login_name]','$_REQUEST[owner_id]')");

echo "<div class='alert alert-danger'>Requested Successfully</div>";
}
echo "<table class='table'>";

  echo "<tr><th>Title </th><th>Request</th></tr>";




$result = mysqli_query($con,"SELECT * FROM files where username!='$_SESSION[login_user]' ") or die('Could not connect: ' . mysqli_error($con));

while($row = mysqli_fetch_array($result))
  {
$f=0;
    $result2 = mysqli_query($con,"SELECT * FROM  file_request where username='$_SESSION[login_user]' and file_id='$row[id]' ") or die('Could not connect: ' . mysqli_error($con));
    while($row2 = mysqli_fetch_array($result2))
    {
      $f=1;
    }
 

    echo "<tr><td><b>$row[title]</b>
    <br>
    $row[description]
    </td><td> ";
    if($f!=1)
    echo "<a href='?file=$row[id]&owner_id=$row[username]' class='btn btn-primary'>Request</a>";
    else
	{
    echo "Already Requested &nbsp;$nbsp;";
	 echo "<a href='?file=$row[id]&owner_id=$row[username]' class='btn btn-primary'>Request Again</a>";
   
	}
    
    echo "</td></tr>";








  }
echo "</table>";
?>




<?php

?>



