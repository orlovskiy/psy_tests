$(function(){
	var gradations = [1,2,3,4,5,6,7,8,9]
	var answers = {}
  $(function() {
  	$('.question .slider-container').each(function(){
  		var amount = $(this).find('#amount')
	    $(this).find('#slider').slider({
	      value:0,
	      min: 0,
	      max: 8,
	      step: 1,
	      slide: function( event, ui ) {
	      amount.text(gradations[ui.value]);
	      /*answers[question_id] = amount.val()
	      console.log(answers)*/
	      }
	    });
	});
    	$('.question .slider-container').each(function(){
  		var amount = $(this).find('#amount').text(gradations[$( "#slider" ).slider( "value" )] )
  	});
  });
  $('.show_result').on('click', function(){
  	$('.question .slider-container').each(function(){
  		var question_id = $(this).parent().attr('id')
  		var amount = $(this).find('#amount')
  		answers[question_id] = amount.text()
  	});
    var data_to_send = JSON.stringify(answers)
    var anon_id = $('.anon_id').val()
    var test_id = 'self_evaluate'
    $.post('../transmitter.php', {'data_to_send':data_to_send, 'anon_id':anon_id, 'test_id':test_id});
  	/*console.log(answers)*/
    $('.show_result').slideUp('fast', function(){});
  	$('#results').slideDown('fast', function(){
      var motiv_score = 0;
      var cognitive_score = 0;
        for (var i = 1; i<=9; i++){
          motiv_score += Number($('.question:nth-child('+i+') .slider-container span#amount').text())
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
          cognitive_score += Number($('.question:nth-child('+i+') .slider-container span#amount').text())
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
  });
});