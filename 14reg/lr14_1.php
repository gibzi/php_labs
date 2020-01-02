<?php

if (!empty($_POST['file'])){ 
$file=$_POST['file']; 

if (preg_match("/^(\w+s)\.(?:jpeg|jpg|png|gif|svg)$/i", $file)) 
  //? Указывает, что символ может как присутствовать, так и нет, но при этом не может повторяться более одного раза.

  //метасимвол '.', в обычном режиме означает "любой единичный символ", а '\.' означает просто точку. 

  //Этот метасимвол указывает, что на данном месте в строке может находиться любой символ (за исключением символа перевода строки). Очень удобно использовать его, если вам нужно "пропустить" какую-нибудь букву в слове при проверке. Например регулярное выражение 

  //w Словесный
 
echo "файл содержит изображение <br> <br>";
 
else
echo "файл не содержит изображение <br> <br>";

}

if (isset($_POST['data'])){
    
        $arr =["01"=>"января", "02"=>"февраля", "03"=>"марта", "04"=>"апреля", "05"=>"мая", "06"=>"июня", "07"=>"июля","08"=>"августа", "09"=>"сентября","10"=>"октября", "11"=>"ноября", "12"=>"декабря"];
    
        $data=$_POST['data'];
    
        if (preg_match("/(0[1-9]|[12][0-9]|3[01]).(0[1-9]|1[012]).(\d{2})/", $data))
        {
                
          $dd = preg_replace("/(0[1-9]|[12][0-9]|3[01]).(0[1-9]|1[012]).(\d{2})/","\\1",$data);
          $mm = preg_replace("/(0[1-9]|[12][0-9]|3[01]).(0[1-9]|1[012]).(\d{2})/","\\2",$data);
          $gg = preg_replace("/(0[1-9]|[12][0-9]|3[01]).(0[1-9]|1[012]).(\d{2})/","\\3",$data);

          if($gg>00&$gg<21){
            $text= $dd." ". $arr[$mm]." 20". $gg."г.";
          echo $text;
          }
          else{
            $text= $dd." ". $arr[$mm]." 19". $gg."г.";
          echo $text;
          }            
        }
        else {
            echo 'Вы ввели неправильную дату!';
}    
 }
 else
        {
            echo 'Вы ничего не ввели';
        }

?>


