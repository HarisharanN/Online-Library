<p class="txts">
<?php
$useremail=$_POST['useremail'];
$passwords=$_POST['userpassword'];
$usernames=$_POST['username'];
$lastnames=$_POST['lastname'];
if (!empty($useremail) && !empty($passwords))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password,"loginids");
	if(mysqli_connect_error())
	{
		die('Connect Error ('. msqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
 $number = preg_match('@[0-9]@', $passwords);
  $uppercase = preg_match('@[A-Z]@', $passwords);
  $lowercase = preg_match('@[a-z]@', $passwords);
  $specialChars = preg_match('@[^\w]@', $passwords);
  $uspecialChars = preg_match('@[^\w]@', $usernames);
 $unumber = preg_match('@[0-9]@', $usernames);
  $lspecialChars = preg_match('@[^\w]@', $lastnames);
 $lnumber = preg_match('@[0-9]@', $lastnames);
if($unumber || $uspecialChars|| $lnumber|| $lspecialChars)
{    echo '<script>alert("Name should contain only letters.")</script>';
 die();
 }
else if(strlen($passwords) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
    echo '<script>alert("Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.")</script>';
 die();
 }
 else
 {

$hp=hash('sha512',$passwords);
$sql="INSERT INTO loginemail (Emailid, Username, LastName, Password) values ('$useremail','$usernames','$lastnames', '$hp')";
	if($conn->query($sql))
	{
	echo '<script>alert("Account made. NOW LOG IN.")</script>';
	header('location:Login1.html');
	}	
	else
	{
	echo '<script>alert("Email already used")</script>';
	die();
	}
	}

}		
}
?><form>
<p class="txts">Now Login</p>
<a href="Login1.html"><input type="button" id="log" value="LOGIN NOW"></a></form>
</form></p>
</div>
</html>