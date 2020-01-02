<!DOCTYPE html>


<html>
<head>
    <title>Test PHP</title>
</head>
<body>

<?php
$beer = 'Heineken';
echo "$beer's taste is great"; // работает, "'" это неверный символ для имени переменной
echo "</br>";

echo "He drank some $beers"; // не работает, 's' это верный символ для имени переменной
echo "</br>";

echo "He drank some ${beer}s "; // работает
echo "He drank some {$beer}s"; // работает
echo "</br>";
//----------------------------------------------------------------

error_reporting(E_ALL);
$fruits = array('strawberry' => 'red', 'banana' => 'yellow');

echo "A banana is $fruits[banana].";
echo "</br>";

echo "A banana is {$fruits['banana']}.";
echo "</br>";

echo "A banana is {$fruits[banana]}."; // Работает, но PHP сначала ищет константу banana.
echo "</br></br>";

//echo "A banana is $fruits['banana']."; // Не работает, используйте фигурные скобки. Это вызовет ошибку обработки.

echo "A banana is " . $fruits['banana'] . ".";
echo "</br>";

// Пример работы с массивом
$arr[0][0]="00";
$arr[1][0]="10";
$arr[0][1]="01";
$arr[1][1]="11";
var_dump ($arr);
echo "<br>";
echo "Это работает: {$arr[1][1]}";
echo "<br><br>";

$a = '0';
$b = 0;
if($a ==$b){echo "+++";};
//-------------------------------------------------------------
$great = 'fantastic';

echo "This is { $great}"; //This is { fantastic}
//echo "</br>";

echo "This is {$great}";
echo "This is ${great}";
echo "</br>";

//---------------------
// Получение первого символа строки
$str = 'Это тест.';
$first = $str{0};

// Получение третьего символа строки
$third = $str{2};

// Получение последнего символа строки
$str = 'Это все еще тест.';
$last = $str{strlen($str)-1};

// Изменение последнего символа строки
$str = 'Посмотри на море';
$str{strlen($str)-1} = 'я';

$a = "Hello ";
$b = $a . "World!"; // $b содержит строку "Hello World!" - Это конкатенация

$a = "Hello ";
$a .= "World!";     // $a содержит строку "Hello World!" - Это присвоение с конкатенацией

$x="Строка";
$y="Строка";
$z="Строчка";
if ($x == $z) echo "<p>Строка X равна строке Z</p>";
if ($x == $y) echo "<p>Строка X равна строке Y</p>"; // Строка X равна строке Y
if ($x != $z) echo "<p>Строка X НЕ равна строке Z</p>"; // Строка X НЕ равна строке Z

$name = "Elizaveta";
echo strlen($name)."</br>";
echo strpos($name, "zav")."</br>";
echo strpos($name, "ve", 2)."</br>";

if (strpos("Norway","rwa") !== false) echo "Строка rwa есть в Norway"."</br>";
// При сравнении используйте операторы тождественных сравнений (===) (!==) чтобы избежать проблем с определением типов

$str = "Programmer";
echo substr($str,0,2)."</br>"; // Выводит Pr
echo substr($str,-3,3)."</br>"; // Выводит mer
echo str_replace("m", "l", $str)."</br>"; //Prograller

$str = "Это текст электронного письма, которое нужно будет отправить адресату...";
// Разбиваем текст по 20 символов
$str = WordWrap ($str, 20, "<br>");
echo $str."</br></br>";

//------------------1
echo "--------------------------------------------------------<br>";
$Kd = 2;
$T = 3;
$Khb = 4;
$wbd = 1;
$QH = 7;
$dw = $Kd * pow(((pow($T, 2) * $Khb) / ($wbd * pow($QH, 2))), 1/3);
echo $dw;
echo "<br><br>";

//-----------------2
$main_str = "Hello, my name is Liz and I am really glad to see you";
$sub_str = "lad t";
$middle = (ceil(strlen($main_str)/2));
$main_str2 = substr($main_str, $middle);

if(stristr($main_str2, $sub_str) === false){
    echo $sub_str . ' не найдена во второй части строки';
}
else{
    echo $sub_str . ' найдена во второй части строки';
}
echo "</br></br>";

//----------------3

