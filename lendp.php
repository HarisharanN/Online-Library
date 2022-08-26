<html>
<head language="javascript">
<style>
body{
	background-image: url("https://franchiseindia.s3.ap-south-1.amazonaws.com/uploads/content/edu/art/5c2f4f208166b.jpeg");
	background-size: cover;
  	background-position: center; 
}
.login{  
        width: 1100px;  
        overflow: hidden;  
        margin: auto;  
        padding: 60px;  
        background: rgb(229,228,145);
	  background: linear-gradient(#e66465, #9198e5);
        border-radius: 15px ;  
 }
.lend{  
        width: 500px;  
        overflow: hidden;  
        margin: auto;  
        padding: 70px;  
        background: #004500;  
        border-radius: 15px ;  
 }  
h2{  
    text-align: center;  
    color: #ffffff;  
    padding: 20px;  
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
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
 } 
</style>
</head>
<body>
<center>
<div class="login">
<p class="txts">
<?php
session_start();
$owner=$_SESSION['userem'];
$bkname=$_POST['bname'];
$auname=$_POST['aname'];
$yearp=$_POST['yop'];
$languages=$_POST['lang'];
$areaa=$_POST['aa'];
$rent=$_POST['rent'];
$genre=$_POST['genre'];
$emowner="";

$number = preg_match('@[0-9]@', $yearp);
$nu = preg_match('@[0-9]@', $auname);
$uppercase = preg_match('@[A-Z]@', $auname);
  $lowercase = preg_match('@[a-z]@', $auname);
  if(!$number)
  {
	  echo '<script>alert("Year should contain only numbers.")</script>';
  }
  else if($nu)
  {
	  echo '<script>alert("Author name should contain only letters.")</script>';
  }
  else{
	  
if (!empty($owner)&&!empty($bkname))
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
	$chk=mysqli_query($conn,"SELECT * FROM loginemail where EmailId='$owner'");
	if($row=mysqli_fetch_array($chk))
	{
	$emowner=$row['Username'];
	}
	$sql="INSERT INTO book (Bookname, Bookauthor,Genre,Year,Language,Owneremail,Owner,Area,Rent,Status,Request) values ('$bkname','$auname','$genre','$yearp','$languages','$owner','$emowner','$areaa','$rent','Available',0)";
	if($conn->query($sql))
	{
	echo "BOOK UPLOADED";

	echo  '<form method="POST" action="dashboard1.php">
	<input type="submit" value="DASHBOARD" id="log">
	</form>';
	}
else
echo $conn->error;
echo "invalid input";
}

}
  }
?>
</p>
</div>