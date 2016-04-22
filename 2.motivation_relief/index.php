<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/relief.css">
	<link rel="stylesheet" type="text/css" href="../style/graph.css">
	<link rel="stylesheet" type="text/css" href="../style/waves.min.css">
	<title>test machine</title>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/relief.js"></script>
</head>
<body>
<div class="id">
<form action="transmitter.php" method="post">
	<div class="id"><input type="text" class="anon_id"  value="<?=$_GET['id']?>"></div>
	</form>
</div>

<div class="wrapper_p">
<div class="wrapper2">
<div class="desc_wrap">
	<div class="description1">В этой части теста Вам предлагается выбирать из двухпонятий(ценностей) ту, которая представляется Вам более значимой.</div>
</div>
	<div class="testfield">
	
	<div class="poehali poehal" style="display:none">Правила ясны, поехали!</div>
	<div class="poehali2 poehal" style="display:none">poehali2!</div>
	<div class="poehali3 poehal" style="display:none">poehali3!</div>
<?php


$text='1.	Статус (положение) 
2.	Исследование (поиск)
3.	Безопасность (защита)
4.	Удовольствие (довольство)
5.	Принадлежность (сопричастность)
6.	Внимание (заметность)
7.	Самоактуализация (совершенствование)

1’. Признание (честь)
2’. Познание (изучение)
3’. Порядок (организованность)
4’. Комфорт (удобство)
5’. Принятие (приязнь)
6’. Общение (контакты) 
7’. Самоактуализация

1”. Доверие (уверенность)
2”. Понимание (представление)
3”. Уважение (значимость)
4”. Свобода (независимость)
5”. Идентичность (близость)
6”. Привязанность (преданность)
7”. Самоактуализация
';

$reg1='/\\d.\\s([а-я\\s\(\)]*)\\s/ui';
$reg2='/\\d’.\\s([а-я\\s\(\)]*)\\s/ui';
$reg3='/\\d”.\\s([а-я\\s\(\)]*)\\s/ui';
$perks1=array();

$perks2=array();

$perks3=array();



preg_match_all($reg1, $text, $perks1);
$perks1=$perks1[1];
preg_match_all($reg2, $text, $perks2);
$perks2=$perks2[1];
preg_match_all($reg3, $text, $perks3);
$perks3=$perks3[1];
$b=0;
?>
<div class="p1">
<?for ($i=0; $i <10 ; $i++) { 

	for ($i2=$i+1; $i2 <7; $i2++) { ?>


		<div class="choice_1p<?=$b?>" id="choice_p1" style="display:none">
		<span class="perk" id="<?="p1u$i"?>" onclick="perks1.<?="p1u$i"?>+=1"><?=$perks1[$i]?></span>

		<span class="perk" id="<?="p1u$i2"?>" onclick="perks1.<?="p1u$i2"?>+=1"><?=$perks1[$i2]?></span>

	</div>

	<?$b++;
	}
}
?>
	</div>
	<?	
	$b=0;
	?>
	<div class="p2">
<?
for ($i=0; $i <6 ; $i++) { 
	for ($i2=$i+1; $i2 <7; $i2++) { ?>


		<div class="choice_2p<?=$b?>" id="choice_p2" style="display:none">
		<span class="perk" id="<?="p2u$i"?>" onclick="perks2.<?="p2u$i"?>+=1"><?=$perks2[$i]?></span>

		<span class="perk" id="<?="p2u$i2"?>" onclick="perks2.<?="p2u$i2"?>+=1"><?=$perks2[$i2]?></span>

	</div>

	<?$b++;
	}
}
?>
	</div>
	<?	
	$b=0;
	?>
	<div class="p3">
<?
for ($i=0; $i <6 ; $i++) { 
	for ($i2=$i+1; $i2 <7; $i2++) { ?>


		<div class="choice_3p<?=$b?>" id="choice_p3" style="display:none">
		<span class="perk" class="l" id="<?="p3u$i"?>" onclick="perks3.<?="p3u$i"?>+=1"><?=$perks3[$i]?></span>

		<span class="perk" class="r" id="<?="p3u$i2"?>" onclick="perks3.<?="p3u$i2"?>+=1"><?=$perks3[$i2]?></span>

	</div>

	<?$b++;
	}
}
?>
	</div>
</div>
</div>
</div>











<div class="wrapper_d" style="display:none">
<div class="wrapper2_d">
<div class="desc_wrap">
	<div class="description1">В этой части теста Вам предлагается выбирать из двухпонятий(ценностей) ту, которая представляется Вам более значимой.</div>
