<?php
//PHP CODE STARTS HERE
 
if(isset($_GET['submit'])){
 
// Change the fields below as per the requirements
$db_host="localhost";
$db_username="root";
$db_password="subash";
$db_name="classproj";
$db_tb_name="ourproducts";
$db_tb_atr_name="description";
 
//Now we are going to write a script that will do search task
// leave the below fields as it is except while loop, which will display results on screen
 
mysql_connect("$db_host","$db_username","$db_password");
mysql_select_db("$db_name");
 
$query=mysql_real_escape_string($_GET['query']);
 
$query_for_result=mysql_query("SELECT * FROM $db_tb_name WHERE 
 
$db_tb_atr_name like '%".$query."%'");
echo "<h2>Search Results</h2><ol>";
while($data_fetch=mysql_fetch_array($query_for_result))
{
	
    echo "<li>";
    echo substr($data_fetch[$db_tb_atr_name], 0,160);
    echo "</li><hr/>";
	
}
echo "</ol>";
 
mysql_close();
}
?>
<style type="text/css">
div.menu
{ background:#0066CC;
  margin-left:0px;
  margin-right:auto;
  width:100%;
  text-align:center;
  height:500px;
  
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
<title> Search our Product</title>

<div class ="base">

<h>
<img src="images.jpg" width="100" height="60" longdesc="file:///C|/xampp/htdocs/databaseproj/images.jpg">&nbsp;</h>
<h>&nbsp;</h>
<h>&nbsp;</h>
<h>&nbsp;</h>
<h>&nbsp;</h>
</div>
<div class = "menu">
<form name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <label for="searchresults"></label>
    <textarea name="searchresults" id="searchresults" cols="85" rows="15"></textarea>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</div>