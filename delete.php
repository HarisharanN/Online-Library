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
    background-color: ;
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

nav .menu{
max-width: 1250px;
margin: auto;
display: flex;
align-items: center;
justify-content: space-between;
padding: 0 20px;
}

.menu ul{
  display: inline-flex;
}

.menu ul li{
  list-style: none;
  margin-left: 20px;
}

.menu ul li:first-child{
  margin-left: 80px;
}

.menu ul li a{
color: white;
  font-size: 30px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 10px;
  font-family: 'Arial'; 
  transition: all 0.3s ease;
}

.menu ul li a:hover{
  background: rgba(0, 0, 0, 0.4);
  color: white;
}
.str{
    text-align: center;	   
 background-color: #f3f9f3;
    border-bottom: 2px solid #009879;
color = teal;
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
 table, th, td {
  
border: 2px solid white;
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
<body background="bookswall.jpg">
<center>
<div class="login">
<nav>
 <div class="menu">
<ul>
<li><a href="lend1.php">Lend Books</a></li>       
<li><a href="display.php">Borrow Books</a></li>     
<li><a href="mybooks.php">My Books</a></li>
<li><a href="Homepage.html">Log Out</a></li>    
 </ul>
    </div>
  </nav>
<hr>

<h1 class="texts">
<u>DELETE A BOOK </u></h1>
<form method="POST">
</form>

<?php 
session_start();
$active=$_SESSION['userem'];
$username = "root"; 
$password = ""; 
$database = "loginids"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM book where Owneremail='$active'";
echo '<table class="stable"> 
      <tr class="thead"> 
          <td>Book Code </td> 
          <td>Book Name</td> 
          <td>Book Author</td>
          <td>Genre</td> 
          <td>Language</td>  
          <td>Year of Publish </td> 
          <td>Owner</td>
          <td>Area</td> 
          <td>Rent</td> 
         <td>Status</td>

  </tr>';
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name=$row['Serialno'];
        $field2name=$row['Bookname'];
        $field3name=$row['Bookauthor'];
        $field4name=$row['Genre'];
        $field5name=$row['Language'];
        $field6name=$row['Year'];
        $field7name=$row['Owner'];
        $field8name=$row['Area'];
        $field9name=$row['Rent'];
        $fieldname=$row['Status'];

 
        echo '<tr class="str"> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td>
                  <td>'.$fieldname.'</td>

              </tr>';
    }
    $result->free();
}
echo '<form method="POST" action="deleting.php">
<p class="txts"> Enter BookCode : <input type="number"  name="bkcode"></input></p>
<input type="submit" value="DELETE" class="log"><br>
</form>'
?>