</div>
	<div class="testfield_d">
	
		<div class="poehali_d poehal" style="display:none">Правила ясны, поехали!</div>
	<div class="poehali2_d poehal" style="display:none">poehali2!</div>
	<div class="poehali3_d poehal" style="display:none">poehali3!</div>
<?php

$text='1.	Статус (положение) 
2.	Исследование (поиск)
3.	Безопасность (защита)
4.	Удовольствие (довольство)
5.	Принадлежность (сопричастность)
6.	Внимание (заметность)
7.	Самоактуализация (совершенствование)

1’. Признание (честь)
2’. Познание (изучение)
3’. Порядок (организованность)
4’. Комфорт (удобство)
5’. Принятие (приязнь)
6’. Общение (контакты) 
7’. Самоактуализация

1”. Доверие (уверенность)
2”. Понимание (представление)
3”. Уважение (значимость)
4”. Свобода (независимость)
5”. Идентичность (близость)
6”. Привязанность (преданность)
7”. Самоактуализация
';

$reg1='/\\d.\\s([а-я\\s\(\)]*)\\s/ui';
$reg2='/\\d’.\\s([а-я\\s\(\)]*)\\s/ui';
$reg3='/\\d”.\\s([а-я\\s\(\)]*)\\s/ui';
$perks1=array();

$perks2=array();

$perks3=array();



preg_match_all($reg1, $text, $perks1);
$perks1=$perks1[1];
preg_match_all($reg2, $text, $perks2);
$perks2=$perks2[1];
preg_match_all($reg3, $text, $perks3);
$perks3=$perks3[1];
$b=0;
?>

<div class="d1">
<?for ($i=0; $i <10 ; $i++) { 

	for ($i2=$i+1; $i2 <7; $i2++) { ?>


		<div class="choice_1d<?=$b?>" id="choice_1d" style="display:none">
		<span class="perk_d" id="<?="p1u$i"?>" onclick="getability1.<?="p1u$i"?>+=1"><?=$perks1[$i]?></span>

		<span class="perk_d" id="<?="p1u$i2"?>" onclick="getability1.<?="p1u$i2"?>+=1"><?=$perks1[$i2]?></span>

	</div>

	<?$b++;
	}
}
?>
	</div>
	<?	
	$b=0;
	?>
	<div class="d2">
<?
for ($i=0; $i <6 ; $i++) { 
	for ($i2=$i+1; $i2 <7; $i2++) { ?>


		<div class="choice_2d<?=$b?>" id="choice_2d" style="display:none">
		<span class="perk_d" id="<?="p2u$i"?>" onclick="getability2.<?="p2u$i"?>+=1"><?=$perks2[$i]?></span>

		<span class="perk_d" id="<?="p2u$i2"?>" onclick="getability2.<?="p2u$i2"?>+=1"><?=$perks2[$i2]?></span>

	</div>

	<?$b++;
	}
}
?>
	</div>
	<?	
	$b=0;
	?>
	<div class="d3">
<?
for ($i=0; $i <6 ; $i++) { 
	for ($i2=$i+1; $i2 <7; $i2++) { ?>


		<div class="choice_3d<?=$b?>" id="choice_3d" style="display:none">
		<span class="perk_d" class="l" id="<?="p3u$i"?>" onclick="getability3.<?="p3u$i"?>+=1"><?=$perks3[$i]?></span>

		<span class="perk_d" class="r" id="<?="p3u$i2"?>" onclick="getability3.<?="p3u$i2"?>+=1"><?=$perks3[$i2]?></span>

	</div>

	<?$b++;
	}
}
?>
	</div>
</div>
</div>
</div>
<script type="text/javascript">
    Waves.attach('.perk', ['waves-button', 'waves-float']);
    Waves.init();
