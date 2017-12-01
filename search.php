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

$query_for_result=mysql_query("SELECT description,price FROM $db_tb_name WHERE

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
