<html>
<style>
body{
	background-image: url("https://franchiseindia.s3.ap-south-1.amazonaws.com/uploads/content/edu/art/5c2f4f208166b.jpeg");
	background-size: cover;
  	background-position: center; 
}

.login{  
        width: 1000px;  
        overflow: hidden;  
        margin: auto;  
        padding: 70px;  
         background: rgb(229,228,145);
	  background: linear-gradient(#e66465, #9198e5);  
        border-radius: 15px ;  
 }
.txts{
font-family: 'Arial';
font-size:20px;
color:white;
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
<body>
<center>
<div class="login">
<p class="txts">
<?php error_reporting (E_ALL^E_NOTICE);?>
<?php
session_start();
$bkcode=$_SESSION['bookcode'];
$reqem=$_SESSION['userem'];
$book="";
$oem="";
$own="";
$reqt="";
if (!empty($bkcode))
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
$getb=mysqli_query($conn,"SELECT * FROM book where Serialno='$bkcode'");
	if($row=mysqli_fetch_array($getb))
	{
	$book=$row['Bookname'];
	$oem=$row['Owneremail'];	
    $own=$row['Owner'];
	}
$req=mysqli_query($conn,"SELECT * FROM loginemail where EmailId='$reqem'");
	if($row=mysqli_fetch_array($req))
	{
	$reqt=$row['Username'];
	}
$sql="INSERT INTO request (Bookcode, Bookname,ReqName,ReqEm,OwEmail,Own) values ('$bkcode','$book','$reqt','$reqem','$oem','$own')";
	if($conn->query($sql))
	{
	echo "Request Sent<br>";
	
	echo "Contact the owner:     ";
	$getb=mysqli_query($conn,"SELECT * FROM book where Serialno='$bkcode'");
	if($row=mysqli_fetch_array($getb))
	{
	$o=$row['Owneremail'];	
	echo '<a href="mailto:yashdesai@gmail.com">yashdesai@gmail.com</a>';
	}
	else { echo "error";}
	echo  '<form method="POST" action="dashboard1.php">
			<input type="submit" class="log" value="Dashboard">
			</form>';
	}
}}
else
{
echo "Enter a Valid bookcode";
}
?>
</p>
</div>
</body>
</html>