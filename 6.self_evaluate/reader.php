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
<?php
include '../database.php';
$id=$_GET['id'];
$query="SELECT * FROM test WHERE textid = '$id' OR id='$id'";
$result=mysql_query($query);
$r=mysql_fetch_assoc($result);
$usr=$r['id']." ".$r['textid']." ".$r['usr'];
$data=$r['self_evaluate'];
?>
<div class="usr"><?=$usr?></div>
<div class="test_container">
		<div class="question" id="question1">
			<p>1. Осознание личной значимости непрерывного образования в педагогической деятельности</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question2">
			<p>2. Наличие познавательных интересов в области педагогики и психологии</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question3">
			<p>3. Чувство долга и ответственности</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question4">
			<p>4. Любознательность</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question5">
			<p>5. Стремление получить высокую оценку своей самообразовательной деятельности</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question6">
			<p>6. Потребность в психолого-педагогическом самообразовании</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question7">
			<p>7. Потребность в самопознании</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question8">
			<p>8. Ранговое место самообразования среди других видов деятельности</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question9">
			<p>9. Уверенность в своих силах</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question10">
			<p>10. Уровень общеобразовательных знаний</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question11">
			<p>11. Уровень общеобразовательных умений</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question12">
			<p>12. Уровень педагогических знаний и умений</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question13">
			<p>13. Уровень психологических знаний и умений</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question14">
			<p>14. Уровень методических знаний и умений</p>
			<p class="answer"></p>
		</div>
		<div class="question" id="question15">
			<p>15. Уровень специальных знаний</p>
			<p class="answer"></p>
		</div>
	</div>
	<div id="results">
	<div class="motivation">Уровень сформированности мотивационной готовности к педагогическому саморазвитию: </div>
	<div class="cognitive">Уровень сформированности когнитивной готовности к педагогическому саморазвитию: </div>
</div>
	<script>
	window.onload = function(){

		var answers = JSON.parse('<?=$data?>')

		for (key in answers){
			$('#'+key).find('.answer').text(answers[key])
		}
		$('#results').slideDown('fast', function(){
      var motiv_score = 0;
      var cognitive_score = 0;
        for (var i = 1; i<=9; i++){
          motiv_score += Number($('.question:nth-child('+i+') .answer').text())
        }
        if(motiv_score>=55){
          motiv_score = 'низкий уровень (' + motiv_score + ' баллов)'
        }
        else if(motiv_score>=36){
          motiv_score = 'средний уровень (' + motiv_score + ' баллов)'
        }
        else if(motiv_score<=35){
          motiv_score = 'высокий уровень (' + motiv_score + ' баллов)'
        }
        for (var i = 10; i<=15; i++){
          cognitive_score += Number($('.question:nth-child('+i+') .answer').text())
        }
        if(cognitive_score>=37){
          cognitive_score = 'низкий уровень (' + cognitive_score + ' баллов)'
        }
        else if(cognitive_score>=24){
          cognitive_score = 'средний уровень (' + cognitive_score + ' баллов)'
        }
        else if(cognitive_score<=23){
          cognitive_score = 'высокий уровень (' + cognitive_score + ' баллов)'
        }

        
        $('.motivation').append(motiv_score)
        $('.cognitive').append(cognitive_score)
    });

	}
	</script>
</body>
</html>