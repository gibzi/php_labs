<?php

if (!empty($_POST['x']) & !empty($_POST['y']) & !empty($_POST['x2']) & !empty($_POST['y2']) & !empty($_POST['type-line']) & !empty($_POST['color-lineR']) & !empty($_POST['color-lineG'])& !empty($_POST['color-lineB'])& !empty($_POST['tol-line']) )
{
    
    function Line($i, $x, $y, $x2, $y2, $t, $r, $g, $b, $tol) {
        $color = imageColorAllocate($i, $r, $g, $b);
        imageSetThickness($i, $tol);
        if($t==1){
           imageLine($i, $x, $y, $x2, $y2, $color); 
        }
        if($t==2){
           imageDashedLine($i, $x, $y, $x2, $y2, $color); 
        }
        if($t==3){
             
             $w   = imagecolorallocate($i, 255, 255, 255);
             

             /* Рисование пунктирной линии, 5 красных точек, 5 белых */
             $style = array($color,$color,$color,$color,$color,$color,$color,$color,$color,$color,$color,$color,$color,$color,$color,$color, $w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$color,$color,$color,$color,$color,$color,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,);
             imagesetstyle($i, $style);
             imageline($i, $x, $y, $x2, $y2, IMG_COLOR_STYLED);
        }
    }
    
    $i = imageCreate(1000, 1000);
    $color = imageColorAllocate($i, 255, 255, 255);
    
    Line($i, $_POST['x'], $_POST['y'], $_POST['x2'], $_POST['y2'], $_POST['type-line'], $_POST['color-lineR'], $_POST['color-lineG'], $_POST['color-lineB'], $_POST['tol-line']);
        
    Header("Content-type: image/jpeg");
    imageJpeg($i);
    imageDestroy($i);
  
}
else{
    echo "Achtung!!! Sorry, something went wrong :с";
}
?>





   