<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="../style/rokich.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/range_test.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="../js/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="../style/range_test.css">
</head>
<body>
<div class="id" style="display: none"><input type="text" class="anon_id"  value="<?=$_GET['id']?>"></div>

<div class="test-container">
	<div class="question" id="question1">
		<p>
		  <label for="amount">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusantium officiis aperiam laborum reiciendis expedita quae deserunt ducimus nulla commodi ipsam eos itaque consequuntur, corporis, sed! Aliquid laudantium reiciendis laboriosam!</label>
		</p>
	 
		<div class="slider-container">
			<div id="slider"></div>
			<input type="text" id="amount" readonly style="border:0;">
		</div>
	</div>

	<div class="question" id="question2">
		<p>
		  <label for="amount">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusantium officiis aperiam laborum reiciendis expedita quae deserunt ducimus nulla commodi ipsam eos itaque consequuntur, corporis, sed! Aliquid laudantium reiciendis laboriosam!</label>
		</p>
	 
		<div class="slider-container">
			<div id="slider"></div>
			<input type="text" id="amount" readonly style="border:0;">
		</div>
	</div>

	<div class="question" id="question3">
		<p>
		  <label for="amount">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusantium officiis aperiam laborum reiciendis expedita quae deserunt ducimus nulla commodi ipsam eos itaque consequuntur, corporis, sed! Aliquid laudantium reiciendis laboriosam!</label>
		</p>
	 
		<div class="slider-container">
			<div id="slider"></div>
			<input type="text" id="amount" readonly style="border:0;">
		</div>
	</div>
	<div class="result_button">
		<input class="show_result" type="button" value="Показать результат">
	</div>
</div>
<div id="results"></div>
</body>
</html>