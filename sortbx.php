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
color:;
}
.texts{
font-family: 'fantasy';
font-size:67px;
color:white;
}
</style>
<center>
<div class="login">
<h1 class="texts">
<u>BOOK LIST </u></h1>
<?php 
session_start();
$_SESSION['genre'] = $_POST['genre'];
$genre=$_POST['genre'];
if (!empty($genre))
{
$username = "root"; 
$password = ""; 
$database = "loginids"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 

$query = "SELECT * FROM book where Genre='$genre'";
echo '<table class="stable"> 
      <tr class="thead"> 
          <td>Book Code</td> 
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
 $field1=$row['Serialno'];
        $feild2=$row['Bookname'];
        $fild3=$row['Bookauthor'];
        $fild4=$row['Genre'];
        $fild5=$row['Language'];
        $field6=$row['Year'];
        $field7=$row['Owner'];
        $field8=$row['Area'];
        $field9=$row['Rent'];
        $field10=$row['Status'];

        echo '<tr class="str"> 
                  <td>'.$field1.'</td> 
                  <td>'.$feild2.'</td> 
                  <td>'.$fild3.'</td>
                  <td>'.$fild4.'</td> 
                  <td>'.$fild5.'</td> 
                  <td>'.$field6.'</td>
                  <td>'.$field7.'</td> 
                  <td>'.$field8.'</td> 
                  <td>'.$field9.'</td>
                  <td>'.$field10.'</td> 
              </tr>';
 }
    $result->free();
}
echo  '<form method="POST" action="borrow.php">
<input type="submit" class="log" value="REQUEST">
</form>'.'<br>';
echo '<br>';

echo  '<form method="POST" action="dashboard1.php">
<input type="submit" class="log" value="BACK TO BOOK LIST">
</form>';
} 
else
{
echo "Enter a BOOK CODE";
echo  '<br><form method="POST" action="display.php">
<input type="submit" value="BOOK LIST" class="log">
</form>';
}
?>
</div>
</html>