<?php
if (isset($_POST['name'])& isset($_POST['birthday']) & isset($_POST['mail']) & isset($_POST['phone'])){
    
        $name=$_POST['name'];
        $bday=$_POST['birthday'];
        $mail=$_POST['mail'];
        $phone=$_POST['phone'];
    
        $flag=0;
    
        if (preg_match("/^([A-Z]{1}[a-z]{3,14} [A-Z]{1}[a-z]{3,14} [A-Z]{1}[a-z]{3,14})|([А-Я]{1}[а-я]{1,14} [А-Я]{1}[а-я]{3,14} [А-Я]{1}[а-я]{3,14})$/", $name)) {
             $flag++;
        }
        else {
            echo '<br>Твоё имя или фамилия или же отчество неверно';}
    
    
        if (preg_match("/(0[1-9]|[12][0-9]|3[01]).(0[1-9]|1[012]).(\d{4})/", $bday)) {
             $flag++;   
        }
        else {
            echo '<br>Неверная дата';}
    
        if (preg_match("/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u", $mail)) {
             $flag++;   
             //говорит, что выражение и текст, по которому идет поиск, исплоьзуют кодировку utf-8, а не только латинские буквы. Без него поиск русских (и любых других нелатинских) символов может работать некорректно, потому стоит ставить его всегда.
        }
        else {
            echo '<br>Неверные E-mail';}
    
    //По умолчанию метасимвол '.' не включает в свое определение символ перевода строки. Т.е. для многострочного текста выражение /.+/ вернет только первую строку, а не весь текст, как ожидается. Указание этого модификатора (s) снимает это ограничение.
            //+ Указывает, что символ должен быть повторен 1 или более раз 
        if (preg_match("/\((\d{3,5})\)\s+(\d{3}-\d{2}-\d{2})/", $phone)) {
             $flag++;   
        }
        else {
            echo '<br>Неверный телефон ';}
    
    
       if($flag==4){
        
           echo "Здравствуйте, ". $name . "<br><br> вы родились: ".$bday."<br><br> адрес вашей электронной почты - ". $mail."<br><br> ваш телефон  ". $phone." <br><br>";
           
       }
    
 }
 else
        {
            echo 'Недостаточно данных';
        }


?>
