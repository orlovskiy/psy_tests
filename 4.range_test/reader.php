<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
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



<div class="question" id="question1">
		<p>Я стремлюсь изучить себя.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question2">
		<p>Я оставляю время для развития, как бы ни был занят делами.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question3">
		<p>Возникающие препятствия стимулируют мою активность.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question4">
		<p>Я ищу обратную связь, так как это помогает мне узнать и оценить себя.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question5">
		<p>Я рефлексирую свою деятельность, выделяя для этого специальное время.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question6">
		<p>Я анализирую свои чувства и опыт.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question7">
		<p>Я много читаю.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question8">
		<p>Я широко дискутирую по интересующим меня вопросам.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question9">
		<p>Я верю в свои возможности.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question10">
		<p>Я стремлюсь быть более открытым человеком.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question11">
		<p>Я осознаю то влияние, которое оказывают на меня окружающие люди.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question12">
		<p>Я управляю своим профессиональным развитием и получаю положительные результаты.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question13">
		<p>Я получаю удовольствие от освоения нового.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question14">
		<p>Возрастающая ответственность не пугает меня.</p>
			<p id="answer"></p>
		</div>
	</div>
	<div class="question" id="question15">
		<p>Я положительно отнес(лась)ся бы к продвижению по службе.</p>
			<p id="answer"></p>
		</div>
	</div>

	<div id="results">
	<p class="your_score">Cумма баллов: </p><p class="description"></p>
<script>
	  var gradations = {1:'нет',2:'не совсем',3:'нечто среднее',4:'почти',5:'абсолютно точно'};
	  var description ={1:"Вы активно реализуете свои потребности в саморазвитии",
	  2:"У Вас отсутствует сложившаяся система саморазвития",
	  3:"Есть основание полагать, что саморазвитие на данный момент остановилось"};
	  var gradations_reversed = {}
      var sum  = 0;
      $('#results').css('display','inline-block')
      for(key in gradations){
	        gradations_reversed[gradations[key]] = key;
        }


		var data=JSON.parse('<?=$data?>');
		for (key in data){
			var id = '#'+key+' #answer';
			target = $(id)
			target.text(data[key]);
			sum += Number(gradations_reversed[data[key]]);
		}

	  
	  $('.your_score').append(sum)
      if(sum>=55) var desc = description[1];
      else if (sum >=36 && sum <=54) desc = description[2];
      else if (sum >= 15 && sum <= 35) desc = description[3];
      
      $('.description').text(desc)

</script>
</body>
</html>