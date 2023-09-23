<?php

$_sever = "localhost";
$_username = "root";
$_password = "";
$_dbname = "webcoding";

$conn = mysqli_connect($_sever, $_username, $_password, $_dbname);
if(!$conn)
{
  echo "not connected";
}
else
{
  echo "connected";
}

//start

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$password = $_POST['password'];

$sql = "INSERT INTO `test`(`Name`, `email`, `phone`, `city`, `Password`) VALUES ('[$name]','[$email]','[$contact]','[$city]','[$password]')";

$result = mysqli_query($conn, $sql);
if($result)
{
  echo "data submitted";
}

else
{
  echo "query failed";
}
?>