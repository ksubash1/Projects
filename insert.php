<?php
$con=mysqli_connect("localhost","root","subash","classproj");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO customers (Id, Name, password, address,city, state, zip, phone, birth, email)
VALUES
('$_POST[id]','$_POST[name]','$_POST[password]','$_POST[address]','$_POST[city]','$_POST[state]',
'$_POST[zip]','$_POST[phone]','$_POST[birth]','$_POST[email]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  header('Location: welcome1.php');
echo "Welcome! our new Member";


mysqli_close($con);
?>