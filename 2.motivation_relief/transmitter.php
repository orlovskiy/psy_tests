<?php
include '../database.php';
$textid=$_POST['anon_id'];
$data=$_POST['data_to_send'];

$query =	"UPDATE test SET relief_data = '$data' WHERE textid = '$textid'";

mysql_query($query);
?>