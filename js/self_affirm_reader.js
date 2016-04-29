
		var main_sum = 0;			
		var disc1 = 0;
		var disc2 = 0;
		var disc3 = 0;
		for (key in answers){	
			$('#'+answers[key]).css('background-color','red')
			
			main_sum += parseInt(answers[key].substr(-1))
			if ((answers[key]).substr(-1) == '1'){
				disc1 += 1 
			}
			else if ((answers[key]).substr(-1) == '2'){
				disc1 += 2
			}
			else if((answers[key]).substr(-1) == '3'){
				disc2 += 3
			}
			else if((answers[key]).substr(-1) == '4'){
				disc2 += 4
				disc3 += 5
			}
			else if((answers[key]).substr(-1) == '5'){
				disc3 += 5
			}
		
		}

			$('.disc1').text(disc1);
			$('.disc2').text(disc2);
			$('.disc3').text(disc3);