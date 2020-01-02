<?php
	//1. Пользователь вводит в поле на HTML странице числовое значение в
//интервале от 0 до 9. Программа на PHP должна вывести на эту страницу текстовое
//значения введенного числа.
echo "<h3>Task 1</h3>";    

if (!empty($_POST["number"]) & is_numeric($_POST["number"]))
{
    echo "Your data:<br>";
    echo "Number - ";
    echo $_POST["number"];
    echo "<br>";
    var_dump($_POST["number"]);
}
else
{
    echo "No data received. Check again.";
}
echo "<br> <hr>";




//2. На HTML-форме вывести зависимые переключатели, в которых
//перечисляются от 5 до 10 героев детских мультфильмов. При выборе героя в
//форме должна выводиться картинка с изображением выбранного героя.
echo "<h3>Task 2</h3>";

if ($_POST['radiobutton']==="Hedgehog in the fog"){
   echo "<b>Hedgehog in the fog </b> <br>";
   echo '<img src="img11/Hedgehog in the fog.jpg">';
   
}    
if ($_POST['radiobutton']==="Carlson"){
    echo "<b>Carlson</b> <br>";
    echo '<img src="img11/Carlson.jpg">';
}
if ($_POST['radiobutton']==="Cat Matroskin") {
    echo "<b>Cat Matroskin</b> <br>";
    echo '<img src="img11/Cat Matroskin.jpg">';
}
if ($_POST['radiobutton']==="Cheburashka") {
    echo "<b>Cheburashka</b> <br>";
    echo '<img src="img11/Cheburashka.jpg">';
}
if ($_POST['radiobutton']==="Winnie the Pooh") {
    echo "<b>Winnie the Pooh</b> <br>";
    echo '<img src="img11/Winnie the Pooh.jpg">';
}
if ($_POST['radiobutton']==="Wolf and Hare") {
    echo "<b>Wolf and Hare</b> <br>";
    echo '<img src="img11/Wolf and Hare.jpg">';
}
if ($_POST['radiobutton']==="Alice Selezneva") {
    echo "<b>Alice Selezneva</b> <br>";
    echo '<img src="img11/Alice Selezneva.jpg">';
}
if ($_POST['radiobutton']==="Boniface") {
    echo "<b>Boniface</b> <br>";
    echo '<img src="img11/Boniface.jpg">';
}

echo "<br> <hr>";




//3. На HTML-форме вывести независимые переключатели, в которых
//перечисляются от 5 до 10 героев детских мультфильмов. При выборе героя в
//форме в многострочном текстовом поле должны выводиться имена выбранных
//героев и их хэш-функции.
echo "<h3>Task 3</h3>";   

$mult = $_POST['checkbox'];
if(empty($mult))
{
    echo("You have not chosen anything!");
}
else
{
    $N = count($mult);

    echo("You choose $N heroes: <br><br>");
    for($i=0; $i < $N; $i++)
    {
        echo($mult[$i] . "<br>");
    }
}
echo "<br> <hr>";




//4. На HTML-форме создать список единственного выбора, в котором
//перечисляются от 5 до 10 героев детских мультфильмов. При выборе героя в
//форме должна выводиться картинка с изображением выбранного героя.
echo "<h3>Task 4</h3>";   

echo "<p>Value with one choice: <b>".$_POST['mult']."</b></p>";

if ($_POST['mult']==="Hedgehog in the fog"){
   echo '<img src="img11/Hedgehog in the fog.jpg">';
}    
if ($_POST['mult']==="Carlson"){
    echo '<img src="img11/Carlson.jpg">';
}
if ($_POST['mult']==="Cat Matroskin") {
    echo '<img src="img11/Cat Matroskin.jpg">';
}
if ($_POST['mult']==="Cheburashka") {
    echo '<img src="img11/Cheburashka.jpg">';
}
if ($_POST['mult']==="Winnie the Pooh") {
    echo '<img src="img11/Winnie the Pooh.jpg">';
}
if ($_POST['mult']==="Wolf and Hare") {
    echo '<img src="img11/Wolf and Hare.jpg">';
}
if ($_POST['mult']==="Alice Selezneva") {
    echo '<img src="img11/Alice Selezneva.jpg">';
}
if ($_POST['mult']==="Boniface") {
    echo '<img src="img11/Boniface.jpg">';
}
echo "<br> <hr>";






//5. В HTML-форме пользователь вводит данные о начальной скорости,
//ускорении и массе метеорита, летящего на высоте h параллельно поверхности.
//В многостраничном текстовом поле должны быть выведены данные о
//расстоянии, на котором упадет метеорит от текущего положения на Земле, Луне,
//Венере. Сопротивлением воздуха пренебречь.
echo "<h3>Task 5</h3>";   
echo "<br>";
if (!empty($_POST["a"])&&!empty($_POST["v"])&&!empty($_POST["m"]))
{
    $s = $_POST["v"]+$_POST["a"]*pow($_POST["v"],2)/2;
    echo "The distance at which a meteorite will fall = $s";
    echo "<br>";
}
else
{
    echo "error";
}
echo "<br> <hr>";




//6. В HTML-форме вводится информация о количестве углов многоугольника.
//Программа на PHP должна получать эти данные и выводить в форме картинку
//этого многоугольника.
echo "<h3>Task 6</h3>";
echo "<br>";

$arNumber= [3=> '<img src="img11/3.png">', 
				'<img src="img11/4.jpg">',
				'<img src="img11/5.jpg">', 
				'<img src="img11/6.png">',
				'<img src="img11/7.png">', 
				'<img src="img11/8.jpg">', 
				'<img src="img11/9.png">', 
				'<img src="img11/10.png">'];

if (!empty($_POST["user_size"]))
{    
            $number=$_POST["user_size"];
            echo $arNumber[(int)$number];
}
else
{
echo "No data received. Check again.";
}
echo "<br>";
?>