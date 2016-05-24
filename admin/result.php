<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/admin.css">
	<title>Результаты</title>
</head>
<body>
<table>
<th>Пользователь</th>
<th>Тест Кеттела</th>
<th>Мотивационный профиль</th>
<th>Тест Рокича</th>
<th>Реализация потребностей в саморазвитии</th>
<th>Стратегии самоутверждения</th>
<th>Саморазвитие</th>
<?
include '../database.php';
$query="SELECT * FROM test";
$result=mysql_query($query);
while($r=mysql_fetch_assoc($result)){
		$usrid=$r['id'];
		/*array_shift($r);*/
	$usr=$r['id']." ".$r['textid']." ".$r['usr'];

	$a=strlen($r['answer']);
	if($a>0){
 $status1="inline-block";
	}else{
		$status1="none";
		};


	$b=strlen($r['relief_data']);
	if($b>>0){
 	$status2="inline-block";
	}else{
		$status2="none";
		};

	$c=strlen($r['rokich']);
		if($c>>0){
	 	$status3="inline-block";
		}else{
			$status3="none";
			};

	$d=strlen($r['range_test']);
		if($d>>0){
	 	$status4="inline-block";
		}else{
			$status4="none";
			};

	$e=strlen($r['self_affirm']);
		if($e>>0){
	 	$status5="inline-block";
		}else{
			$status5="none";
			};


	$f=strlen($r['self_evaluate']);
		if($f>>0){
	 	$status6="inline-block";
		}else{
			$status6="none";
			};
	?>
	<tr class="usr_wrapper">
		<td class="usr"><?=$usr?> </td>
			<td class="kettel test">
			<a class="kettel_link" href="../1.kettel/kettel_reader.php?id=<?=$r['id']?>"><div  style="display:<?=$status1?>" alt=""></div></a>
			</td>
			
			
			<td class="relief test">
			<a class="relief_link" href="../2.motivation_relief/relief_reader.php?id=<?=$r['id']?>"><div  style="display:<?=$status2?>" alt=""></div></a>
			</td>

			<td class="rokich test">
			<a class="rokich_link" href="../3.rokich/reader.php?id=<?=$r['id']?>"><div  style="display:<?=$status3?>" alt=""></div></a>
			</td>

			<td class="range_test test">
			<a class="range_link" href="../4.range_test/reader.php?id=<?=$r['id']?>"><div  style="display:<?=$status4?>" alt=""></div></a>
			</td>

			<td class="self_affirm test">
			<a class="affirm_link" href="../5.self_affirm/reader.php?id=<?=$r['id']?>"><div  style="display:<?=$status5?>" alt=""></div></a>
			</td>

			<td class="self_evaluate test">
			<a class="evaluate_link" href="../6.self_evaluate/reader.php?id=<?=$r['id']?>"><div  style="display:<?=$status6?>" alt=""></div></a>
			</td>
		</tr>
		<?
}
			


?>
</table>
<div><a href="../index.php">Главная</a></div>
</body>