<?php

$conn = mysql_connect('localhost', 'xingluwang', '');
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$hashed_password = md5($password);

$query = "INSERT INTO `bio_users` (`id`, `username`, `email`, `password`)
 VALUES (NULL, '$username', '$email', '$hashed_password')";

echo $query;

mysql_select_db('test', $conn);

$retval = mysql_query($query);

echo $retval;

if(!$retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
header("Location: login.php");

?>