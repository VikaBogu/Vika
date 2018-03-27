<?php
/*
Автор: Богучарова Виктория Владимировна
Тема: Создание таблицы Пифагора, с помощью рнр-кода;
$tr-– переменная строки, начинаем с единицы;
$tr-– переменная столбца, начинаем с единицы;
$stroka - строка;
$stolbets - столбец;
Для того, чтобы у нас получилась таблица умножения, было использовано два цикла.
*/
$stroka=10;
$stolbets=10;
$out="";
for ($tr = 1; $tr <= $stroka; $tr ++)
{
	$out.="<table class='dizain' align='center'>\n";
	$out.="\t<tr>\n";
	for($td = 1;$td <=$stolbets; $td++)
	{
		$style="";

		if ($td == 1 or $tr ==1){
			$style= "<td class='pervoyastr'>" .$tr * $td."</td>\n";
			$out.="$style";
			
			
		}
		elseif ($tr>1 and $tr<10 and $td==10){
			$style= "<td class='postcol'>" .$tr * $td."</td>\n";
			$out.="$style"; 
			
		}
		elseif ($tr==10 and $td>1){
			$style= "<td class='poslstr'>" .$tr * $td."</td>\n";
			$out.="$style"; 
			
		}
		else {
			$out.="\t\t<td class='vtorayastr'>" .$tr * $td."</td>\n";
		}

		unset($style);
	}
	$out.="\t</tr>\n";
	$out.="</table>";
	}   
	require "testovoe_zadanie.tpl";
?>
