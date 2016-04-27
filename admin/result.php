<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/admin.css">
	<title>Результаты</title>
</head>
<body>
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
	?>
	<div class="usr_wrapper">
		<div class="usr"><?=$usr?> </div>
			<div class="kettel test">
			<a class="kettel_link" style="display:<?=$status1?>" href="../1.kettel/kettel_reader.php?id=<?=$r['id']?>">тест Кеттела</a>
			</div>
			
			<div class="relief test">
			<a class="relief_link" style="display:<?=$status2?>" href="../2.motivation_relief/relief_reader.php?id=<?=$r['id']?>">Мотивационный профиль</a>
			</div>

			<div class="rokich test">
			<a class="rokich_link" style="display:<?=$status3?>" href="../3.rokich/reader.php?id=<?=$r['id']?>">Тест Рокича</a>
			</div>

			<div class="range_test test">
			<a class="range_link" style="display:<?=$status4?>" href="../4.range_test/reader.php?id=<?=$r['id']?>">Тест какой-то</a>
			</div>

			<div class="self_affirm test">
			<a class="range_link" style="display:<?=$status5?>" href="../5.self_affirm/reader.php?id=<?=$r['id']?>">Стратегии самоутверждения</a>
			</div>
		</div>
		<?
}
			


?>
<div><a href="../index.php">Главная</a></div>
</body>