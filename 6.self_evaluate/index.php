<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Саморазвитие</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/self_evaluate.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="../style/self_evaluate.css">
	
</head>
<body>
<div class="id" style="display: none"><input type="text" class="anon_id"  value="<?=$_GET['id']?>"></div>
	<div class="test_container">
		<div class="question" id="question1">
			<p>1. Осознание личной значимости непрерывного образования в педагогической деятельности</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question2">
			<p>2. Наличие познавательных интересов в области педагогики и психологии</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question3">
			<p>3. Чувство долга и ответственности</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question4">
			<p>4. Любознательность</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question5">
			<p>5. Стремление получить высокую оценку своей самообразовательной деятельности</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question6">
			<p>6. Потребность в психолого-педагогическом самообразовании</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question7">
			<p>7. Потребность в самопознании</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question8">
			<p>8. Ранговое место самообразования среди других видов деятельности</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question9">
			<p>9. Уверенность в своих силах</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question10">
			<p>10. Уровень общеобразовательных знаний</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question11">
			<p>11. Уровень общеобразовательных умений</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question12">
			<p>12. Уровень педагогических знаний и умений</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question13">
			<p>13. Уровень психологических знаний и умений</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question14">
			<p>14. Уровень методических знаний и умений</p>
			<div class="slider-container">
				<div id="slider"></div>
				<span id="amount"></span>
			</div>
		</div>
		<div class="question" id="question15">
			<p>15. Уровень специальных знаний</p>
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
	<div class="motivation">Уровень сформированности мотивационной готовности к педагогическому саморазвитию: </div>
	<div class="cognitive">Уровень сформированности когнитивной готовности к педагогическому саморазвитию: </div>
</div>

</body>
</html>