
//$con=mysqli_connect("localhost","root","subash","classproj");
// Check connection
//if (mysqli_connect_errno())
 // {
 // echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //}
  //mysql_select_db("classproj",$con);
  

//$sql="select * from search where description like 'bluejensadults%'

//$result = mysql_fetch_array("SELECT * FROM search WHERE description like '$bluejeans%' ");



 //?>
 //*/
 
 //<?php
//mysql_connect("localhost", "root", "subash");
//mysql_select_db("classproj");
//$result = mysql_query("select * from mytable where description like 'bluejeans%'");
//while ($row = mysql_fetch_object($result)) {
  //  echo $row->product.id;
 
//}
//mysql_free_result($result);
//?>
<?php
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
 
$query=mysql_real_escape_string($_GET['description']);
 
$query_for_result=mysql_query("SELECT * FROM $db_tb_name WHERE 
 
$db_tb_atr_name like '%".$query."%'");
echo "<h2>Search Results</h2><ol>";
while($data_fetch=mysql_fetch_array($query_for_result))
{
header('Location: search.php');
    echo "<li>";
    echo substr($data_fetch[$db_tb_atr_name], 0,160);
    echo "</li><hr/>";
}
echo "</ol>";
 
mysql_close();
?>