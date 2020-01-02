<!DOCTYPE html>


<html>
	<head>
		<title>Test PHP</title>
	</head>
	<body>

		<?php
		//--------------------1
			//$arr = array('Привет, ', 'мир', '!');

			$arr=[
				[1,2,3],
				[4,5,6],
				[7,8,9],
			];
			var_dump($arr);

			$arr2[1]=[1,2,3];
			$arr2[2]=[4,5,6];
			$arr2[3]=[7,8,9];
			var_dump($arr2);

			$arrayName = array('1' =>[1,2,3] ,'2'=>[4,5,6],'3'=>[7,8,9] );
			var_dump($arrayName);

			$arr3 = array([1,2,3],[4,5,6],[7,8,9]);
			var_dump($arr3);

			echo "<table border='1px'>";
				
				for($i = 0; $i<3; $i++){
					echo "<tr>";
					for($j = 0; $j<3; $j++){
						echo "<td>{$arr[$i][$j]}</td>";
					}
					echo "</tr>";
					
				}

				
			echo "</table>";
			echo "<br>---------------------------------------------------------------<br>";
			$arr = ['Привет, ', 'мир', '!'];

			$str = implode("", $arr);
			echo $str;
			echo "<br>";

			$hello = $arr[0];
			$world = $arr[1];
			$symbol = $arr[2];

			echo $hello . $world . $symbol;
			echo "<br>";

			for ($int = 0; $int < count($arr); $int++){
				echo $arr[$int];
			}
			echo "<br><br>";


		//------------------------2
			$arr[0] = 'Пока, ';
			$str = implode("", $arr);
			echo $str;
			echo "<br>";

			for ($int = 0; $int < count($arr); $int++){
				echo $arr[$int];
			}
			echo "<br><br>";

		//------------------------3
			$salary = array('Коля' => '1000$', 'Петя' => '200$', 'Вася' => '500$');
			print_r(array_keys($salary, '1000$'));
			echo "<br>";

			echo($salary['Коля']);
			echo "<br>";

			echo($salary['Вася']);
			echo "<br><br>";

		//------------------------4
			$arr = [
				'ru' => ['голубой', 'красный', 'зеленый'],
				'en' => ['blue', 'red', 'green'],
			];

			echo $arr['ru'][0];
			echo "<br><br>";

		//-----------------------------------------------------------------------------------------5
			$arr = ['a', 'b', 'c', 'd'];

			var_dump($arr);
			echo "<br>";

			echo $arr[0];
			echo "<br>";
			echo $arr[1];
			echo "<br>";

			echo $arr[0] . "+" . $arr[1] . ", " . $arr[2] . "+" . $arr[3];
			echo "<br><br>";

		//---------------------------6
			$arr = [2, 5, 3, 9];
			$result = ($arr[0] * $arr[1]) + ($arr[2]*$arr[3]);
			echo $arr[0] . "*" . $arr[1] . "+" . $arr[2] . "*" . $arr[3] . "=";
			echo $result;
			echo "<br><br>";
		//---------------------------7
			$arr[] = 1;
			$arr[] = 2;
			//var_dump($arr);
		//---------------------------8
			$arr = ['a'=>1, 'b'=>2, 'c'=>3];
			echo ($arr['a']+$arr['b']+$arr['c']);
			echo "<br><br>";
		//---------------------------9
			$days = array(1=>'Пн', 2=>'Вт', 3=>'Ср', 4=>'Чт', 5=>'Пт', 6=>'Сб', 7=>'Вс');
			$day = date("N");
			echo $days[$day];
			echo "<br><br>";
		//---------------------------10
			$arr = [
				'cms'=>['joomla', 'wordpress', 'drupal'],
				'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
			];

			echo $arr['cms'][0];
			echo "<br>";
			echo $arr['colors']['green'];
			echo "<br><br>";

		//---------------------------11
			$arrDays = [
				'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
				'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
			];

			echo $arrDays['ru'][0];
			echo "<br>";
			echo $arrDays['en'][2];
			echo "<br><br>";

			$lang = 'ru';
			$day = '2';
			echo $arrDays[$lang][$day];
			echo "<br><br>";
		//---------------------------12

			$arr_3["Коля"]="130";
			$arr_3["Андрей"]="500";
			$arr_3["Петя"]="400";
			echo $arr_3["Петя"]." ". $arr_3["Коля"];
			echo "<br>";
			echo "<br>";

			$lol = array_keys($arr_3);
			var_dump($lol);			
			echo "<br>";

			echo $arr_3["Андрей"];
			echo "<br>";

			$lol_1 = array_values($arr_3);
			//echo $lol_1; //array
			//---------------------------------------

			$arr = ['Коля'=>'250', 'Вася'=>'1200', 'Петя'=>'500'];

			$keys = array_keys($arr);
			$values = array_values($arr);

			echo "<table border='10px' width = '50%'>";
				echo "<tr bgcolor = '#00BFFF'>";
					echo "<th colspan='3'>Заработные платы</th>";
				echo "</tr>";
				echo "<tr bgcolor = '#00CED1'>";
					echo "<th> {$keys[0]} </th>";
					echo "<th> {$keys[1]} </th>";
					echo "<th> {$keys[2]} </th>";
				echo "</tr>";
				echo "<tr align = 'center' bgcolor='#66CDAA'>";
					echo "<td> {$values[0]} </td>";
					echo "<td> {$values[1]} </td>";
					echo "<td> {$values[2]} </td>";
				echo "</tr>";
			echo "</table>";
			echo "<br>";

			$str = "To be or not to be. What this question?";
			echo $str;
			echo "<br>";
			
			$arr = str_split($str);
			print_r($arr);
			echo "<br>";

			sort($arr);
			print_r($arr);
			echo "<br>";

			$sortStr = implode("", $arr);
			echo $sortStr;
			echo "<br><br>";
		//---------------------------13

		echo "<br>-----------------------------------------------------------------<br><br>";

			$names[0] = 'Александр';
			$names[1] = 'Елизавета';
			$names[2] = 'Лиза';

			var_dump($names);
			echo "<br><br>";

			list ($alex, $elizaveta, $liza) = $names;
			var_dump($alex);
			var_dump($elizaveta);
			echo "<br><br>";
			//------------------------------------------------
			$arr = array(); //пустой массив
			$arr2 = array("Елизавета","Шуляк", "Анатольевна");

			// Создает ассоциативный массив 
			$arr3 = array("Елизавета" => "Лиза", "Александр" => "Саша");

			// Создает многомерный ассоциативный массив:
			$arr4 = array("name" => "Катя", "age" => "24", "email"=>"ivanov@mail.ru");
			$arr4 = array("name"=>"Петров", "age"=>"34", "email"=>"petrov@mail.ru");
			$arr4 = array("name"=>"Сидоров", "age"=>"47", "email"=>"sidorov@mail.ru");

			var_dump ($arr);
			echo "<br>";
			var_dump ($arr2);
			echo "<br>";
			var_dump ($arr3);
			echo "<br>";
			var_dump ($arr4);
			echo "<br><br>";
			//-----------------------------------------------------
			$A=array("a"=>"Z","b"=>"W","c"=>"A","d"=>"P");
			var_dump ($A);
			echo "<br>";

			asort($A);
			var_dump($A);
			echo "<br>";

			array_reverse($A);
			var_dump ($A);
			echo "<br>";

			sort($A);
			var_dump($A);
			echo "<br><br>";
			//--------------------------------------------------
			$Aa=array("40", "20", "10", "80", "50", "90","30","70");
			var_dump($Aa);
			echo "<br>";

			sort($Aa);
			var_dump ($Aa);
			echo "<br>";

			shuffle($Aa);
			foreach($Aa as $V) echo $V." ";
			echo "<br>";

			shuffle($Aa);
			foreach($Aa as $V) echo $V." ";
			echo "<br>";

			shuffle($Aa);
			foreach($Aa as $V) echo $V." ";
			echo "<br>";
			var_dump($Aa);
			echo "<br><br>";

			//------------------------------------------------------
			$A=array("40", "20", "10", "80", "50", "90","30","70", "70");
			var_dump($A);
			echo "<br>";

			$A=array_flip($A);
			var_dump($A);
			echo "<br>";

			$B=array_keys($arr4);
			var_dump($B);
			echo "<br>";

			$B = array_values($arr4);
			var_dump($B);
			echo "<br>";

			$B = in_array("Z", $A);
			var_dump($B);
			echo $B;
			echo "<br>";

			$AA=array("a"=>"40", "b"=>"50","c"=> "70", "d"=>"80", "e"=>"50", "f"=>"90","d"=>"50","h"=>"70");
			$B=array_count_values($AA);
			var_dump($B);
			echo "<br><br>";

			//------------------------------------
			$A = array("1"=>"первый", "2"=>"Второй");
			$B = array("1"=>"Третий", "2"=>"Четвертый");
			$C = $A + $B;
			var_dump($C);
			echo "<br><br>";
			//-----

			$AAA[]= array(0=>1, 1=>2);
			$AAA[] = array(0=>3, 1=>4);
			$BBB[] = array(0=>5, 1=>6);
			$BBB[] = array(0=>7, 1=>8);
			$BBB[]=array(0=>9, 1=>10);

			echo "Массив А  +  Массив В","<br>";
			$CCC = $AAA + $BBB;
			var_dump($CCC);
			echo "<br>";

			echo "Массив B  +  Массив A","<br>";
			$CCC=$BBB+$AAA;
			var_dump($CCC);
		?>

	</body>
</html>