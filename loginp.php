<html>
<head>
<title>Read It All</title>
<style>
body{
	background-image: url("https://franchiseindia.s3.ap-south-1.amazonaws.com/uploads/content/edu/art/5c2f4f208166b.jpeg");
	background-size: cover;
  	background-position: center; 
}

.login{  
        width: 700px;  
        overflow: hidden;  
        margin: auto;  
        padding: 60px;  
        background: rgb(229,228,145);
	  background: linear-gradient(#e66465, #9198e5);   
        border-radius: 15px ;  
 }  

.log{  
    width: 150px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
 } 
</style>
</head>
<Body background="bookswall.jpg">
<center>
<div class="login">
<?php
session_start();
$_SESSION['userem'] = $_POST['useremail'];
$useremails=$_POST['useremail'];
$passwords=$_POST['userpassword'];
if (!empty($useremails) && !empty($passwords))
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
$hashed= hash('sha512', $passwords);
$chk=mysqli_query($conn,"SELECT * FROM loginemail where EmailId='$useremails' && Password='$hashed'");
if($row=mysqli_fetch_array($chk))
{
header('location:dashboard1.php');
}
else
{
echo '<script>alert("Wrong Email Id or Password. Try Again.")</script>';
echo  '<form action="layout.html">
<input type="submit" value="TRY AGAIN" class="log">
</form>';
}
}
}
?>
</div>
 </html>


