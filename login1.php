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

$result = mysql_query("SELECT id, password FROM customers WHERE id = $username");

$row = mysql_fetch_array($result);

if($row["id"]==$username && $row["password"]==$password){
header('Location: welcome1.php');
    }
else{
header('Location: welcomepage.php');
    }
?>