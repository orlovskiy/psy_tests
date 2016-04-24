
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>rokich's test</title>
	<link rel="stylesheet" href="../style/rokich.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../js/rokich.js"></script>

</head>
<body>

<div class="id" style="display: none"><input type="text" class="anon_id"  value="<?=$_GET['id']?>"></div>






<?php
error_reporting(0);
	$perks1text="Активная деятельная жизнь (полнота и эмоциональная насыщенность жизни)
Жизненная мудрость (зрелость суждений и здравый смысл, достигаемые благодаря жизненному опыту)
Здоровье (физическое и психическое)
Интересная работа
Красота природы и искусства (переживание прекрасного в природе и в искусстве)
Любовь (духовная и физическая близость с любимым человеком)
Материально обеспеченная жизнь (отсутствие материальных проблем)
Наличие хороших и верных друзей
Общественное признание (уважение окружающих, коллектива, коллег)
Познание (возможность расширения своего образования, кругозора,общей культуры, интеллектуальное развитие)
Продуктивная жизнь (максимально полное использование своих возможностей, сил и способностей)
Развитие (работа над собой, постоянное физическое и духовное совершенствование)
Свобода (самостоятельность, независимость в суждениях и поступках)
Счастливая семейная жизнь
Счастье других (благосостояние, развитие и совершенствование других людей, всего народа, человечества в целом)
Творчество (возможность заниматься творчеством)
Уверенность в себе (внутренняя гармония, свобода от внутренних противоречий, сомнений)
Удовольствия (приятное, необременительное времяпрепровождение, отсутствие обязанностей, развлечения)
";
$perks2text="Аккуратность (чистоплотность, умение содержать в порядке вещи, четкость в ведении дел)
Воспитанность (хорошие манеры, умение вести себя в соответствии с нормами культуры поведения)
Высокие запросы (высокие требования к жизни и высокие притязания)
Жизнерадостность (оптимизм, чувство юмора)
Исполнительность (дисциплинированность)
Независимость (способность действовать самостоятельно, решительно)
Непримиримость к недостаткам (в себе и других)
Образованность (широта знаний, высокий культурный уровень)
Ответственность (чувство долга, умение держать свое слово)
Рационализм (умение здраво и логично мыслить, принимать обдуманные, рациональные решения)
Самоконтроль (сдержанность, самодисциплина)
Смелость в отстаивании своего мнения
Чуткость (заботливость)
Терпимость (к взглядам и мнениям других, умение прощать другим их ошибки и заблуждения)
Широта взглядов (умение понять чужую точку зрения, уважать иные вкусы, обычаи, привычки)
Твердая воля (умение настоять на своем, не отступать перед трудностями)
Честность (правдивость, искренность)
Эффективность в делах (трудолюбие, продуктивность в работе)
";
$regex1='/(\\n)/ui';
$regex2='/(\\(\\D*\\))/ui';
$perks1=array();
$perks2=array();
$perks1=preg_split($regex1, $perks1text);
$perks2=preg_split($regex1, $perks2text);
?>






<div class="main_container">
		
	<h1>Тест Рокича</h1>
	<div class="description">
		<p>
				Вам будет предъявлен набор из 18 карточек, где написаны ценности, базовые принципы, которыми Вы руководствуетесь в жизни. Ваша задача - разложить их по порядку значимости лично для Вас.
	Внимательно изучите представленный список и выберите ту ценность, которая для Вас наиболее значима - она займет первое место (или получит первый ранг). Затем выберите вторую по значимости ценность и поместите ее на второе место. Проранжируйте все предложенные ценности. Наименее важная останется последней и займет, соответственно, 18-е место.
	Работайте не спеша, вдумчиво. Здесь нет правильных или неправильных ответов. Конечный результат представит Вашу систему ценностей.

		</p>
		<input class="gotit" type="button" value="Правила ясны">
	</div><br>
	<input type="button" style="display:none;" class="done_button" value="Ок, дальше">
	<input type="button" style="display:none;" id="test_done" value="Ок, дальше">
	<div class="" id="answers1"><div class="cap"></div></div>
	<div class="perks1_container">
		<div class="cap"></div>
		<div class="perks_a">
		<?for($i=0;$i<count($perks1)-1;$i++){
			preg_match($regex2,$perks1[$i],$title);
			$title=$title[0];
			$item=str_replace($title,"",$perks1[$i]);
			$title=str_replace("(","",$title);
			$title=str_replace(")","",$title);?>
		<div class="perk" id="perk<?=$i+1;?>" title="<?=$title?>"><div class="fixer"></div><p><?=trim($item);?></p></div>
		<?}?>
		</div>

		<div class="perks_b">
		<?for($i=0;$i<count($perks2)-1;$i++){
		preg_match($regex2,$perks2[$i],$title);
		$title=$title[0];
		$item=str_replace($title,"",$perks2[$i]);
		$title=str_replace("(","",$title);
		$title=str_replace(")","",$title);
		?>
		<div class="perk" id="perk<?=$i+1;?>" title="<?=$title?>"><div class="fixer"></div><p><?=trim($item);?></p></div>
		<?}?>
		</div>
	</div>

