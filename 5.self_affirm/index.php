<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/self_affirm.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="../js/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="../style/self_affirm.css">
</head>
<body>
<?php 
include 'text.php';


$regex = '/(\\d{1,2}[\\D]*)/ui';
$regex2 = '/(.*)\n/ui';
$res = array();
$res2 = array();
preg_match_all($regex, $text, $res);

foreach ($res[0] as $key => $value) {
	preg_match_all($regex2, $value, $res2);
	?>	<form action="" id = "<?=$key+1?>">
		<div class="question" id="question<?=$key+1?>">
		<p><?=$res2[1][0]?></p>
	<?
	for ($i=1; $i < count($res2[0]); $i++) { 
		?>
			<div class="answer">
				<input class = "radios" type="radio" required value ="<?=$i?>"name = "question<?=$key+1?>choice" id="q<?=$key+1?>a<?=$i?>">
				<label for="q<?=$key+1?>a<?=$i?>"><?=$res2[0][$i]?></label>
			</div>
		<?
	}
	?></div></form><?
}
?>
<div class="result_button">
		<input class="show_result_inactive show_result" type="button" value="Показать результат">
	</div>
<div class="results">
	
</div>
<div class="reminder">Пожалуйста, ответьте на все вопросы
<p><a href=""></a></p>
</div>
<div class="id" style="display: none"><input type="text" class="anon_id"  value="<?=$_GET['id']?>"></div>
</body>
</html>