<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="../style/self_affirm.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="../js/jquery-ui.min.js"></script>

</head>
<body>

<?php include '../database.php';
include 'text.php';

$id=$_GET['id'];
$query="SELECT * FROM test WHERE textid = '$id' OR id='$id'";
$result=mysql_query($query);
$r=mysql_fetch_assoc($result);
$usr=$r['id']." ".$r['textid']." ".$r['usr'];
$data=$r['self_affirm'];
?>
<div class="usr"><?=$usr?></div>
<?

$regex = '/(\\d{1,2}[\\D]*)/ui';
$regex2 = '/(.*)\n/ui';
$res = array();
$res2 = array();
preg_match_all($regex, $text, $res);

foreach ($res[0] as $key => $value) {
	preg_match_all($regex2, $value, $res2);
	?>
		<div class="question" id="question<?=$key+1?>">
		<p><?=$res2[1][0]?></p>
	<?
	for ($i=1; $i < count($res2[0]); $i++) { 
		?>
			<div class="answer">
				<span value = "<?=$i?>" id="q<?=$key+1?>a<?=$i?>"><?=$res2[0][$i]?></label>
			</div>
		<?
	}
	?></div><?
}

?>



<script type="text/javascript">
window.onload = function(){
		var answers=JSON.parse('<?=$data?>');
		var main_sum = 0;			
		var disc1 = 0;
		var disc2 = 0;
		var disc3 = 0;
		for (key in answers){	
			$('#'+answers[key]).css('background-color','red')
			
			main_sum += parseInt(answers[key].substr(-1))
			if ((answers[key]).substr(-1) == '1'){
				disc1 += 1 
			}
			else if ((answers[key]).substr(-1) == '2'){
				disc1 += 2
			}
			else if((answers[key]).substr(-1) == '3'){
				disc2 += 3
			}
			else if((answers[key]).substr(-1) == '4'){
				disc2 += 4
				disc3 += 5
			}
			else if((answers[key]).substr(-1) == '5'){
				disc3 += 5
			}
		
		}
			$('.main').append(main_sum)
			$('.disc1').append(disc1);
			$('.disc2').append(disc2);
			$('.disc3').append(disc3);
}
</script>
<div class="results">
	<div class="summs">
		<p class="main">Сумма баллов: </p>
		<p class="disc1">Дискриминирующий признак 1: </p>
		<p class="disc2">Дискриминирующий признак 2: </p>
		<p class="disc3">Дискриминирующий признак 3: </p>
	</div>
<div class="result_tables">
	<table class="table1" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="100" valign="top">
