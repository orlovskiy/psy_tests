<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/kettel.css">
	<title>Тест Кеттела</title>
</head>
<body>


	<?php 
include '../database.php';


$textid=$_POST['textid'];
$fname=$_POST['fname'];
$surname=$_POST['surname'];
$years=$_POST['years'];
$sex=$_POST['sex'];
$usr="$fname $surname $years $sex";
$testresult='';
$qids=$_POST['qlength'];    //передано через скрытый input
	for ($qid=0; $qid <$qids; $qid++) { 
		$choice=$_POST["answeron$qid"];
		$testresult .= "$choice ";
	}
	$query="UPDATE test SET answer = '$testresult' WHERE textid = '$textid'"
	/*$query2="SELECT id FROM test";*/
mysql_query($query);
/*$id=mysql_query($query2);
$id=mysql_($id);
print_r($id);*/
	?>
	<div class="thanks">
<h1>спасибо за прохождение теста!</h1>
<div><a href="user_reader.php?KxRZ=<?=$textid?>">Результаты</a></div>
<div><a href="../../index.php">На главную</a></div>
</div>
</body>