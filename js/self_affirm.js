
	$(function(){
		$('input').on('change',function(){
			
			var n = $('.question .answer input:checked').length == $('.question').length
		if(n){
			$('.show_result_inactive').toggleClass('show_result_inactive')
		}
	});
		var answers = []
		$('.show_result').on('click',function(){
			if ($('.question .answer input:checked').length == $('.question').length){
				$('#results').slideDown('fast',function(){});
				$('.question').each(function(){
					var answer = $(this).find('.answer').find('input:checked').attr('id');
					answers.push(answer);
				});

				var anon_id = $('.anon_id').val()
				var test_id = 'self_affirm'
				var data_to_send = JSON.stringify(answers)
				$.post('../transmitter.php', {'data_to_send':data_to_send, 'anon_id':anon_id, 'test_id':test_id});


				$('.results').slideDown('fast',function(){});
			}else{
				$('.question').css("-webkit-filter",'blur(10px)',500);
				$('.show_result').css("-webkit-filter",'blur(2px)',500);
				var missed = [];
				$('form:not(:valid)').each(function(){missed.push($(this).attr('id'))});
				var links_to_missed = missed.map(function(missed_piece){
					return "<a href = '#"+ missed_piece +"' >"+ missed_piece +"</a>"
				});
				missed = links_to_missed.join(', ')
				$('.reminder p').text('');
				$('.reminder p').append(missed);
				$('.reminder').fadeIn('slow',function(){})
				setTimeout(function(){$('.reminder').fadeOut('slow',function(){})},2000);
				setTimeout(function(){$('.question').css("-webkit-filter",'blur(0px)',500)},2500);
				setTimeout(function(){$('.show_result').css("-webkit-filter",'blur(0px)',500)},2000);
				$('.reminder p').on('click',function(){
					$('.question').css("-webkit-filter",'blur(0px)');
					$('.show_result').css("-webkit-filter",'blur(0px)')
					$('.reminder').fadeOut('fast',function(){})


				})
			}
		});
		
		

	});

