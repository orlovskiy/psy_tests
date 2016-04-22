<?php


include 'database.php';
$usr=$_POST['usr'];
$textid=$_POST['textid'];


$query = "INSERT INTO test (textid, usr) VALUES('$textid','$usr')";

mysql_query($query);


?>