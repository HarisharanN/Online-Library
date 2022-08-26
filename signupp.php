<?php
	$fname=$_POST['txt'];
	$email=$_POST['email'];
	$pwd=$_POST['pswd'];
	
	
	if (!empty($fname) && !empty($email) && !empty($pwd))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password,"split");
	if(mysqli_connect_error())
	{
		die('Connect Error ('. msqli_connect_errno().')'.mysqli_connect_error());
	}
	else
{
	$number = preg_match('@[0-9]@', $pwd);
$uppercase = preg_match('@[A-Z]@', $pwd);
$lowercase = preg_match('@[a-z]@', $pwd);
$specialChars = preg_match('@[^\w]@', $pwd);
$unumber = preg_match('@[0-9]@', $fname);
if($unumber)
{    
echo '<script>alert("Name should contain only letters.")</script>';
 die();
 }
else if(strlen($pwd) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) 
{
  echo '<script>alert("Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.")</script>';
 die();
} 
else 

{
        $hashed= hash('sha512', $pwd);
         
	$sql="INSERT INTO login (name, email, pwd) values ('$fname','$email','$hashed')";

	if($conn->query($sql))
	{
	echo '<script>alert("Account Made")</script>';
	}	
	else
	{
	echo '<script>alert("Error Invalid Input")</script>';
	die();
	}
	}
		}
}
?>