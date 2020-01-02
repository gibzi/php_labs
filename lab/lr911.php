<!DOCTYPE html>


<html>
  <head>
    <title>Test PHP</title>
  </head>
  <body><?php
//1. Пользователь вводит в поле на HTML странице числовое значение в
//интервале от 0 до 9. Программа на PHP должна вывести на эту страницу текстовое
//значения введенного числа.
echo "<h3>Задание 1</h3>";    echo "<br>"; echo "<br>";
 $arNumber= ["ноль", "один", "два", "три" , "четыре", "пять", "шесть", "семь", "восемь", "девять"];

 if (!empty($_POST["user_number"]))
 {
   if($_POST["user_number"]<0 || $_POST["user_number"]>9)
       {
           echo "Вы ввели число не из диапазона 0-9";
       }
   else
     {
             echo "Ваше число - ";
             $number=$_POST["user_number"];
             echo $arNumber[(int)$number];
     }
 }
 else
 {
 echo "Переменные не дошли. Проверьте все еще раз.";
 }
 
echo "<br> <hr> <br>";

//
//if (!empty($_POST["user_1number"])&& !empty($_POST["user_2number"]))
// {
//  
//   $n1=$_POST["user_1number"];
//   $n2=$_POST["user_2number"];
//    $sum=(int)$n1+(int)$n2;
//    echo"<input value='{$n1}' />";
//    echo "<br>";
//    echo "<input value='{$n2}' />";
//    echo "<br>";
//    echo"<textarea>{$sum} </textarea>";        
//    require_once('lr9(11).html');
// }
// else
// {
// echo "Переменные не дошли. Проверьте все еще раз.";
// }

//2. На HTML-форме вывести зависимые переключатели, в которых
//перечисляются от 5 до 10 героев детских мультфильмов. При выборе героя в
//форме должна выводиться картинка с изображением выбранного героя.
echo "<h3>Задание 2</h3>";    echo "<br>"; echo "<br>";


if ($_POST['radiobutton']==="chip"){
   echo "<b>Чип </b> <br>";
   echo '<img src="img9(11)/chip.png">';
   
}    
if ($_POST['radiobutton']==="mikki"){ 
    echo "<b>Микки Маус</b> <br>";
    echo '<img src="img9(11)/Mickey_Mouse.png">';
}
if ($_POST['radiobutton']==="tom") { 
    echo "<b>Том и Джери </b> <br>"; 
    echo '<img src="img9(11)/tom_i_dzherri_mini.png">';
}
if ($_POST['radiobutton']==="karlson") { 
    echo "<b>Карлон</b> <br>";
    echo '<img src="img9(11)/karlson.jpeg">';   
}
if ($_POST['radiobutton']==="sharik") {
    echo "<b>Шарик</b> <br>";
    echo '<img src="img9(11)/sharik.png">'; 
}
if ($_POST['radiobutton']==="vinni") {
    echo "<b>Винни-Пух</b><br>";
    echo '<img src="img9(11)/vinni.png">'; 
}   






echo "<br> <hr> <br>";
//3. На HTML-форме вывести независимые переключатели, в которых
//перечисляются от 5 до 10 героев детских мультфильмов. При выборе героя в
//форме в многострочном текстовом поле должны выводиться имена выбранных
//героев и их хэш-функции.
echo "<h3>Задание 3</h3>";   echo "<br>"; echo "<br>";

    echo '<p>Вы выбрали: </p>';
    if (isset($_POST['checkbox1'])) echo "<p><b>Чип</b></p>";
    if (isset($_POST['checkbox2'])) echo "<p><b>Микки Маус</b></p>";
    if (isset($_POST['checkbox3'])) echo "<p><b>Том и Джери</b></p>";
    if (isset($_POST['checkbox4'])) echo "<p><b>Карлсон</b></p>";
    if (isset($_POST['checkbox5'])) echo "<p><b>Шарик</b></p>";
    if (isset($_POST['checkbox6'])) echo "<p><b>Винни-Пух</b></p>";


echo "<br> <hr> <br>";
//4. На HTML-форме создать список единственного выбора, в котором
//перечисляются от 5 до 10 героев детских мультфильмов. При выборе героя в
//форме должна выводиться картинка с изображением выбранного героя.
echo "<h3>Задание 4</h3>";   echo "<br>"; echo "<br>";

echo "<p>Значение списка с единственным выбором: <b>".$_POST['mult']."</b></p>";

echo "<br> <hr> <br>";

//5. В HTML-форме пользователь вводит данные о начальной скорости,
//ускорении и массе метеорита, летящего на высоте h параллельно поверхности.
//В многостраничном текстовом поле должны быть выведены данные о
//расстоянии, на котором упадет метеорит от текущего положения на Земле, Луне,
//Венере. Сопротивлением воздуха пренебречь.
echo "<h3>Задание 5</h3>";   echo "<br>"; echo "<br>";

    if (!empty($_POST["a"])&&!empty($_POST["v"])&&!empty($_POST["t"]))
    {
        $s = $_POST["v"]+$_POST["a"]*pow($_POST["v"],2)/2;
        echo "s = $s";
        echo "<br>";
    }
    else
    {
        echo "error";
    }
echo "<br> <hr> <br>";
//6. В HTML-форме вводится информация о количестве углов многоугольника.
//Программа на PHP должна получать эти данные и выводить в форме картинку
//этого многоугольника.
echo "<h3>Задание 6</h3>";   echo "<br>"; echo "<br>";

$arNumber= [3=>'<img src="img9(11)/3.png">', '<img src="img9(11)/4.jpg">','<img src="img9(11)/5.jpg">', '<img src="img9(11)/6.png">','<img src="img9(11)/7.png">', '<img src="img9(11)/8.jpg">', '<img src="img9(11)/9.png">', '<img src="img9(11)/10.png">'];

if (!empty($_POST["user_size"]))
 {
   if($_POST["user_size"]<3 || $_POST["user_size"]>10)
       {
           echo "Вы ввели число не из диапазона 3-10";
       }
   else
     {
    
             $number=$_POST["user_size"];
             echo $arNumber[(int)$number];
     }
 }
 else
 {
 echo "Переменные не дошли. Проверьте все еще раз.";
 }
echo "<br> <hr> <br>";?>
  </body>
</html>