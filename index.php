<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<title>test machine</title>
</head>
<body>
<div class="main_page_wrapper">
	<script type="text/javascript">
		function makeid()
		{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var float=4+Math.floor(Math.random() * 5);
    for( var i=0; i < float; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
		}
	</script>
<div id="admin_link"><a href="admin/result.php"><p>Доступ к данным</p></a></div>


	<h1>ТЕСТЫ</h1>
	<div class="main_links">	
		
	
	<div class="choice1">
		<div class="look">Увидеть результаты</div>
		<div class="try">Пройти тест</div>
	</div>


	<div class="choice2" style="display: none;">
		<div class="already">Уже зарегистрированы?</div>
		<div class="not_yet">Еще нет</div>
	</div>
	<div class="register_wrap" style="display:none">
		<div class="register">
			<div class="name_wrap">
					<div class="name">
						<label class="name_label"for="fname"><span>Имя</span><input type="text" value ="Anonymous" name="fname" id="fname" onfocus="if (this.value == 'Anonymous') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Anonymous';}"></label>
						<div class="surname"><label class="name_label"for="surname"><span>Фамилия</span><input type="text" value ="Anonymous" name="surname" id="surname" onfocus="if (this.value == 'Anonymous') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Anonymous';}"></label></div>
						<div class="years"><label class="name_label"for="years"><span>Полных лет</span><input type="text" placeholder =""name="years" id="years" required></label></div>
						</div>
							<div class="sex">
								<label for="sexm">мужчина<input type="radio" name="sex" id="sexm" value="мужчина" required></label>
								<label for="sexf">женщина<input type="radio" name="sex" id="sexf" value="женщина" required></label>
							</div>
							<div class="id_block"><input id="textid" type="button" value="Создать ID"></div>

				</div>
			</div>
			<p>Для сохранения анонимности, а так же упрощения процесса тестирования используется анонимный ID. Вам необязательно указывать свое имя. Только пол и возраст. В дальнейшем Вы сможете увидеть результаты своих тестов с помощью ID.</p>
			</div>
		<div class="id_wrap" style="display:none">
			<p class="registred"></p><input type="text" class="textid">
		</div>
		<div class="test_links" style="display:none">
			<div ><a href="" id="test1"><p>Тест Кеттела</p></a></div>
			<div ><a href="" id="test2"><p>Мотивационный рельеф личности</p></a></div>
			<div ><a href="" id="test3"><p>Тест Рокича</p></a></div>
			<div ><a href="" id="test4"><p>Тест какой-то</p></a></div>
		</div>
	
		<script type="text/javascript">
			$('.look').on("click",function(){
			$('.choice1').slideUp('fast',function(){});
			$('.id_wrap').slideDown('slow',function(){});
			$('.registred').text("Введите Ваш ID: ")
  	 	$('.textid').css('border','1px solid grey');
  	 	});
  	 	$('.textid').on("input",function(){
  	 	$('.test_links').slideDown('fast',function(){});
			var id=$('.textid').val();
			var kettel="1.kettel/kettel_reader.php?id="+id;
			var relief="2.motivation_relief/relief_reader.php?id="+id;
			var rokich="3.rokich/reader.php?id="+id;
			var range_test="4.range_test/reader.php?id="+id;
			$('#test1').attr("href",kettel);
			$('#test2').attr("href",relief);
			$('#test3').attr("href",rokich);
			$('#test4').attr("href",range_test);

  	 });




			$('.try').on("click",function(){
			$('.choice1').slideUp('fast',function(){});
			$('.choice2').slideDown('slow',function(){});
				});
			$('.not_yet').on("click",function(){
			$('.choice2').slideUp('fast',function(){});
			$('.register_wrap').slideDown('fast',function(){});
  	 	$('#textid').on("click",function(){
  	 		var textid = makeid();
  	 		var usr=$('#fname').val()+" "+$('#surname').val()+" "+$('#years').val()+" "+$("input[name='sex']").val();
  	 		$.post('register.php',{'usr':usr,'textid':textid});
  	 		
  	 		$('.textid').val(textid);
				$('.id_wrap').slideDown("fast",function(){});
				$('.registred').text("Вы зарегистрированы с ID: ");	
  	 		$('.register').slideUp('fast',function(){});
  	 		$('.test_links').slideDown('fast',function(){});
  	 			var id=$('.textid').val();
				var kettel="1.kettel/index.php?id="+id;
				var relief="2.motivation_relief/index.php?id="+id;
				var rokich="3.rokich/index.php?id="+id;
				var range_test="4.range_test/index.php?id="+id;
				$('#test1').attr("href",kettel);
				$('#test2').attr("href",relief);
				$('#test3').attr("href",rokich);
				$('#test4').attr("href",range_test);
  	 	});
  	 	});
  	 	$('.already').on("click",function(){
  	 	$('.choice2').slideUp('fast',function(){});
  	 	$('.registred').text("Введите Ваш ID: ")
  	 	$('.id_wrap').slideDown('fast',function(){});
  	 	$('.textid').css('border','1px solid grey');
  	 	$('.textid').on("input",function(){
  	 		$('.test_links').slideDown('fast',function(){});
  	 		var id=$('.textid').val();
				var kettel="1.kettel/index.php?id="+id;
				var relief="2.motivation_relief/index.php?id="+id;
				var rokich="3.rokich/index.php?id="+id;
				var range_test="4.range_test/index.php?id="+id;
				$('#test1').attr("href",kettel);
				$('#test2').attr("href",relief);
				$('#test3').attr("href",rokich);
				$('#test4').attr("href",range_test);

  	 	});
  	 	  	 	
  	 	
  	 
  	 	});
  	 	
		</script>
	
		
	</div>
</div>
</div>
</body>
</html>