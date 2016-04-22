<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/relief.css">
	<link rel="stylesheet" type="text/css" href="../style/graph.css">
	<title>test machine</title>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/relief_reader.js"></script>
</head>
<body>
<?php
	include '../database.php';
	$id=$_GET['id'];
	$query="SELECT * FROM test WHERE textid = '$id' OR id='$id'";
	$result=mysql_query($query);

	$r=mysql_fetch_assoc($result);
	$relief_data=$r['relief_data'];
	$usr=$r['id']." ".$r['textid']." ".$r['usr'];
	
	$relief_data=explode("#", $relief_data);
	$perks1=$relief_data[0];?><script>var perks1=<?=$perks1?></script><?
	$perks2=$relief_data[1];?><script>var perks2=<?=$perks2?></script><?
	$perks3=$relief_data[2];?><script>var perks3=<?=$perks3?></script><?
	$getability1=$relief_data[3];?><script>var getability1=<?=$getability1?></script><?
	$getability2=$relief_data[4];?><script>var getability2=<?=$getability2?></script><?
	$getability3=$relief_data[5];?><script>var getability3=<?=$getability3?></script><?
	?>

<div class="id"><?=$usr?></div>


<div class="result_wrapper" style="">
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
<div><a href="../index.php">Главная</a></div>
</body>
</html>