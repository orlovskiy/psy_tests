<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="../style/rokich.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/range_test_reader.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="../js/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="../style/range_test.css">

</head>
<body>

<?php include '../database.php';

$id=$_GET['id'];
$query="SELECT * FROM test WHERE textid = '$id' OR id='$id'";
$result=mysql_query($query);
$r=mysql_fetch_assoc($result);
$test_data=$r['range_test'];
$usr=$r['id']." ".$r['textid']." ".$r['usr'];
$data=$r['range_test'];
?>



<div id="question1">
	<div class="answer"></div>
</div>
<div id="question2">
	<div class="answer"></div>
</div>
<div id="question3">
	<div class="answer"></div>
</div>


<script>
		var data=JSON.parse('<?=$data?>');
		for (key in data){
			var id = '#'+key+' .answer';
			target = $(id)
			target.text(data[key]);
		}
</script>
</body>
</html>