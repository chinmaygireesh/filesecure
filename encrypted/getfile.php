<?php
include("header2.php");
?>
  <div class="service mt-125">
            <div class="container">










<?php
if(isset($_POST['submit']))
{
$target_path = "keyimg/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);

//$dir="uploads";
$myFile = $target_path;
//$myFile = "uploads/splitb/".basename($_FILES['uploadedfile']['name']);
//echo $myFile."<br>";
//echo "<img src='$myFile'>";
$myfile = fopen($myFile, "r") or die("Unable to open file!");
$theData2=fread($myfile,filesize($myFile));


$myFile = "uploads/splita/".basename($_FILES['uploadedfile']['name']);
//echo $myFile."<br>";
//echo "<img src='$myFile'>";
$myfile = fopen($myFile, "r") or die("Unable to open file!");
$theData1=fread($myfile,filesize($myFile));



//echo "<a href='dec.php?a=a$hash.$ext&b=b$hash.$ext'>DECRYPTION</a>";

$myFile = "uploads/split/ccc".basename($_FILES['uploadedfile']['name']);
$fh = fopen($myFile, 'w') or die("can't open file");
$theData3=$theData1.$theData2;
fwrite($fh, $theData3);
fclose($fh);

echo "<img src='$myFile'>";
?>
<form action='decDownload.php' method='post'>
Select File Name 


<select name='file' class='form-control'>
<?php
include("db/connection.php");
$result = mysqli_query($con,"SELECT * FROM files where username='$_SESSION[login_user]' ") or die('Could not connect: ' . mysqli_error($con));

while($row = mysqli_fetch_array($result))
  {
	  echo "<option value='$row[file]'> $row[title]</option>";


  }

?>
</select>


Enter Key Shown In IMage <input type='text' name='key' class='form-control'>
<input type='submit' name='submit' class='btn btn-primary'>
</form>


<?php
}
else
{
?>

<form enctype="multipart/form-data" action="" method="POST">


Choose your Secret Key Image <input name="uploadedfile" type="file" class='form-control' /><br />

<input type='submit' name='submit' class='btn btn-primary'>
</form>
<?php
}
?>



