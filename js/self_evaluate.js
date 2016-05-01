$(function(){
	var gradations = [1,2,3,4,5,6,7,8,9]
	var answers = {}
  $(function() {
  	$('.question .slider-container').each(function(){
  		var amount = $(this).find('#amount')
	    $(this).find('#slider').slider({
	      value:0,
	      min: 0,
	      max: 9,
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
  	$('#results').slideDown('fast', function(){});
  });
});