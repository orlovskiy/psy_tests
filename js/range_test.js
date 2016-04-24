$(function(){
	var gradations = {1:'нет',2:'не совсем',3:'нечто среднее',4:'почти',5:'абсолютно точно'}
	var answers = {}
  $(function() {
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
  });
  $('.show_result').on('click', function(){
  	$('.question .slider-container').each(function(){
  		var question_id = $(this).parent().attr('id')
  		var amount = $(this).find('#amount')
  		answers[question_id] = amount.text()
  	});
    var data_to_send = JSON.stringify(answers)
    var anon_id = $('.anon_id').val()
    var test_id = 'range_test'
    $.post('../transmitter.php', {'data_to_send':data_to_send, 'anon_id':anon_id, 'test_id':test_id});
  	/*console.log(answers)*/
    $('.show_result').slideUp('fast', function(){});
  	$('#results').slideDown('fast', function(){});
  });
});