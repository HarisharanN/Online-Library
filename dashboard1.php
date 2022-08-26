<html>
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
.txts{
font-family: 'fantasy';
font-size:24px;
color:teal;
}

.s{  
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
font-family: 'fantasy';
font-size:14px;
color:teal;

}
.txts{
color:white;
font-family: 'fantasy';
font-size:67px;
}
.ts{
font-family: 'fantasy';
font-size:30px;
color:white;
}
*{
  
margin: 0;

padding: 0;
box-sizing: border-box;

font-family: 'Poppins',sans-serif;

}

::selection{
  
color: #fff;

background: blue;

}

nav
{
position: fixed;
width: 100%;
padding: 10px 0;
align-items: center;
z-index: 12;
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
  transition: all 0.3s ease;
}

.menu ul li a:hover{
  background: rgba(0, 0, 0, 0.4); 
  color: white;
}
.stable {
    margin: 50px 0;
    min-width: 400px;
    border=3;
    padding:30px; 
   box-shadow: 12 12 20px rgba(0, 0, 0, 0.15);
}
.thead {
    background-color: ;
    color: #ffffff;
    text-align: center;
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

</style> 
<body background-image: url("https://franchiseindia.s3.ap-south-1.amazonaws.com/uploads/content/edu/art/5c2f4f208166b.jpeg");>
<center>
<div class="login">
 
<nav>
<div class="menu">
<ul>
<li><a href="lend1.php">Lend Books</a></li>
<li><a href="display.php">Borrow Books</a></li>
<li><a href="mybooks.php">My Books</a></li>
<li><a href="homepage.php">Log Out</a></li> 
 </ul>
    </div>
  </nav>
<br>

<br>
<br>
<br><br>
<hr>
<br>

<p class="txts">
READ IT ALL
</p>
<hr>
<br>
<p class="ts">
<u>BOOK LIST</u> </h1>

<p class="ts">
<p class="txts">
<table style="width:75">
<?php 
session_start();
$active=$_SESSION['userem'];
$username = "root"; 
$password = ""; 
$database = "loginids"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM book where Owneremail!='$active' && Status='Available'";

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
        $field10name=$row['Status'];
 
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
                  <td>'.$field10name.'</td> 
              </tr>';
    }
    $result->free();

}
echo  '<form method="POST" action="sortbx.php">
<p class="ts"> Enter Genre : <input type="text"  name="genre"></input></p>
<input type="submit" value="SEARCH GENRE" class="log">
</form>'
?>
</table>
</p>
</div>
</body>
</html>