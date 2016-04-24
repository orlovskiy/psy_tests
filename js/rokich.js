window.onload = function () {
	$('.gotit').on('click',function(){
		$('.description').fadeOut('fast');
		$('.main_container h1').fadeOut('fast');
		setTimeout(function(){$('.done_button').fadeIn('fast').animate({opacity:1},400,function(){});},500);
		setTimeout(function(){$('.perks1_container').fadeIn('fast').animate({opacity:1},10,function(){});},500);
		setTimeout(function(){$('.perks_a').slideDown('slow');},500);	
		setTimeout(function(){$('.perks_a').animate({opacity:1},600,function(){});},500);
		setTimeout(function(){$('.cap').css('display','inline-block !important');},700);
	});
	$('.perks_a').sortable();
	$('.perk').on('mouseover',function(){
		if($(this).attr('title')!==''){
			$(this).css('cursor','help');
			$(this).on('mousedown',function(){
			$(this).css('cursor','-webkit-grabbing');
			});
			$(this).on('mouseup',function(){
				$(this).css('cursor','help');
			});
		}else{
			$('.perk').css('cursor','-webkit-grab');
			$(this).on('mousedown',function(){
				$(this).css('cursor','-webkit-grabbing');
			});
			$(this).on('mouseup',function(){
				$(this).css('cursor','-webkit-grab');
			});
		}
		}
	);



	$('.done_button').on('click',function(){
		$('.perks_a').slideUp('slow');
		setTimeout(function(){$('.perks_b').slideDown('slow');},700);	
		setTimeout(function(){$('.perks_b').animate({opacity:1},800,function(){});},150);
		$('.done_button').css('display','none');
		$('#test_done').css('display','block');
		setTimeout(function(){$('#test_done').animate({color:'transparent'},300,function(){})},200);
		setTimeout(function(){$('#test_done').attr('value','Узнать результат');},600);
		setTimeout(function(){$('#test_done').animate({color:'white'},300,function(){})},1000);
		

	});
	$('.perks_b').sortable();
	$('.perk').on('mouseover',function(){
		if($(this).attr('title')!==''){
			$(this).css('cursor','help');
			$(this).on('mousedown',function(){
			$(this).css('cursor','-webkit-grabbing');
			});
			$(this).on('mouseup',function(){
				$(this).css('cursor','help');
			});
		}else{
			$('.perk').css('cursor','-webkit-grab');
			$(this).on('mousedown',function(){
				$(this).css('cursor','-webkit-grabbing');
			});
			$(this).on('mouseup',function(){
				$(this).css('cursor','-webkit-grab');
			});
		}
		}
	);

		var results_a={};
		var results_b={};
	$('#test_done').on('click',function(){
		$('.perks_a').sortable('disable');
		$('.perks_b').sortable('disable');
		$('#test_done').animate({opacity:0},400,function(){});
		$('.tables').fadeIn('fast');
		$('#answers1').css('left','-80%');
		setTimeout(function(){$('#answers1').css('display','inline-block').animate({opacity:1},100,function(){});},400);
		$('#answers1').append($('.perks_a'));
		$('.perks_a').slideDown('fast');
		setTimeout(function(){$('#answers1').css('left','0')},400);
		for (var b=1; b<=$('.perks_a .perk').length; b++){
			results_a[b]=$('.perks_a .perk:nth-child('+(b)+')').attr('id');
			var target_cell = $('.perks_a div#'+results_a[b]+' p').html();
			$('td:contains('+target_cell+')').next().text(''+b+'');
			

			results_b[b]=$('.perks_b .perk:nth-child('+(b)+')').attr('id');
			target_cell = $('.perks_b div#'+results_b[b]+' p').html();
			$('td:contains('+target_cell+')').next().text(''+b+'');
		};
		results_a_string=JSON.stringify(results_a);
		results_b_string=JSON.stringify(results_b);
		var anon_id= $('.anon_id').val()
		var test_id='rokich';


		var data_to_send=results_a_string+results_b_string;
		$.post('../transmitter.php', {'data_to_send':data_to_send, 'anon_id':anon_id, 'test_id':test_id});
	});
};