<?php

if (!empty($_POST['fun'])) {
    $strFun = $_POST['fun'];
    $end = "";
    if (preg_match_all("/(cos|sin|tg|ctg|arcsin|arccos)/", $strFun, $finish)) {
        //var_dump($finish);
        for($i =0; $i<count($finish[0]);$i++) {
           $end.= $finish[0][$i]." ";
        }
        echo "<input type='text' name='lol' value='$end'>";
        //var_dump($finish);
    } else {
        echo "в строке нет тригонометрических функций";
    }
}
else{
    echo "Ошибочка";
}


?>