if(stristr($main_str, $sub_str) === false){
    echo $sub_str . ' не найдена в строке';
}
else{
    $pos = stripos($main_str, $sub_str);

    echo substr($main_str, ($pos-1), 1);
    echo $main_str[--$pos];
    echo "</br>";

    echo substr($main_str, $pos+1, strlen($sub_str));
    echo "</br>";

    echo substr($main_str, $pos+1+strlen($sub_str),1);
    $secondPos = $pos+1+strlen($sub_str);
    echo $main_str[$secondPos];
}
echo "</br></br>";
//-----------------------4
$n = rand(1, $middle);
$firstStr = substr($main_str, 0, $n);
echo "n = $n";
echo "</br>";
echo $firstStr;
echo "</br>";

$lastStr = substr($main_str, -$n);
echo $lastStr;
echo "</br>";

if($firstStr == $lastStr){
    echo "строки равны";
}
else{
    echo "строки не равны";
}
echo "</br></br>";

//-----------------------5
$abc = "abc abc abc";
$posStart = strpos($abc, 'b');
echo $posStart . ", ";

$posEnd = strrpos($abc, 'b');
echo $posEnd . ", ";

$pos3 = strpos($abc, 'b', 3);
echo $pos3;
echo "</br></br>";

//-----------------------6
$aaa = "aaa aaaaa aaa aaaa aaa";
$pos = strpos($aaa, ' ');
$pos2 = strpos($aaa, ' ', $pos+strlen(' '));
echo $pos2;
echo "</br></br>";

//-----------------------7
$str123 = '1234567890';
$arr = str_split($str123, 2);
print_r($arr);
echo "</br></br>";

//-----------------------8
$combine = implode("-", $arr);
echo $combine;
echo "</br></br>";

//-----------------------9
$php = '/php/';
$textPhp1 = ltrim($php, "/");
$textPhp2 = rtrim($textPhp1, "/");
echo $textPhp2;
echo "</br>";

$textPhp = trim($php, "/");
echo $textPhp;
echo "</br></br>";

//----------------------10
$words = 'слова слова слова.';
$wordsRtrim = rtrim($words, ".") . ".";
echo $wordsRtrim;
echo "</br></br>";

//----------------------11
$poli = 'madam';
$revers = strrev($poli);
if($poli == $revers){
    echo "слово $poli является полиномом";
}
else{
    echo "слово $poli не является полиномом";
}
echo "</br></br>";

//---------------------12
$shuffled = str_shuffle($main_str);
echo "Перемешанная строка: $shuffled";
echo "</br></br>";

//---------------------13
$strabc = 'abcdefghijklmnopqrstuvwxyz';
$strabc6 = str_shuffle($strabc);
echo substr($strabc6, 0, 6);
echo "<br></br>";
//---------------------14
$s12345678 = '12345678';
$s12_3 = number_format($s12345678, 0, ' ', ' ');
echo $s12_3;
echo "<br></br>";

//----------------------15
$ab_cd = 'ab--cd--ef';
echo $ab_cd;
echo "<br>";
$_cd = strstr($ab_cd, '-');
echo $_cd;
echo "<br></br>";

$a="liza";
echo $a;
$v=strtoupper($a);
echo $v;
$d=strrev($a);
echo $d;

echo"<br><br>-------------------------------------------------<br>";


$a="abcdef";
echo "исходная строка: " . $a;
echo "<br>";
$substr2 = substr($a, -2);
echo "Подстрока, которую нужно перевести в верхний регистр: " . $substr2;
echo"<br>";
$substr3 = strtoupper($substr2);
echo "Перевели в верхний регистр: " . $substr3;
echo "<br>";

$final = strtr($a, $substr2, $substr3);
$final1 = strtr($a, "ef", "EF");

echo "Итоговая строка: <br>" . $final;
echo"<br>";

echo $final1 . "<br>";

echo str_replace($substr2, $substr3, $a)."</br>";

echo substr_replace($a, $substr3, -2)."</br>";

$last = $a{strlen($a)-1};
$previous = $a{strlen($a)-2};
$end = $previous . $last;
echo $end . "<br>";

$aa="abcdef";
$arr = str_split($aa);
array_splice($arr, -2, 2, array("F", "E"));
var_dump($arr);


echo"<br>-------------------------------------------------<br>";





//-------------------
$string_16 = "to be or not to be: what this question?";
echo strlen($string_16)/3;
$str_16 = str_split($string_16, 13);
echo "<br>";
echo $string_16;
echo "<br>";
$a =strlen($string_16)/3;
$str_part_1 = substr($string_16, 0, strlen($string_16)/3);
$str_part_2 = substr($string_16, $a,$a+$a);
$str_part_3 = substr($string_16, $a+$a,strlen($string_16));
$str_new = strrev($str_part_2);
echo "$str_part_3 $str_new $str_part_1";

?>

</body>
</html>