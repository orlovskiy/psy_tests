<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="../style/self_affirm.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="../js/jquery-ui.min.js"></script>

</head>
<body>

<?php include '../database.php';

$id=$_GET['id'];
$query="SELECT * FROM test WHERE textid = '$id' OR id='$id'";
$result=mysql_query($query);
$r=mysql_fetch_assoc($result);
$usr=$r['id']." ".$r['textid']." ".$r['usr'];
$data=$r['self_affirm'];
var_dump($data);
?>

<div class="usr"><?=$usr?></div>

<div class="results">
	
</div>


<script type="text/javascript">
		var answers=JSON.parse('<?=$data?>');
		for (key in answers){	
			$('.results').append('<div class="question">'+questions[key]+'<div class="answer">'+answers[key]+'</div></div>')
		}

</script>
</body>
</html>