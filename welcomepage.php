<?php

// Grab User submitted information
$username = $_POST["id"];
$password = $_POST["password"];

// Connect to the database
$con = mysql_connect("localhost","root","subash");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("classproj",$con);

$result = mysql_query("SELECT id, password FROM customers WHERE id = '$username'" );

$row = mysql_fetch_array($result) ;

if($row["id"]==$username && $row["password"]==$password){
header('Location: welcome1.php');}

    //echo"You are a validated user.";}
else

header('location: welcomepage.php')
   
?>
<title>Untitled Document</title>
<style type="text/css">
div.menu
{ background:#0066CC;
  margin-left:250px;
  margin-right:auto;
  width:75%;
  text-align:center;
  height:150px;

}
div.base{background:#F90;
		 height:80px;

		 }
table.dss{background:#699;
		  margin-left:auto;
   		  margin-right:auto;
		  width:600;
		  text-align:left;}
div.left {background:#0066CC;
			margin-left: auto;
          	margin-right: auto;
		  	width:90%;
		  	text-align:left;
  			height:400px;


		}
		th, td {
		border: 1px solid #c6c9cc;
		}
</style>

</head>
<div class= "base">
<body>

<input name="" type="image" src="images.jpg"alt="" width="100" height="60" /></div>
</p>
<div class ="left">
<table width="200" border="1">
  <tr>
    <td>Login</td>
  </tr>
  <tr>
    <td>OurShop</td>
  </tr>
  <tr>
    <td>Search Product</td>
  </tr>
  <tr>
    <td>Ordering</td>
  </tr>
  <tr>
    <td>Contact</td>
  </tr>
  <tr>
    <td>Home:</td>
  </tr>
</table>
<p>&nbsp;</p><div class= "menu">
<form method = "post" action = "login.php">
<table width="200" border="1">
  <tr>
    <td>UserName:</td>
  </tr>
  <tr>
    <td><input name="id" type="text" /></td>
  </tr>
  <tr>
    <td>Password:</td>
  </tr>
  <tr>
    <td><input name="password" type="text" /></td>
  </tr>
  <tr>
    <td><input name="submit" type="submit" /></td>
  </tr>
</table>
</form>
&nbsp;</p>
</div>
</div>
<div class = "base"></div>
</body>
</html>
