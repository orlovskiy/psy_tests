<?php
	include '../database.php';

	$query="SELECT relief_data FROM test WHERE textid = '$textid' "
	$result=mysql_query($query);

	$r=mysql_fetch_assoc($result);
	$r=$r['relief_data'];
	$r=explode("#", $r);
	$perks1=$r[0];
	$perks2=$r[1];
	$perks3=$r[2];
	$getability1=$r[3];
	$getability2=$r[4];
	$getability3=$r[5];
	?>