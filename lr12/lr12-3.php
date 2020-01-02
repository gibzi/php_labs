<?php

if (!empty($_POST['x']) & !empty($_POST['y']) & !empty($_POST['hight']) & !empty($_POST['width']) & !empty($_POST['color-recR']) & !empty($_POST['color-recG'])& !empty($_POST['color-recB']) & !empty($_POST['tol-line']) )
{
    
    function Rect($i, $r, $g, $b, $x, $y, $h, $w, $t) {
        
        $x1=$x;
        $y1=$y;
        $x2=$x+$w;
        $y2=$y+$h;
        
        $color = imageColorAllocate($i, 0, 0, 0);
        imageSetThickness($i, $t);

        imageRectangle($i, $x1, $y1, $x2, $y2, $color);
        
        $color = imageColorAllocate($i, $r, $g, $b);
        imageFilledRectangle($i, $x1+$t/2, $y1+$t/2, $x2-$t/2, $y2-$t/2, $color);

    }
    $i = imageCreate(1000, 1000);
    $color = imageColorAllocate($i, 0, 206, 209);
    
    Rect($i,$_POST['color-recR'], $_POST['color-recG'], $_POST['color-recB'], $_POST['x'], $_POST['y'], $_POST['hight'], $_POST['width'], $_POST['tol-line']);

   // Rect($i, 34, 44, 22, 45, 55, 566, 777, 2);
        
    Header("Content-type: image/jpeg");
    imageJpeg($i);
    imageDestroy($i);

  
}
else{
    echo "error";
}



?>



   