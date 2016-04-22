<?php
include 'database.php';
$textid=$_POST['anon_id'];
$testid=$_POST['test_id'];
$data=$_POST['data_to_send'];

$query =	"UPDATE test SET $testid = '$data' WHERE textid = '$textid'";

mysql_query($query);
?>