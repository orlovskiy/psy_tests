<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Стратегии самоопределения</title>
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
		<p>Я стремлюсь изучить себя.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question2">
		<p>Я оставляю время для развития, как бы ни был занят делами.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question3">
		<p>Возникающие препятствия стимулируют мою активность.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question4">
		<p>Я ищу обратную связь, так как это помогает мне узнать и оценить себя.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question5">
		<p>Я рефлексирую свою деятельность, выделяя для этого специальное время.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question6">
		<p>Я анализирую свои чувства и опыт.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question7">
		<p>Я много читаю.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question8">
		<p>Я широко дискутирую по интересующим меня вопросам.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question9">
		<p>Я верю в свои возможности.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question10">
		<p>Я стремлюсь быть более открытым человеком.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question11">
		<p>Я осознаю то влияние, которое оказывают на меня окружающие люди.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question12">
		<p>Я управляю своим профессиональным развитием и получаю положительные результаты.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question13">
		<p>Я получаю удовольствие от освоения нового.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question14">
		<p>Возрастающая ответственность не пугает меня.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>
	<div class="question" id="question15">
		<p>Я положительно отнес(лась)ся бы к продвижению по службе.</p>
		<div class="slider-container">
			<div id="slider"></div>
			<span id="amount"></span>
		</div>
	</div>


</div>
<div class="result_button">
		<input class="show_result" type="button" value="Показать результат">
	</div>
<div id="results">
	
</div>
</body>
</html>