<!--
--><?php
/*$multi1 =1;
$multi2=1;
$length=3;
$nelength=0;

$array = [];
for ( $i = 0; $i < 4; $i++ ) {
    for ($j = 0; $j < 4; $j++) {
        $array[$i][$j] = rand( -5, 5 );
        if ($i==$j) $multi1=$multi1*$array[$i][$j];
        if ($i==$length and $j==$nelength)
        {
            $multi2=$multi2*$array[$i][$j];
            $length=$length-1;
            $nelength=$nelength+1;
        }
    }
}

for ( $i = 0; $i < 4; $i++ ) {

    for ($j = 0; $j < 4; $j++) {
        echo $array[$i][$j]." ";
    }
    echo "<br>";
}


echo '<table bgcolor="red" align="center" border="1" width="50%" height="50%">';
echo '  <caption> <marquee>Я люблю PHP</marquee></caption>';
foreach ($array as $result){
    echo "<tr bgcolor='white'>";
    foreach ($result as $Value){
        echo "<td align='center' ><i><b>{$Value}</b></i></td>";
    }
    echo "</tr>";
}
echo "</table>";


echo 'Я ГЛАВНАЯ! ' . $multi1;
echo '<br>';
echo 'а я не очень главная =*( ' . $multi2;
echo '<br>';
$raznosti= $multi1+$multi2;
echo 'Я их не СУММА! ' . $raznosti;*/

/*$multi1 =1;
$multi2=1;
$length=3;
$nelength=0;
echo '<table bgcolor="red" align="center" border="1" width="50%" height="50%">';
echo '  <caption> <marquee>Я люблю PHP</marquee></caption>';
$array = [];
for ( $i = 0; $i < 4; $i++ ) {
    for ($j = 0; $j < 4; $j++) {
        $array[$i][$j] = rand( -5, 5 );
        if ($j==0)  echo "<tr bgcolor='white'>";
        if ($i==$j) $multi1=$multi1*$array[$i][$j];
        if ($i==$length and $j==$nelength)
        {

            $multi2=$multi2*$array[$i][$j];
            $length=$length-1;
            $nelength=$nelength+1;
        }
        echo "<td align='center' ><i><b>{$array[$i][$j]}</b></i></td>";
        if ($j==3) echo "</tr>";
    }
}
echo "</table>";
echo "<table border='1' align='center' width='50%'";
for($i=0;$i<4;$i++){
    echo "<tr align='center'>";
    for($j=0;$j<4;$j++){
        echo "<td>$array[$i][$j]";
    }
    $s1=$s1*$array[$i][$j];
    $s2=$s2*$array[$i][4-$j];
}

echo 'Я ГЛАВНАЯ! ' . $multi1;
echo '<br>';
echo 'а я не очень главная =*( ' . $multi2;
echo '<br>';
$raznosti= $multi1+$multi2;
echo 'Я их не СУММА! ' . $raznosti;*/
/*
создать форму в которой 2 поля 1 поля числовое 2 слово (1 слово)
число цифр и букв может не совпадать
при нажатии на кнопку код аски кода буквы отнимается цифра и полученный код превращается в символ и записывается обратно в слово
если количество цифр и букв не совпадает не достоющее количество цифр берётся с начала.*/
?>

<?php
$num=[];
$let=[];
$num = "Не известно";
$let = "Не известно";
if(isset($_POST['num'])) $num = $_POST['num'];
if (isset($_POST['let'])) $let = $_POST['let'];
$i=0;
 while ((strlen($num) != strlen($let)) and (strlen($num) < strlen($let)) ) { $num[strlen($num)+1]=$num[$i]; $i++;};
$i=0;
 while ((strlen($let) != strlen($num)) and (strlen($let) < strlen($num)) ) { $let[strlen($let)+1]=$let[$i]; $i++;};
 echo $let;
 echo '<br>';
 echo $num;
for ( $i = 0; $i < strlen($let); $i++ )
    {
        $let1[$i]=ord($let[$i]);
       // $num1[$i]=$let1[$i]-$num[$i];

    }


echo "ВАШИ ЦИФРЫ! $num  <br> ВАШИ БУКВЫ!: $let";
?>
<h3>Я люблю PHP</h3>
<form action="yh.php" method="POST">
    Цифры! <input type="number" name="num" value="<? echo $num; ?>" /><br><br>
    Буквы! <input type="name" name="let" value="<? echo $let; ?>" /><br><br>
    <input type="submit" value="PHP">
</form>
