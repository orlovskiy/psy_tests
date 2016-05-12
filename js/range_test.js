

var description ={1:"Вы активно реализуете свои потребности в саморазвитии",
2:"У Вас отсутствует сложившаяся система саморазвития",
3:"Есть основание полагать, что саморазвитие на данный момент остановилось"};

$(function(){
  function getSet(min,max){
    res = []
    for (i = min; i<=max; i++){
     res.push(i);
    }
    return res;
  }
	var gradations = {1:'нет',2:'не совсем',3:'нечто среднее',4:'почти',5:'абсолютно точно'};
  var gradations_reversed = {}
  var sum  = 0;
  for(key in gradations){
      gradations_reversed[gradations[key]] = key;
    }
	var answers = {}
  	$('.question .slider-container').each(function(){
  		var amount = $(this).find('#amount')
  		var question_id = $(this).parent().attr('id')
	    $(this).find('#slider').slider({
	      value:1,
	      min: 1,
	      max: 5,
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
  $('.show_result').on('click', function(){
  	$('.question .slider-container').each(function(){
  		var question_id = $(this).parent().attr('id')
  		var amount = $(this).find('#amount')
  		answers[question_id] = amount.text();
      sum += Number(gradations_reversed[amount.text()]);

  	});
    var data_to_send = JSON.stringify(answers)
    var anon_id = $('.anon_id').val()
    var test_id = 'range_test'
    $.post('../transmitter.php', {'data_to_send':data_to_send, 'anon_id':anon_id, 'test_id':test_id});
  	/*console.log(answers)*/
    $('.show_result').fadeOut('fast', function(){});
      
      $('.your_score').append(sum)
      if(sum>=55) desc = description[1];
      else if (sum >=36 && sum <=54) desc = description[2];
      else if (sum >= 15 && sum <= 35) desc = description[3];
      
      $('.description').text(desc)
  	$('#results').fadeIn('fast', function(){});
  });
});

