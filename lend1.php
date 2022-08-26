<html>
<head>
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
        padding: 40px;  
        background: rgb(229,228,145);
	  background: linear-gradient(#e66465, #9198e5);
        border-radius: 15px ;  
 }
.lend{  
        width: 750px;  
        overflow: hidden;  
        margin: auto;  
        padding: 40px;  
        background: ;  
        border-radius: 30px ;  
		text-align:center;
		
 }  
h2{
font-family: 'fantasy';  
    text-align: center;  
    color: #ffffff;  
    padding: 40px;  
}  
.txts{
font-family: 'fantasy';
font-size:30px;
color:white;
text-align:right;
}
#log{  
    text-align:center;
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
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
.ts{
font-family: 'fantasy';
font-size:30px;
color:white;
}
</style>
</head>
<body>
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
<p>
</p>
<br><br>
<hr>
<h2 class="ts" align="center"> BOOKS TO LEND<br>
<br>ENTER BOOK DETAILS</h2>
<div class="lend">
<form method="POST" action="lendp.php">
<table text-align="center">
<tr><td><p class="txts"> BOOK NAME:</td><td><input type="text" name="bname" required></p></td></tr>
<tr><td><p class="txts"> BOOK AUTHOR:</td><td>  <input type="text" name="aname" required></p></td></tr>
<tr><td><p class="txts"> GENRE:</td><td> <select name="genre"><option>Other</option><option>Business</option><option>Medical</option><option>Engineering</option><option>Technology</option><option>Fiction</option><option>Non-Fiction</option><option>Historical</option><option>Mystery and Thriller</option><option>Poetry</option><option>Sci-Fi</option></select></p></td></tr> 
<tr><td><p class="txts"> YEAR OF PUBLISH:</td><td>  <input type="number" name="yop" required></p></td></tr>
<tr><td><p class="txts"> LANGUAGE:</td><td>  <input type="text" name="lang" required></p></td></tr>
<tr><td><p class="txts"> OWNER'S ADDRESS AREA: </td><td> <select name="aa"><option>SELECT AREA</option><option>Kothrud</option><option>Kondhwa</option><option>Camp</option><option>Bibewadi</option><option>Koregaon Park</option></select></p></td></tr>
<tr><td><p class="txts"> RENT:</td><td>  <select name="rent"><option>SELECT</option><option>Free</option><option>Paid</option></select></p></td></tr>
</table>
<table text-align="center">
<tr><td><input type="submit"  id="log" value="CONFIRM AND LEND"></td></tr></table>
</form>
</div>
</body>
</html>