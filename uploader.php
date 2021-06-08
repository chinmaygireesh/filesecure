<?php
include("header2.php");
?>
  <div class="service mt-125">
            <div class="container">


            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e88a1b98cd.js" crossorigin="anonymous"></script>
           
           
            <div class="row">
    <div class="col-md-12 col-12">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active" >
                <img src="./img/ca.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="./img/cb.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="./img/cc.jpg" class="d-block w-100">
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </div>
</div>


<?php
$target_path = "uploads/";

$target_path = $target_path . basename($_FILES['uploadedfile']['name']); 

move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);


$infile=$target_path;

$filename=basename( $_FILES['uploadedfile']['name']); 

$Dfilename=$filename;
//echo "$filename"
  // Open the file and returns a file pointer resource. 
    $handle = fopen($infile, "rb") or die("Could not open a file."); 
     // Returns the read string.
    $contents = fread($handle, filesize($infile));
     // Close the opened file pointer.
    fclose($handle);
	
	
    # the key should be random binary, use scrypt, bcrypt or PBKDF2 to
    # convert a string into a key
    # key is specified using hexadecimal
    //$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
	
	$key=rand(1000000,10000000);
	
	
	
	
	//$pass=rand(0,99999);
      $imgpasss=create_image($key);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    # show key size use either 16, 24 or 32 byte keys for AES-128, 192
    # and 256 respectively
    $key_size =  strlen($key);
    //echo "Key size: " . $key_size . "\n";
	
 #--- ENCRYPTION ---	

    # create a random IV to use with CBC encoding
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    
    # creates a cipher text 
    # to keep the text confidential 
    # only suitable for encoded input that never ends with value 00h
    # (because of default zero padding)
    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,
                                 $contents, MCRYPT_MODE_CBC, $iv);

    # prepend the IV for it to be available for decryption
    $ciphertext = $iv . $ciphertext;
    
    # encode the resulting cipher text so it can be represented by a string
    $ciphertext_base64 = base64_encode($ciphertext);

    #echo  $ciphertext_base64 . "\n";
	$cipher = "encrypted/$filename";
	$fh = fopen($cipher, 'w') or die("can't open file");
	fwrite($fh, $ciphertext_base64 );
    fclose($fh);
	
	
	
	
	$fh = fopen('filename.txt', 'w') or die("can't open file");
	fwrite($fh, $filename );
    fclose($fh);
	
	
	
	$myFile = $cipher;
	$fh = fopen($myFile, 'r');
	$encdata = fread($fh, filesize($myFile));
	fclose($fh);
	
	
	
		/*
	echo "<br><br>KEY $key   <br><br> >>>";
	
	
 # --- DECRYPTION ---
 
    //$ciphertext_dec = base64_decode($ciphertext_base64);
     $ciphertext_dec = base64_decode($encdata);
    # retrieves the IV, iv_size should be created using mcrypt_get_iv_size()
    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
    
    # retrieves the cipher text (everything except the $iv_size in the front)
    $ciphertext_dec = substr($ciphertext_dec, $iv_size);

    # may remove 00h valued characters from end of plain text
    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key,
                                    $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
    
    #echo  $plaintext_dec . "\n";
	$myFile = "decrypted/$filename";
	$fh = fopen($myFile, 'w') or die("can't open file");
	fwrite($fh, $plaintext_dec );
    fclose($fh);	









*/



















































$dir="uploads";

$file= "aa.png";
$filename="aa.png";

include("db/connection.php");


//echo "insert into files (title,file,username,description) value ('$_POST[title]','$Dfilename','$_SESSION[login_name]','$_POST[description]'";
mysqli_query($con,"insert into files (title,file,username,description,Confidentiality) value ('$_POST[title]','$Dfilename','$_SESSION[login_name]','$_POST[description]','$_POST[Confidentiality]')");

?>



<?php

$ext = pathinfo($filename, PATHINFO_EXTENSION);
$hash=hash_file('md5',  $file);
$hashext=$hash.".".$ext;

//echo $hash;


$myfile = fopen($file, "r") or die("Unable to open file!");
$theData=fread($myfile,filesize($file));
$mlen=filesize($file);

//echo "<br>".$mlen;



$len2=$mlen/2;
	//echo $mlen."--".$len2;
	$start=0;
	$end=$len2;
	$data1=substr($theData,$start,$end);
	//echo "<br>Data 1".$data1;
	$start=$len2;
	$end=$mlen;
	$len3=$len2*2;
	if($len3!=$mlen)
	$data2=substr($theData,$start,$end)."0";
	else
	$data2=substr($theData,$start,$end);
	//echo "<br>Data 2".$data2;
	
	
	
	
	
if (!is_dir($dir."/split")) 
// is_dir - tells whether the filename is a directory
{
    //mkdir - tells that need to create a directory
    mkdir($dir."/split");
}








//$myFile = "$dir/splita/$hash.$ext";
$s="key";
$myFile = "$dir/splita/$s.$Dfilename.$hash.$ext";//naming key as file

$fh = fopen($myFile, 'w') or die("can't open file");

fwrite($fh, $data1);
fclose($fh);

//echo $myFile."<br>";

	
$myFile = "$dir/splitb/$s.$Dfilename.$hash.$ext";//naming key as file

$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $data2);
fclose($fh);

//echo "$Dfilename.$ext";

echo "<a href='$myFile' download class='btn btn-danger'>Download Secret Img</a>";

/*

$myFile = "$dir/splita/$hash.$ext";
echo $myFile."<br>";
$myfile = fopen($myFile, "r") or die("Unable to open file!");
$theData1=fread($myfile,filesize($file));


$myFile = "$dir/splitb/$hash.$ext";
echo $myFile."<br>";
$myfile = fopen($myFile, "r") or die("Unable to open file!");
$theData2=fread($myfile,filesize($file));
$mlen=filesize($file);




$myFile = "$dir/split/c$hash.$ext";
$fh = fopen($myFile, 'w') or die("can't open file");
$theData3=$theData1.$theData2;
fwrite($fh, $theData3);
fclose($fh);


*/



//echo "<a href='dec.php?a=a$hash.$ext&b=b$hash.$ext'>DECRYPTION</a>";




















































function create_image($pass)
{
    //Let's generate a totally random string using md5
   // $md5 = $pass;
//$md5 = md5(rand(0,999));    
    //We don't need a 32 character long string so we trim it down to 5 
  //  $pass = substr($md5, 10, 5); 

    //Set the image width and height
    $width = 200;
    $height = 100; 

    //Create the image resource 
    $image = ImageCreate($width, $height);  

    //We are making three colors, white, black and gray
    $white = ImageColorAllocate($image, 255, 255, 255);
    $black = ImageColorAllocate($image, 0, 0, 0);
    $grey = ImageColorAllocate($image, 204, 204, 204);

    //Make the background black 
    ImageFill($image, 0, 0, $black); 

    //Add randomly generated string in white to the image
    ImageString($image, 5, 50, 50, $pass, $white); 

    //Throw in some lines to make it a little bit harder for any bots to break 
   // ImageRectangle($image,0,0,$width-1,$height-1,$grey); 
   // imageline($image, 0, $height/2, $width, $height/2, $grey); 
   // imageline($image, $width/2, 0, $width/2, $height, $grey); 
 
    //Tell the browser what kind of file is come in 
    //header("Content-Type: image/jpeg"); 

    //Output the newly created image in jpeg format 
   // $a=ImageJpeg($image);
	
  $save = "aa.png";
  imagepng($image, $save);

  return $save; 
  
}






























?>