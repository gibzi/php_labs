<!DOCTYPE html>


<html>
	<head>
		<title>Test PHP</title>
	</head>
	<body>

		<?php
			echo "----------------------------------------------- Test -----------------------------------------------<br><br>";

			$a11 = 1;
			$a12 = 5;
			$a21 = 3;
			$a22 = 5;
			$b1 = 5;
			$b2 = 13; 

			$D = -10;
			$Dx = -40;
			$Dy = -2;
			$x;
			$y;

			$matrix[0] = array($a11, $a12);
			$matrix[1] = array($a21, $a22);

			$b[0] = $b1;
			$b[1] = $b2;

			list($x, $y) = solve($matrix, $b);

			echo "Решение<br>"; 
  			echo "X = $x<br />"; 
  			echo "Y = $y<br />";

			// Проверка 

  			echo "Проверка<br>"; 
			$pr_1 = $a11 * $x + $a12 * $y -$b1; 
			echo $pr_1;
			echo "<br>"; 
			$pr_2 = $a21 * $x + $a22 * $y -$b2; 
			echo $pr_2;
			echo "<br><br>"; 

			function solve($matrix, $b){
				// Вычисляем детерминант исходной матрицы 
    			$determinant = determinant($matrix); 

				for($i = 0; $i < 3; $i++) 
			    { 
			    	$xd[$i] = $matrix[$i]; 
			    	$xd[$i][0] = $b[$i]; 
			    	$yd[$i] = $matrix[$i]; 
	      		 	$yd[$i][1] = $b[$i]; 
			    } 
			    $x = determinant($xd) / $determinant; 
			    $y = determinant($yd) / $determinant;

			    return array($x, $y); 
			}

			// Детерминант матрицы 
			function determinant($m) 
			{ 
			  return $m[0][0] * $m[1][1]  - $m[1][0] * $m[0][1]; 
			}

			$x = number_format($x, 2, ',', ' ');
			$y = number_format($y, 2, ',', ' ');

			echo "<table width = '500px' border='1px'>";
			echo "<tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='6'>Коэффициенты системы</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td>a11</td>";
			            echo "<td>a12</td>";
			            echo "<td>a21</td>";
			            echo "<td>a22</td>";
			            echo "<td>b1</td>";
			            echo "<td>b2</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td>$a11</td>";
			            echo "<td>$a12</td>";
			            echo "<td>$a21</td>";
			            echo "<td>$a22</td>";
			            echo "<td>$b1</td>";
			            echo "<td>$b2</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='6'>Определители</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='2'>Δ</td>";
			            echo "<td colspan='2'>Δx</td>";
			            echo "<td colspan='2'>Δy</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='2'>$D</td>";
			            echo "<td colspan='2'>$Dx</td>";
			            echo "<td colspan='2'>$Dy</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='6'>Результаты решения</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='3'>x=$x</td>";
			            echo "<td colspan='3'>y=$y</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='6'>Проверка</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='6'>a11 * x + a12 * y - b1 = $pr_1</td>";
			        echo "</tr>";
			        echo "<tr align='center'>";
			            echo "<td colspan='6'>a21 * x + a22 * y - b2 = $pr_2</td>";
			        echo "</tr>";
			echo "</table>";
			echo "<br>";

			//-----------------------------------------------------1
			echo "<br><br>----------------------------------------------- 1 -----------------------------------------------<br>";

			$str = "To be or not to be. What this question?";
			echo $str;
			echo "<br>" . (strlen($str));

			$a = pow(ceil(sqrt(strlen($str))),2);
			$b = sqrt($a);
			echo "<br>" . $a . "<br>";

			$koll_space_add = $a - strlen($str);

			$i =0;
			$use_space =0;
			$move = 0;
			
			$arr0 = explode(" ", $str);
			$len_arr = count($arr0);
			$count_space = $len_arr -1;

			$i=0;

			while ($use_space <= $koll_space_add)
			{
			    if( $i==$len_arr)
			    {
			        $i=0;
			    }

			    $arr0[$i] = $arr0[$i]." ";
			    $use_space++;
			    $i++;
			}

			$newstr = implode(" ", $arr0);
			echo $newstr;

			//---------------------- матрица с буквами

			$arr2[] = array();
			$l = 0;

			for ($i=0; $i<$b; $i++)
			{
			    for($j=0; $j<$b; $j++)
			    {
			        $arr2[$i][$j] = ($newstr[$l]);
			        $l++;
			    }
			}

			echo "<table border='1px'>";
			    for ($i = 0; $i < $b; $i++) {
			        echo "<tr>";
			        for ($j = 0; $j < $b; $j++) {
			            echo "<td width = '25px'>";
			            echo $arr2[$i][$j];  
			            echo "</td>";
			        }
			        echo "</tr>";
			    }
			echo "</table>";
			echo "<br>";

			//---------------------- матрица с кодами

			$arr1[] = array();
			$k = 0;

			for ($i=0; $i<$b; $i++)
			{
			    for($j=0; $j<$b; $j++)
			    {
			        $arr1[$i][$j]= ord($newstr[$k]);
			        $k++;
			    }
			}

			echo "<table border='1px'>";
			    for ($i = 0; $i < $b; $i++) {
			        echo "<tr>";
			        for ($j = 0; $j < $b; $j++) {
			            echo "<td width = '25px'>";
			            echo $arr1[$i][$j];  
			            echo "</td>";
			        }
			        echo "</tr>";
			    }
			echo "</table>";

			//---------------------- диагонали

			echo"<br>Основная диагональ: <br>";
			for ($i=0; $i<$b; $i++)
			{
			    for ($j=0; $j<$b; $j++)
			    {
			        if($i==$j)
			        {
			            echo ($arr2[$i][$j]);
			        }
			    }
			}

			echo"<br><br>"; echo"Побочная диагональ: <br>";

			for ($i=0; $i<$b; $i++)
			{
			    for ($j=0; $j<$b; $j++)
			    {
			        if($i+$j==$b-1)
			        {
			            echo chr($arr1[$i][$j]);
			        }
			    }
			}

			//--------------------------сортировка
			$sort_arr1 = array();


			for ($j=0; $j<$b; $j++)
			{
			    if($j%2 == 0) {

			        for ($k=1; $k<$b+6; $k++) {
			        for ($i = 0; $i < $b-1; $i++)
			        {
			                if ($arr1[$i][$j] > $arr1[$i + 1][$j]) {
			                    $tmp_var = $arr1[$i + 1][$j];
			                    $arr1[$i + 1][$j] = $arr1[$i][$j];
			                    $arr1[$i][$j] = $tmp_var;
			                }
			            }
			        }
			    }


			    else{
			        for ($k=1; $k<$b+6; $k++) {
			            for ($i = 0; $i < $b - 1; $i++) {
			                if ($arr1[$i][$j] < $arr1[$i + 1][$j]) {
			                    $tmp_var = $arr1[$i + 1][$j];
			                    $arr1[$i + 1][$j] = $arr1[$i][$j];
			                    $arr1[$i][$j] = $tmp_var;
			                }
			            }
			        }
			    }

			}

			echo"<br><br>";
			
			echo "Отсортированные столбцы: четные по возрастанию, нечетные по убыванию. <br> 0 считается четным столбцом, так как остача 0.";

			echo "<table border='1px'>";
			    for ($i = 0; $i < $b; $i++) {
			        echo "<tr>";
				        for ($j = 0; $j < $b; $j++) {
				            echo "<td width = '25px'>";
				            echo $arr1[$i][$j];
				           echo "</td>";
				        }
			        echo "</tr>";
			    }
			echo "</table>";
			echo "<br>";

			echo "<table border='1px'>";
			    for ($i = 0; $i < $b; $i++) {
			        echo "<tr>";
				        for ($j = 0; $j < $b; $j++) {
				            echo "<td width = '25px'>";
				            echo chr($arr1[$i][$j]);
				           echo "</td>";
				        }
			        echo "</tr>";
			    }
			echo "</table>";

			//-------------------------------------------------2
			echo "<br>----------------------------------------------- 2 -----------------------------------------------<br>";
			$str1 = "To be or not to be. What this question?";
			echo $str1 . "<br>";
			$koll_symbl = strlen($str1);

			if($koll_symbl%2 !==0)
			{
			    $str1 = $str1." ";
			}

			$polovina_str1 = $koll_symbl/2;
			$str_1 = substr($str1, 0, $polovina_str1);
			$str_2 = substr($str1, $polovina_str1);

			$arr_str1 = str_split($str_1);
			$arr_str2 = str_split($str_2);

			sort($arr_str1);  arsort($arr_str2);

			$str1_1 = implode($arr_str1);
			$str1_2 = implode($arr_str2);

			$newStr = $str1_1." ".$str1_2;
			echo $newStr;
			echo "<br><br>";

			//------------------------------------------------3

			echo "----------------------------------------------- 3 -----------------------------------------------<br>";
			$Alfa = 30;
			$arr_x = array();
			$arr_y = array();
			$n = 10;

			for($i=0;$i<$n;$i++)
			{
			    $arr_x[$i]=round(rand(0, 100)/35.78978, 3);
			}

			$str_arr_x = implode(", ", $arr_x);
			echo "Array x: " . $str_arr_x;
			echo "<br>";

			for($i=0;$i<$n;$i++)
			{
			    $arr_y[$i]=round(rand(0, 100)/35.78978, 3);
			}

			$str_arr_y = implode(", ", $arr_y);
			echo "Array y: " . $str_arr_y;
			echo "<br>";

			$arr_x_pow = array();

			for($i=0;$i<$n;$i++)
			{
			    $arr_x_pow[$i]=pow($arr_x[$i],2);
			}


			$S = (pow(M_PI - cos(deg2rad($Alfa)), 1/3) / array_sum($arr_x_pow)) + array_sum($arr_x) + array_sum($arr_y);

			echo "S= ".$S;

			//--------------------------------------------------------------4

			echo "<br><br>----------------------------------------------- 4 -----------------------------------------------<br>";
			for($i=0;$i<$n;$i++)
			{
			    $arr_x[$i]=rand(0, 100);
			}

			for($i=0;$i<$n;$i++)
			{
			    $arr_y[$i]=round(rand(0, 100)/5.789, 2);
			}

			echo "Array X: ";
			foreach ($arr_x as $el)
			{
			    echo $el.", ";
			}

			echo "<br>";

			echo "Array Y: ";
			foreach ($arr_y as $el)
			{
			    echo $el.", ";
			}

			for ($j = 0; $j < $n; $j++){
			    for ($i = 0; $i < $n - 1; $i++){

			        if ($arr_x[$i] > $arr_x[$i + 1]){

			            $tmp_var = $arr_x[$i + 1];
			            $arr_x[$i + 1] = $arr_x[$i];
			            $arr_x[$i] = $tmp_var;
			        }
			    }
			}

			$maxX = $arr_x[$n-1];
			$minX = $arr_x[0];

			for ($j = 0; $j < $n; $j++){
			    for ($i = 0; $i < $n - 1; $i++){

			        if ($arr_y[$i] > $arr_y[$i + 1]){

			            $tmp_var = $arr_y[$i + 1];
			            $arr_y[$i + 1] = $arr_y[$i];
			            $arr_y[$i] = $tmp_var;
			        }
			    }
			}

			$maxY = $arr_y[$n-1];
			$minY = $arr_y[0];

			echo "<br><br>";
			echo "Max X: " . $maxX . "<br>";
			echo "Min X: " . $minX."<br>";
			echo "Max Y: " . $maxY."<br>";
			echo "Min Y: " . $minY."<br>";
			echo "<br>";

			$D = sqrt(abs(($maxY - $minY)/($maxX - $minX)));
			echo $D;

			//--------------------------------------------------------------5

			echo "<br><br>----------------------------------------------- 5 -----------------------------------------------<br>";

			$x = rand(-10,20);
			echo $x."<br>";

			if ($x <= 0)
			{
			    $f = "Red";
			}

			elseif ($x > 0 && $x<=10)
			{
			    $f = "Yellow";
			}

			else
			{
			    $f = "Green";
			}

			echo $f;
		?>

	</body>
</html>