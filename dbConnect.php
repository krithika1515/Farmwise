<?php
$conn= mysqli_connect('localhost','root','','farm') or die("Connection failed:" .mysqli_connect_error());
return $conn;
?>
