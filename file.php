<?php
include("header2.php");
?>
  <div class="service mt-125">
            <div class="container">



<form enctype="multipart/form-data" action="uploader.php" method="POST">
Title<input type='text' name='title' class='form-control'><br>
Description<textarea name='description' class='form-control'></textarea>
Confidentiality :
<select class="form-control" name='Confidentiality'>
								    <option VALUE="">Choose Level</option>
								    <option value="LOW">Low</option>
									<option value="HIGH">High</option>
								</select>



<br>Choose a file to upload: <input name="uploadedfile" type="file" /> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Upload File" class='btn btn-primary' />
</form>