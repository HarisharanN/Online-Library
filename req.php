<html>
<style>
body{
	background-image: url("https://franchiseindia.s3.ap-south-1.amazonaws.com/uploads/content/edu/art/5c2f4f208166b.jpeg");
	background-size: cover;
  	background-position: center; 
}

 table, th, td {
  
border: 2px solid white;
  border-collapse: collapse;

}

th, td {

  padding: 15px;

}


.log{  
    width: 150px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
 } 
th {
  text-align: left;
}

.login{  
        width: 950px;  
        overflow: hidden;  
        margin: auto;  
        padding: 60px;  
        background: rgb(229,228,145);
	  background: linear-gradient(#e66465, #9198e5);
        border-radius: 15px ;  
 }  
.texts{
font-family: 'fantasy';
font-size:67px;
color:white;
}
.ts{
font-family: 'fantasy';
font-size:30px;
color:white;
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
.str{
    text-align: center;	   
 background-color: #f3f9f3;
    border-bottom: 2px solid #009879;
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
  background:rgba(0, 0, 0, 0.4);
  color: white;
}
</style>
<center>
<div class="login">
<nav>
 <div class="menu">
<ul>
<li><a href="lend1.php">Lend Books</a></li>       
<li><a href="display.php">Borrow Books</a></li>     
<li><a href="mybooks.php">My Books</a></li>
<li><a href="layout.html">Log Out</a></li>    
 </ul>
    </div>
  </nav>
<hr>

<h1 class="texts">
BOOK  REQUEST  LIST <hr></h1>
<br>
<p class="ts">
Email the requestor with the acceptance using their Email ID</p>

<p class="txts">
<?php 
session_start();
$usere=$_SESSION['userem'];
if (!empty($usere))
{
$username = "root"; 
$password = ""; 
$database = "loginids"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM request where OwEmail='$usere'";
echo '<table class="stable"> 
      <tr class="thead"> 
          <td>Book Code </td> 
          <td>Book Name</td> 
          <td>Requester Name</td>
          <td>Requester Email</td> 
  </tr>';
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name=$row['Bookcode'];
        $field2name=$row['Bookname'];
        $field3name=$row['ReqName'];
        $field4name=$row['ReqEm'];
        echo '<tr class="str"> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>            
              </tr>';
    }
    $result->free();

}
}?>
</p>
</div>
</body>