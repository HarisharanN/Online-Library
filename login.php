<?php 
$email=$_POST['email'];
	$pwd=$_POST['pswd'];
	
	
	if (!empty($email) && !empty($pwd))
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
 $hashed= hash('sha512', $pwd);
$chk=mysqli_query($conn,"SELECT * FROM login where email='$email' && pwd='$hashed'");
if($row=mysqli_fetch_array($chk))
{
header ('location:group1.php');
}
else
{
echo "wrong input";
}
}
} 

?>