</script> 
<style>
    .perk .btn { color: #fff; }
    .perk a, 
    .perk:hover { background: #01BCFF; }
    .perk button,
    .perk:hover { background: #1bb556; }
    .perk input,
    .perk input:hover { background: #ff4f0f; }
</style>
<script type="text/javascript">
    Waves.attach('.perk_d', ['waves-button', 'waves-float']);
    Waves.init();
</script> 
<style>
    .perk_d .btn { color: #fff; }
    .perk_d a, 
    .perk_d:hover { background: #01BCFF; }
    .perk_d button,
    .perk_d:hover { background: #1bb556; }
    .perk_d input,
    .perk_d input:hover { background: #ff4f0f; }
</style>
<script type="text/javascript">
    Waves.attach('.poehal', ['waves-button', 'waves-float']);
    Waves.init();
</script> 
<style>
    .poehal .btn { color: #fff; }
    .poehal a, 
    .poehal:hover { background: #01BCFF; }
    .poehal button,
    .poehal:hover { background: #1bb556; }
    .poehal input,
    .poehal input:hover { background: #ff4f0f; }
</style>
<div class="result_wrapper" style="display:none">
	<div class="results">
	<h2>Результаты</h2>
		<div class="table1">
			<table class="perki1">
				<tr>
				<td class="parametr">Параметр</td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				</tr>
				<tr class="p1_price">
				<td>Ценность</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr> 
				<tr class="p1_getability">
				<td class="parametr">Доступность</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
				<tr class="p1_delta">
				<td class="parametr">Дельта</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
			</table>
			<table class="perki2">
				<tr>
				<td class="parametr">Параметр</td>
				<td>1'</td>
				<td>2'</td>
				<td>3'</td>
				<td>4'</td>
				<td>5'</td>
				<td>6'</td>
				<td>7'</td>
				</tr>
				<tr class="p2_price">
				<td class="parametr">Ценность</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
				<tr class="p2_getability">
				<td class="parametr">Доступность</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
				<tr class="p2_delta">
				<td class="parametr">Дельта</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
			</table>
			<table class="perki3">
				<tr>
				<td class="parametr">Параметр</td>
				<td>1"</td>
				<td>2"</td>
				<td>3"</td>
				<td>4"</td>
				<td>5"</td>
				<td>6"</td>
				<td>7"</td>
				</tr>
				<tr class="p3_price">
				<td class="parametr">Ценность</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
				<tr class="p3_getability">
				<td class="parametr">Доступность</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
				<tr class="p3_delta">
				<td class="parametr">Дельта</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
			</table>
			</div>
			<div class="table2">
			<table class="middle">
				<tr>
				<td class="parametr">Параметр</td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				</tr>
				<tr class="c_i_sr">
				<td class="parametr">Ц<sub> i</sub>ср</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
				<tr class="d_i_sr">
				<td class="parametr">∆<sub> i</sub>ср</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</table>
		</div>
				<div class="table4">
			<table>
				<tr class="m_parameters">
					<td>Параметр</td>
					<td>I</td>
					<td>II</td>
					<td>III</td>
					<td>IV</td>
					<td>V</td>
					<td>VI</td>
					<td>VII</td>
				</tr>
				<tr>
					<td class="m_parameters t4r1">Ценность</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="m_parameters t4r2">Доступность</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="m_parameters t4r3">∆<sub>j</sub> = Ц<sub>j</sub>-Д<sub>j</sub></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
		<div class="table3">
			<table>
				<tr class="norm">
				<td class="parametr">Нормировочные показатели</td>
				<td>П=Ц7/6</td>
				<td>С=Ц7'/6</td>
				<td>К=Ц7"/6</td>
				</tr>
				<tr>
				<td class="norm_values">Значение</td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
			</table>
		</div>
		<div class="graphics">
			<h2>Графики</h2>
				<div class="motivation_profile" class="diagram">
				<h3>Мотивационный профиль личности</h3>
				<div class="diagram_container">
		<div class="marks">
					<div>6</div>
					<div>4</div>
					<div>2</div>
		</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class">Ц<sub> i</sub>ср1</div>
				<div class="data_class">Ц<sub> i</sub>ср2</div>
				<div class="data_class">Ц<sub> i</sub>ср3</div>
				<div class="data_class">Ц<sub> i</sub>ср4</div>
				<div class="data_class">Ц<sub> i</sub>ср5</div>
				<div class="data_class">Ц<sub> i</sub>ср6</div>
				<div class="data_class">Ц<sub> i</sub>ср7</div>
			</div>
			</div>
		</div>



			<div class="self_conflict_profile" class="diagram">
				<h3>Профиль внутренних конфликтов личности</h3>
				<div class="diagram_container">
					<div class="marks">
					<div>6</div>
					<div>4</div>
					<div>2</div>
				</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
				<div class="profile_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class">|∆1|ср</div>
				<div class="data_class">|∆2|ср</div>
				<div class="data_class">|∆3|ср</div>
				<div class="data_class">|∆4|ср</div>
				<div class="data_class">|∆5|ср</div>
				<div class="data_class">|∆6|ср</div>
				<div class="data_class">|∆7|ср</div>
			</div>
				</div>
			</div>



<div class="status_requests" id="diagram">
				<h3>Статусные потребности</h3>
				<div class="diagram_container">
					<div class="marks">
					<div>6</div>
					<div>4</div>
					<div>2</div>
				</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class less_data_classes">Ц1</div>
				<div class="data_class less_data_classes">∆1</div>
				<div class="data_class less_data_classes">Ц1'</div>
				<div class="data_class less_data_classes">∆1'</div>
				<div class="data_class less_data_classes">Ц1"</div>
				<div class="data_class less_data_classes">∆1"</div>
			</div>
				</div>
			</div>

			



<div class="gnostic_requests" id="diagram">
				<h3>Гностические потребности</h3>
				<div class="diagram_container">
					<div class="marks">
					<div>6</div>
					<div>4</div>
					<div>2</div>
				</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class less_data_classes">Ц2</div>
				<div class="data_class less_data_classes">∆2</div>
				<div class="data_class less_data_classes">Ц2'</div>
				<div class="data_class less_data_classes">∆2'</div>
				<div class="data_class less_data_classes">Ц2"</div>
				<div class="data_class less_data_classes">∆2"</div>
			</div>
				</div>
			</div>

			




<div class="organazing_requests" id="diagram">
				<h3>Организующие потребности</h3>
				<div class="diagram_container">
					<div class="marks">
					<div>6</div>
					<div>4</div>
					<div>2</div>
				</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class less_data_classes">Ц3</div>
				<div class="data_class less_data_classes">∆3</div>
				<div class="data_class less_data_classes">Ц3'</div>
				<div class="data_class less_data_classes">∆3'</div>
				<div class="data_class less_data_classes">Ц3"</div>
				<div class="data_class less_data_classes">∆3"</div>
			</div>
				</div>
			</div>

			




<div class="gedonist_requests" id="diagram">
				<h3>Гедонистические потребности</h3>
				<div class="diagram_container">
					<div class="marks">
					<div>6</div>
					<div>4</div>
					<div>2</div>
				</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class less_data_classes">Ц4</div>
				<div class="data_class less_data_classes">∆4</div>
				<div class="data_class less_data_classes">Ц4'</div>
				<div class="data_class less_data_classes">∆4'</div>
				<div class="data_class less_data_classes">Ц4"</div>
				<div class="data_class less_data_classes">∆4"</div>
			</div>
				</div>
			</div>

			




<div class="consolidating_requests" id="diagram">
				<h3>Консолидирующие потребности</h3>
				<div class="diagram_container">
					<div class="marks">
					<div>6</div>
					<div>4</div>
					<div>2</div>
				</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class less_data_classes">Ц5</div>
				<div class="data_class less_data_classes">∆5</div>
				<div class="data_class less_data_classes">Ц5'</div>
				<div class="data_class less_data_classes">∆5'</div>
				<div class="data_class less_data_classes">Ц5"</div>
				<div class="data_class less_data_classes">∆5"</div>
			</div>
				</div>
			</div>

			




<div class="communicational_requests" id="diagram">
				<h3>Коммуникативные потребности</h3>
				<div class="diagram_container">
					<div class="marks">
					<div>6</div>
					<div>4</div>
					<div>2</div>
				</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
				<div class="profile_data less_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class less_data_classes">Ц6</div>
				<div class="data_class less_data_classes">∆6</div>
				<div class="data_class less_data_classes">Ц6'</div>
				<div class="data_class less_data_classes">∆6'</div>
				<div class="data_class less_data_classes">Ц6"</div>
				<div class="data_class less_data_classes">∆6"</div>
			</div>
				</div>
			</div>
	
			

<div class="balance" id="diagram">
				<h3>Баланс природных социальных и культурных потребностей</h3>
				<div class="diagram_container balance_diagram_container">
					<div class="marks balance_marks">
					<div>1.2</div>
					<div>0.8</div>
					<div>0.4</div>
				</div>
				<div class="scale">
					<div class="guides"></div>
					<div class="guides"></div>
					<div class="guides"></div>
				<div class="bottom_fixer"></div>
				<div class="profile_data balance_data1 balance_data"></div>
				<div class="profile_data balance_data2 balance_data"></div>
				<div class="profile_data balance_data3 balance_data"></div>
			</div>
			<div class="class_master">
				<div class="data_class balance_data_class">П</div>
				<div class="data_class balance_data_class">С</div>
				<div class="data_class balance_data_class">К</div>
			</div>
				</div>
			</div>



		</div>
	</div>
</div>
</body>
</html>