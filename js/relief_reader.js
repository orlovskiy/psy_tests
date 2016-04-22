
	



	var c_i_sr= [0,0,0,0,0,0,0];
	var d_i_sr= [0,0,0,0,0,0,0];
	var c_sum = [0,0,0,0,0,0,0];
	var d_sum = [0,0,0,0,0,0,0];
	var delta_j = 0;

window.onload = function () {

			$('.result_wrapper').css("display","inline-block");
			
			
			

			var cell_selector=2;
			var selector=0;
			var table_selector=4;
	for(var key in perks1){
			var value1c=perks1[key];
			var	value1d=getability1[key];
			var delta1=value1c-value1d;
			var height_c=value1c/0.08;
			height_c=height_c+'%';
			var height_d=delta1/0.08;
			height_d=height_d+'%';
			$('.p1_price td:nth-child(' + (cell_selector) + ')').text(value1c);
			c_sum[selector] += value1c; 
			$('.p1_getability td:nth-child(' + (cell_selector) + ')').text(value1d);
			d_sum[selector] += value1d;
			$('.p1_delta td:nth-child(' + (cell_selector) + ')').text(delta1);
			$('#diagram:nth-child(' + (table_selector) + ') .profile_data:nth-child(' + (5) + ')').css("height",height_c);
			$('#diagram:nth-child(' + (table_selector) + ') .profile_data:nth-child(' + (6) + ')').css("height",height_d);
			c_i_sr[selector]=c_i_sr[selector]+value1c;
			d_i_sr[selector]=d_i_sr[selector]+Math.abs(delta1);
			cell_selector++;
			selector++;
			table_selector++;
		};

			var cell_selector=2;
			var selector=0;
			var table_selector=4;
	for(var key in perks2){
			var value2c=perks2[key];
			var value2d=getability2[key];
			var delta2=value2c-value2d;
			var height_c=value2c/0.08;
			height_c=height_c+'%';
			var height_d=delta2/0.08;
			height_d=height_d+'%';
			$('.p2_price td:nth-child(' + (cell_selector) + ')').text(value2c);
			c_sum[selector] += value2c; 
			$('.p2_getability td:nth-child(' + (cell_selector) + ')').text(value2d);
			d_sum[selector] += value2d;
			$('.p2_delta td:nth-child(' + (cell_selector) + ')').text(delta2);
			$('#diagram:nth-child(' + (table_selector) + ') .profile_data:nth-child(' + (7) + ')').css("height",height_c);
			$('#diagram:nth-child(' + (table_selector) + ') .profile_data:nth-child(' + (8) + ')').css("height",height_d);
			c_i_sr[selector]=c_i_sr[selector]+value2c;
			d_i_sr[selector]=d_i_sr[selector]+Math.abs(delta2);
			cell_selector++;
			selector++;
			table_selector++;
		};

			var cell_selector=2;
			var selector=0;
			var table_selector=4;


			var target_cell_c = $('.t4r1').next();
			var target_cell_d = $('.t4r2').next();
			var target_cell_delta_j = $('.t4r3').next();

	for(var key in perks3){
			var value3c=perks3[key];
			var value3d=getability3[key];
			var delta3=value3c-value3d;
			var height_c=value3c/0.08;
			height_c=height_c+'%';
			var height_d=delta3/0.08;
			height_d=height_d+'%';
			$('.p3_price td:nth-child(' + (cell_selector) + ')').text(value3c);
			c_sum[selector] += value3c; 
			$('.p3_getability td:nth-child(' + (cell_selector) + ')').text(value3d);
			d_sum[selector] += value3d;
			$('.p3_delta td:nth-child(' + (cell_selector) + ')').text(delta3);
			$('#diagram:nth-child(' + (table_selector) + ') .profile_data:nth-child(' + (9) + ')').css("height",height_c);
			$('#diagram:nth-child(' + (table_selector) + ') .profile_data:nth-child(' + (10) + ')').css("height",height_d);
			c_i_sr[selector]=c_i_sr[selector]+value3c;
			d_i_sr[selector]=d_i_sr[selector]+Math.abs(delta3);
			cell_selector++;
			selector++;
			table_selector++;
		};
		for (var i = 0; i < 7; i++) {
			c_i_sr[i]=c_i_sr[i]/3;
			d_i_sr[i]=d_i_sr[i]/3;
			$('.c_i_sr td:nth-child(' + (i+2) + ')').text(c_i_sr[i].toFixed(1));
			$('.d_i_sr td:nth-child(' + (i+2) + ')').text(d_i_sr[i].toFixed(1));

			target_cell_c.text(c_sum[i]);
			target_cell_d.text(d_sum[i]);
			target_cell_delta_j.text(c_sum[i] - d_sum[i]);
			target_cell_c = target_cell_c.next();
			target_cell_d = target_cell_d.next();
			target_cell_delta_j = target_cell_delta_j.next();
		};
			$('.norm_values')
			.next().text((perks1.p1u6/perks1.p1u5).toFixed(1))
			.next().text((perks2.p2u6/perks1.p1u5).toFixed(1))
			.next().text((perks3.p3u6/perks1.p1u5).toFixed(1));

			var p=(perks1.p1u6/perks1.p1u5).toFixed(1);
			var s=(perks2.p2u6/perks1.p1u5).toFixed(1);
			var k=(perks3.p3u6/perks1.p1u5).toFixed(1);

			var p_height=p/0.016;
			p_height=p_height+'%';
			var s_height=s/0.016;
			s_height=s_height+'%';
			var k_height=k/0.016;
			k_height=k_height+'%';
			console.log(k_height);

			$('.balance_data1').css("height",p_height).text(p);
			$('.balance_data2').css("height",s_height).text(s);
			$('.balance_data3').css("height",k_height).text(k);

		for(var i = 0; i < 7; i++){
			var height=(c_i_sr[i])/0.08;
			height=height+'%';
			$('.motivation_profile .profile_data:nth-child(' + (i+5) + ')').css("height",height);
		};
		for(var i = 0; i < 7; i++){
			var height=(d_i_sr[i])/0.08;
			height=height+'%';
			$('.self_conflict_profile .profile_data:nth-child(' + (i+5) + ')').css("height",height);
		};
			


			
	};
			

