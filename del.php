<html>
<style>
body{
	background-image: url("https://franchiseindia.s3.ap-south-1.amazonaws.com/uploads/content/edu/art/5c2f4f208166b.jpeg");
	background-size: cover;
  	background-position: center; 
}
.stable {
    margin: 50px 0;
    min-width: 400px;
    border=3;
           padding: 30px; 
   box-shadow: 12 12 20px rgba(0, 0, 0, 0.15);
}
.thead {
    background-color: #009879;
    color: #ffffff;
    text-align: center;

}
.log{  
    width: 150px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
 } 

.str{
    text-align: center;	   
 background-color: #f3f9f3;
    border-bottom: 2px solid #009879;
}
.login{  
        width: 900px;  
        overflow: hidden;  
        margin: auto;  
        padding: 60px;  
        background: rgb(229,228,145);
	  background: linear-gradient(#e66465, #9198e5);   
        border-radius: 15px ;  
 } 
 table, th, td {
  
border: 1px solid black;
  border-collapse: collapse;

}

th, td {

  padding: 15px;

}

th {
  text-align: left;
}
.txts{
font-family: 'fantasy';
font-size:24px;
color:white;
}
.texts{
font-family: 'fantasy';
font-size:67px;
color:white;
}
</style>
<body background="bookswall.jpg" class="txts">
<center>
<div class="login">
<form action="mybooks.php">

<p class="txts"> STATUS CHANGED</p>
<input type="submit" value="BOOK LIST" class="log"><br>
</form>

<?php 
session_start();
$active=$_SESSION['userem'];
$ch=$_POST['bkcode'];
$status=$_POST['sts'];
$username = "root"; 
$password = ""; 
$database = "loginids"; 
$conn= new mysqli("localhost", $username, $password, $database); 

$cs=mysqli_query($conn,"UPDATE book set Status='$status' WHERE Serialno='$ch'");

?>