<p>&nbsp;</p>
</td>
<td colspan="3" width="115" valign="top">
<p>Сумма баллов по опроснику</p>
</td>
<td colspan="3" width="115" valign="top">
<p>Р1</p>
</td>
<td colspan="3" width="115" valign="top">
<p>Р2</p>
</td>
<td colspan="3" width="115" valign="top">
<p>Р3</p>
</td>
</tr>
<tr>
<td width="100" valign="top">
<p>№ группы</p>
</td>
<td width="38" valign="top">
<p>1</p>
</td>
<td width="38" valign="top">
<p>2</p>
</td>
<td width="38" valign="top">
<p>3</p>
</td>
<td width="38" valign="top">
<p>1</p>
</td>
<td width="38" valign="top">
<p>2</p>
</td>
<td width="38" valign="top">
<p>3</p>
</td>
<td width="38" valign="top">
<p>1</p>
</td>
<td width="38" valign="top">
<p>2</p>
</td>
<td width="38" valign="top">
<p>3</p>
</td>
<td width="38" valign="top">
<p>1</p>
</td>
<td width="38" valign="top">
<p>2</p>
</td>
<td width="38" valign="top">
<p>3</p>
</td>
</tr>
<tr>
<td width="100" valign="top">
<p>Среднее</p>
</td>
<td width="38" valign="top">
<p>108</p>
</td>
<td width="38" valign="top">
<p>121</p>
</td>
<td width="38" valign="top">
<p>133</p>
</td>
<td width="38" valign="top">
<p>18</p>
</td>
<td width="38" valign="top">
<p>11</p>
</td>
<td width="38" valign="top">
<p>6</p>
</td>
<td width="38" valign="top">
<p>81</p>
</td>
<td width="38" valign="top">
<p>104</p>
</td>
<td width="38" valign="top">
<p>114</p>
</td>
<td width="38" valign="top">
<p>65</p>
</td>
<td width="38" valign="top">
<p>87</p>
</td>
<td width="38" valign="top">
<p>111</p>
</td>
</tr>
<tr>
<td width="100" valign="top">
<p>Медиана</p>
</td>
<td width="38" valign="top">
<p>108</p>
</td>
<td width="38" valign="top">
<p>121</p>
</td>
<td width="38" valign="top">
<p>132</p>
</td>
<td width="38" valign="top">
<p>18</p>
</td>
<td width="38" valign="top">
<p>11</p>
</td>
<td width="38" valign="top">
<p>5</p>
</td>
<td width="38" valign="top">
<p>84</p>
</td>
<td width="38" valign="top">
<p>104</p>
</td>
<td width="38" valign="top">
<p>115</p>
</td>
<td width="38" valign="top">
<p>68</p>
</td>
<td width="38" valign="top">
<p>88</p>
</td>
<td width="38" valign="top">
<p>110</p>
</td>
</tr>
<tr>
<td width="100" valign="top">
<p>Дисперсия</p>
</td>
<td width="38" valign="top">
<p>11</p>
</td>
<td width="38" valign="top">
<p>18</p>
</td>
<td width="38" valign="top">
<p>19</p>
</td>
<td width="38" valign="top">
<p>19</p>
</td>
<td width="38" valign="top">
<p>9</p>
</td>
<td width="38" valign="top">
<p>8</p>
</td>
<td width="38" valign="top">
<p>183</p>
</td>
<td width="38" valign="top">
<p>76</p>
</td>
<td width="38" valign="top">
<p>196</p>
</td>
<td width="38" valign="top">
<p>210</p>
</td>
<td width="38" valign="top">
<p>98</p>
</td>
<td width="38" valign="top">
<p>91</p>
</td>
</tr>
<tr>
<td width="100" valign="top">
<p>Минимум</p>
</td>
<td width="38" valign="top">
<p>90</p>
</td>
<td width="38" valign="top">
<p>111</p>
</td>
<td width="38" valign="top">
<p>126</p>
</td>
<td width="38" valign="top">
<p>11</p>
</td>
<td width="38" valign="top">
<p>4</p>
</td>
<td width="38" valign="top">
<p>1</p>
</td>
<td width="38" valign="top">
<p>46</p>
</td>
<td width="38" valign="top">
<p>80</p>
</td>
<td width="38" valign="top">
<p>72</p>
</td>
<td width="38" valign="top">
<p>28</p>
</td>
<td width="38" valign="top">
<p>60</p>
</td>
<td width="38" valign="top">
<p>93</p>
</td>
</tr>
<tr>
<td width="100" valign="top">
<p>Максимум</p>
</td>
<td width="38" valign="top">
<p>114</p>
</td>
<td width="38" valign="top">
<p>129</p>
</td>
<td width="38" valign="top">
<p>144</p>
</td>
<td width="38" valign="top">
<p>29</p>
</td>
<td width="38" valign="top">
<p>20</p>
</td>
<td width="38" valign="top">
<p>14</p>
</td>
<td width="38" valign="top">
<p>101</p>
</td>
<td width="38" valign="top">
<p>120</p>
</td>
<td width="38" valign="top">
<p>130</p>
</td>
<td width="38" valign="top">
<p>95</p>
</td>
<td width="38" valign="top">
<p>107</p>
</td>
<td width="38" valign="top">
<p>129</p>
</td>
</tr>
<tr>
<td width="100" valign="top">
<p>Нижн. Квартиль</p>
</td>
<td width="38" valign="top">
<p>104</p>
</td>
<td width="38" valign="top">
<p>118</p>
</td>
<td width="38" valign="top">
<p>130</p>
</td>
<td width="38" valign="top">
<p>15</p>
</td>
<td width="38" valign="top">
<p>9</p>
</td>
<td width="38" valign="top">
<p>3</p>
</td>
<td width="38" valign="top">
<p>69</p>
</td>
<td width="38" valign="top">
<p>99</p>
</td>
<td width="38" valign="top">
<p>106</p>
</td>
<td width="38" valign="top">
<p>56</p>
</td>
<td width="38" valign="top">
<p>80</p>
</td>
<td width="38" valign="top">
<p>105</p>
</td>
</tr>
<tr>
<td width="100" valign="top">
<p>Верхн. Квартиль</p>
</td>
<td width="38" valign="top">
<p>111</p>
</td>
<td width="38" valign="top">
<p>125</p>
</td>
<td width="38" valign="top">
<p>136</p>
</td>
<td width="38" valign="top">
<p>21</p>
</td>
<td width="38" valign="top">
<p>13</p>
</td>
<td width="38" valign="top">
<p>6</p>
</td>
<td width="38" valign="top">
<p>90</p>
</td>
<td width="38" valign="top">
<p>111</p>
</td>
<td width="38" valign="top">
<p>124</p>
</td>
<td width="38" valign="top">
<p>76</p>
</td>
<td width="38" valign="top">
<p>93</p>
</td>
<td width="38" valign="top">
<p>117</p>
</td>
</tr>
</tbody>
</table>

</div>
</div>
</body>
</html>