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
	      amount.val(gradations[ui.value]);
	      /*answers[question_id] = amount.val()
	      console.log(answers)*/
	      }
	    });
	});
    	$('.question .slider-container').each(function(){
  		var amount = $(this).find('#amount').val(gradations[$( "#slider" ).slider( "value" )] )
  	});
  });
  $('.show_result').on('click', function(){
  	$('.question .slider-container').each(function(){
  		var question_id = $(this).parent().attr('id')
  		var amount = $(this).find('#amount')
<<<<<<< HEAD
  		answers[question_id] = amount.val()\
=======
  		answers[question_id] = amount.val()
>>>>>>> master
  	});
  	/*console.log(answers)*/
  	$('#results').slideDown('fast', function(){})
  })
})