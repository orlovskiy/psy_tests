window.onload = function () {

	


		$('.perks_a').css('opacity','1').css('display','inline-block');
		$('.perks_b').css('opacity','1').css('display','inline-block');
		$('.tables').fadeIn('fast');
		$('#answers1').append($('.perks_a'));
		$('.perks1_container').animate({opacity:'1'},600,function(){});
		$('#answers1').css('display','inline-block').animate({opacity:1},600,function(){});
		


		for(var i = 1; i<=18; i ++){
			var id = perks1_data[i];
			var item = perks1_items[''+id+''];
			$('div.perks_a .perk').eq(i-1).find('p').text(item);
			$('div.perks_a .perk').eq(i-1).attr('id',id);
			var target_cell = $('.perks_a div#'+id+' p').html();
			$('td:contains('+target_cell+')').next().text(''+i+'');


			var id = perks2_data[i];
			item = perks2_items[''+id+''];
			$('div.perks_b .perk').eq(i-1).find('p').text(item);
			$('div.perks_b .perk').eq(i-1).attr('id',id);
			target_cell = $('.perks_b div#'+id+' p').html();
			$('td:contains('+target_cell+')').next().text(''+i+'');
		}


	/*	var results_a = {};
		var results_b = {};
		for (var b=1; b<=$('.perks_a .perk').length; b++){
			results_a[b]=$('.perks_a .perk:nth-child('+(b)+')').attr('id');
			var target_cell = $('.perks_a div#'+results_a[b]+' p').html();
			$('td:contains('+target_cell+')').next().text(''+b+'');
			

			results_b[b]=$('.perks_b .perk:nth-child('+(b)+')').attr('id');
			target_cell = $('.perks_b div#'+results_b[b]+' p').html();
			$('td:contains('+target_cell+')').next().text(''+b+'');
		};*/
	};