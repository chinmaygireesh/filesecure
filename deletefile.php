<?php
include("db/connection.php");

$fid = $_REQUEST['file_id'];
echo $fid;


if(!mysqli_query($con,"DELETE FROM `files` WHERE `id`='$fid'"))
 {
   
    echo mysqli_error($con);//if there is any error,printing it
  
}
else
{
    $fname=$_REQUEST['fname'];
    header("location:myfiles.php?a=1&message=$fname");//deletion was successful and it is redirecting  myfile.php
   
}

?>