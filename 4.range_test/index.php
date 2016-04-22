<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="../style/rokich.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/rokich.js"></script>
	<link rel="stylesheet" href="../style/range_test.css">
</head>
<body>
<script>
	var gradations = {1:'нет',2:'не совсем',3:'нечто среднее',4:'почти',5:'абсолютно точно'}
  $(function() {
  	$('.question .slider-container').each(function(){
  		var amount = $(this).find('#amount')
	    $(this).find('#slider').slider({
	      value:1,
	      min: 1,
	      max: 5,
	      step: 1,
	      slide: function( event, ui ) {
	      amount.val(gradations[ui.value] );
	      }
	    });
	});
    	$('.question .slider-container').each(function(){
  		var amount = $(this).find('#amount').val(gradations[$( "#slider" ).slider( "value" )] )
  	});
  });
  </script>

<div class="id" style="display: none"><input type="text" class="anon_id"  value="<?=$_GET['id']?>"></div>


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
</body>
</html>