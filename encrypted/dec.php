<?php

$dir="uploads";
$myFile = "$dir/split/".$_REQUEST['a'];

$myfile = fopen($myFile, "r") or die("Unable to open file!");
$theData1=fread($myfile,filesize($myFile));


$myFile = "$dir/split/".$_REQUEST['b'];
$myfile = fopen($myFile, "r") or die("Unable to open file!");
$theData2=fread($myfile,filesize($myFile));
$mlen=filesize($file);


echo "<a href='dec.php?a=a$hash.$ext&b=b$hash.$ext'>DECRYPTION</a>";

$myFile = "$dir/split/ccc".$_REQUEST['a'];
$fh = fopen($myFile, 'w') or die("can't open file");
$theData3=$theData1.$theData2;
fwrite($fh, $theData3);
fclose($fh);

echo "<img src='$myFile'>";


if(isset($_POST['key']))
{
	
	
	
	$key=$_POST['key'];
	
	$filename2="encrypted/".$_POST['file'];
	$filename=$_POST['file'];
	
	
	
	
	
	
	
	
	
	
	
	
	   $key_size =  strlen($key);
    echo "Key size: " . $key_size . "\n";
	
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
    
	
	
	
	



	
	$myFile = $filename2;
	$fh = fopen($myFile, 'r');
	$encdata = fread($fh, filesize($myFile));
	fclose($fh);
	
	
	
	
	
	
	echo "<br><br>KEY $key   <br><br> >>>";
	
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

	
	
	
	
}
?>
Stop__Shop_MASS_cl.png
<form action='' method='post'>
File <input type='text' name='file'>
key <input type='text' name='key'>
<input type='submit' name='submit'>
</form>