<?php




 echo'<form method="post" action="lr13_0.php">';


        echo' <br><br> ';

        if ($_POST['radiobutton']==="chip"){
           echo "<b>Чип </b> <br>";
           echo '<img src="img13/chipp.png">';
           echo' <br><br> ';
           echo'Aдрес изображения: <input name="adress" type="text" value="img13/chipp.png">';

        }    
        if ($_POST['radiobutton']==="mikki"){ 
            echo "<b>Микки Маус</b> <br>";
            echo '<img src="img13/Mikki.png">';
            echo' <br><br> ';
            echo' Aдрес изображения: <input name="adress" type="text" value="img13/Mikki.png">';

        }
        if ($_POST['radiobutton']==="tom") { 
            echo "<b>Том и Джери </b> <br>"; 
            echo '<img src="img13/tom_i_dzherri_mini.png">';
            echo' <br><br> ';
            echo'Aдрес изображения: <input name="adress" type="text" value="img13/tom_i_dzherri_mini.png">';

        }

        if ($_POST['radiobutton']==="sharik") {
            echo "<b>Шарик</b> <br>";
            echo '<img src="img13/sharik.png">'; 
            echo' <br><br> ';
            echo'Aдрес изображения: <input name="adress" type="text" value="img13/sharik.png">';
        }
        if ($_POST['radiobutton']==="vinni") {
            echo "<b>Винни-Пух</b><br>";
            echo '<img src="img13/vinni.png">'; 
            echo' <br><br> ';
            echo' Aдрес изображения: <input name="adress"  type="text" value="img13/vinni.png">';
        }

  echo' <br><br> ';
  echo' <i>И что же сделать?</i> <br>';
       echo' <input name="radiobutton" type="radio" value="invert"> 
            <b>Инвертирровать все цвета изображения</b> <br>
       <input name="radiobutton" type="radio" value="gray"> 
            <b>Преобразовать цвета изображения в градации серого </b> <br>
       <input name="radiobutton" type="radio" value="shine"> 
            <b>Подсветить</b> <br>
       <input name="radiobutton" type="radio" value="blure"> 
            <b>Размыть</b> <br>
       <input name="radiobutton" type="radio" value="rels"> 
             <b>Добавить рельеф</b><br>
       <input name="radiobutton" type="radio" value="pix"> 
             <b>Пикселизировать</b><br>';
   
     
  echo' <br><br> ';

 echo'    <input type=submit value="Применить"></form>';


?>