</div>
<div class="tables">
		<div class="table1">
			<table>
				<tr class="header">
					<th>Ценности самоутверждения</th>
					<th>Место в жизни</th>
					<th>Ценности принятия других людей</th>
					<th>Место в жизни</th>
				</tr>
				<tr>
					<td id = "perk1">Активная деятельная жизнь</td>
					<td></td>
					<td id = "">Жизненная мудрость</td>
					<td></td>
				</tr>
				<tr>
					<td>Здоровье</td>
					<td></td>
					<td>Красота природы и искусства</td>
					<td></td>
				</tr>
				<tr>
					<td>Интересная работа</td>
					<td></td>
					<td>Любовь</td>
					<td></td>
				</tr>
				<tr>
					<td>Материально обеспеченная жизнь</td>
					<td></td>
					<td>Познание</td>
					<td></td>
				</tr>
				<tr>
					<td>Наличие хороших и верных друзей</td>
					<td></td>
					<td> Развитие</td>
					<td></td>
				</tr>
				<tr>
					<td>Общественное признание</td>
					<td></td>
					<td>Свобода</td>
					<td></td>
				</tr>
				<tr>
					<td>Продуктивная жизнь</td>
					<td></td>
					<td>Счастье других</td>
					<td></td>
				</tr>
				<tr>
					<td>Счастливая семейная жизнь</td>
					<td></td>
					<td>Творчество</td>
					<td></td>
				</tr>
				<tr>
					<td>Удовольствия</td>
					<td></td>
					<td>Уверенность в себе</td>
					<td></td>
				</tr>
			</table>
		</div>
		<div class="table2">
			<table>
				<tr class="header">
					<th>Профессиональная самореализация</th>
					<th>Место в жизни</th>
					<th>Личная жизнь</th>
					<th>Место в жизни</th>
				</tr>
				<tr>
					<td>Активная деятельная жизнь</td>
					<td></td>
					<td>Любовь</td>
					<td></td>
				</tr>
				<tr>
					<td>Интересная работа</td>
					<td></td>
					<td>Наличие хороших и верных друзей</td>
					<td></td>
				</tr>
				<tr>
					<td>Общественное признание</td>
					<td></td>
					<td>Свобода	  </td>
					<td></td>
				</tr>
				<tr>
					<td>Продуктивная жизнь</td>
					<td></td>
					<td>Счастливая семейная жизнь</td>
					<td></td>
				</tr>
				<tr>
					<td>Развитие</td>
					<td></td>
					<td>Удовольствия</td>
					<td></td>
				</tr>
			</table>
		</div>	  	    	 	  	  	  	  
		<div class="table3">
			<table>
				<tr class="header">
					<th>Этические ценности</th>
					<th>Место в жизни</th>
					<th>Ценности общения</th>
					<th>Место в жизни</th>
					<th>Ценности дела</th>
					<th>Место в жизни</th>
				</tr>
				<tr>
					<td>Ответственность	</td>
					<td></td>
					<td>Воспитанность</td>
					<td></td>
					<td>Аккуратность</td>
					<td></td>
				</tr>
				<tr>
					<td>Высокие запросы	</td>
					<td></td>
					<td>Жизнерадостность</td>
					<td></td>
					<td>Исполнительность</td>
					<td></td>
				</tr>
				<tr>
					<td>Независимость</td>
					<td></td>
					<td>Непримиримость к недостаткам</td>
					<td></td>
					<td>Образованность</td>
					<td></td>
				</tr>
				<tr>
					<td>Самоконтроль</td>
					<td></td>
					<td>Терпимость</td>
					<td></td>
					<td>Рационализм</td>
					<td></td>
				</tr>
				<tr>
					<td>Широта взглядов</td>
					<td></td>
					<td>Чуткость</td>
					<td></td>
					<td>Смелость в отстаивании своего мнения</td>
					<td></td>
				</tr>
				<tr>
					<td>Честность</td>
					<td></td>
					<td>Твердая воля</td>
					<td></td>
				</tr>
				<tr>
					<td>Эффективность в делах</td>
					<td></td>
				</tr>
			</table>
		</div>	  	  
		<div class="table4">
			<table>
				<tr class="header">
					<th>Индивидуалистические ценности</th>
					<th>Место в жизни</th>
					<th>Конформистские ценности</th>
					<th>Место в жизни</th>
					<th>Альтруистические ценности</th>
					<th>Место в жизни</th>
				</tr>
				<tr>
					<td>Независимость</td>
					<td></td>
					<td>Воспитанность</td>
					<td></td>
					<td>Терпимость</td>
					<td></td>
				</tr>
				<tr>
					<td>Непримиримость к недостаткам</td>
					<td></td>
					<td>Самоконтроль</td>
					<td></td>
					<td>Чуткость</td>
					<td></td>
				</tr>
				<tr>
					<td>Рационализм</td>
					<td></td>
					<td>Широта взглядов</td>
					<td></td>
				</tr>
				<tr>
					<td>Смелость в отстаивании своего мнения</td>
					<td></td>
				</tr>
				<tr>
					<td>Твердая воля</td>
					<td></td>
				</tr>
			</table>
		</div>
		<div class="table5">
			<table>
				<tr class="header">
					<th>Конкретные ценности</th>
					<th>Место в жизни</th>
					<th>Абстрактные Ценности</th>
					<th>Место в жизни</th>
				</tr>
				<tr>
					<td>Высокие запросы</td>
					<td></td>
					<td>Самоконтроль</td>
					<td></td>
				</tr>
				<tr>
					<td>Независимость</td>
					<td></td>
					<td>Терпимость</td>
					<td></td>
				</tr>
				<tr>
					<td>Непримиримость к недостаткам</td>
					<td></td>
					<td>Чуткость</td>
					<td></td>
				</tr>
				<tr>
					<td>Образованность</td>
					<td></td>
					<td>Широта взглядов</td>
					<td></td>
				</tr>
				<tr>
					<td>Смелость в отстаивании своего мнения</td>
					<td></td>
					<td>Честность</td>
					<td></td>
				</tr>
				<tr>
					<td>Твердая воля</td>
					<td></td>
				</tr>
				<tr>
					<td>Эффективность в делах</td>
					<td></td>
				</tr>
			</table>
		</div>
</div>
</body>
</html>
