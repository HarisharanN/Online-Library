<html>
<head language="javascript">
<title>Signup</title>
<style>
body  
{   
    font-family: 'Arial';  
}  
.login{  
        width: 600px;  
        overflow: hidden;  
        margin: auto;  
        padding: 60px;  
        background: transparent;  
        border-radius: 15px ;  
 }  
h2{  
    text-align: center;  
    color: #909033;  
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
.txts{
font-family: 'Arial';
font-size:20px;
color:white;
}
.Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 150px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
 }   
.tts{
font-family: 'fantasy';
font-size:60px;
color:white;
}
</style>

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
	header('location:Layout.html');
	}	
	else
	{
	echo '<script>alert("Email already used")</script>';
	die();
	}
	}

}		}
?>