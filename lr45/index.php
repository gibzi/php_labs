<!DOCTYPE html>


<html>
	<head>
		<title>Test PHP</title>
	</head>
	<body>

		<?php
		$a = 10;
		$b = 4;
		$c = $a%$b;
		$sum = $a + $b;
		$raz = $a - $b;
		$del = $a / $b;
		$umnoj = $a * $b;
		$step = $a ** $b;
		echo "Целочисленный остаток от деления $a%$b равен $c";
		echo "<br/>";

		echo "$a-$b=$raz";
		echo "</br>";

		echo "$a/$b=$del";
		echo "</br>";

		echo "$a*$b=$umnoj";
		echo "</br>";

		echo "$a ** $b = $step";
		echo "</br>";
//--------------------------------------------
		$p = 10; 
		echo "p = $p, ";
		$prefink = ++$p;
		$postink = $p++;
		echo "++p = $prefink, p++ = $postink";
		echo "</br>";

		$m = 10;
		echo "m = $m, ";
		$prefdik = --$m;
		$postdik = $m--;
		echo "--m = $prefdik, m-- = $postdik"; 
		echo "</br>";

		$word = 'abc';
		$wordink = $word++; 
		echo "word = $word, word++ = $wordink"; 
		echo "</br>";

		$a = "Hello ";
		$b = $a . "Word!";
		echo "$b";
		echo "</br>";

		$a .="Word!";
		echo "$a";
		echo "</br>";
//-----------------------------------------------
		$a = 12;
		$b = $a|6;
		$c = $a & 6;
		$d = $a ^ 6;
		$e = $a << 2;
		$f = ~$a;
		echo "12|6 = $b"; //14
		echo "</br>";
		echo "12 & 6 = $c"; //4
		echo "</br>";
		echo "12^6 = $d"; //10
		echo "</br>";
		echo "$a << 2 = $e"; //48 
		echo "</br>";
		echo "~$a = $f"; //-13
		echo "</br>";

		//== === != <> !=== < > <= >=

		$a = 10.1 + 0.9; //переменная типа float
		$b = 11; //переменнаям типа integer
		  if ($a==$b) {
		      echo 'true';
		    }
		  else {
		      echo 'false';
		} // результат  true
		echo "<br>";

		if ($a===$b) {
		      echo 'true';
		    }
		  else {
		      echo 'false';
		} // результат  false
		echo "<br>";

		if ($a!==$b) {
		     echo 'true';
		    }
		  else {
		     echo 'false';
		} // результат  true
		echo "<br>";
//-----------------------------------логич операции
		//and or xor ! && ||
		$a = 10;
		$b = -5;
		  if ($a > 0 and $b > 0) {
		    echo 'true';
		} else {
		    echo 'false';
		}
		echo "<br>";


		$a = 10;
		$b = "10";
		  if($a==$b) echo "a и b равны"; // Выводит "a и b равны"
		echo "<br>";

		$a = 0; // ноль
		$b = ""; // пустая строка
		  if($a==$b) echo "a и b равны"; // Выводит "a и b равны"
		echo "<br>";

		$a = 0; // ноль
		$b = ""; // пустая строка
		echo ($a===$b) ? "a и b равны" : "a и b не равны";
		echo "<br>";

		//-----------------------
		$a = array("apple", "banana");
		$b = array(1 => "banana", "0" => "apple");

		if ($a == $b) echo "сработало =="; // bool(true)
		if ($a === $b) echo "сработало ==="; // bool(false)
		echo "<br>";

		$i = 'W';
		for($n = 0; $n < 6; $n++){
		  echo ++$i;
		  echo "<br>";
		}

		$a=2;
		$b = 3;
		$c = $a**$b;
		echo("$a**$b=$c");

		/*
		   Результат работы будет следующий:
		X
		Y
		Z
		AA
		AB
		AC
		*/
		var_dump(floor(3.9));
		var_dump(ceil(3.9));
		//var_dump(expression)

		?>

	</body>
</html>