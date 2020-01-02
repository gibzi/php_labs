<?php

if (!empty($_POST['x']) & !empty($_POST['y']) & !empty($_POST['radius'])  & !empty($_POST['color-borderR']) & !empty($_POST['color-borderG'])& !empty($_POST['color-borderB'])&!empty($_POST['colorR']) & !empty($_POST['colorG'])& !empty($_POST['colorB']) & !empty($_POST['tol-border'])  & !empty($_POST['type-line']) )
{
    
    function Circl($i, $x, $y, $radius, $rB, $gB, $bB, $r, $g, $b, $t, $tl) {
        imageSetThickness($i, $t);
        imageSetThickness($i, $t);
        $ColorBorder=imagecolorallocate($i, $rB, $gB, $bB);
        
        if($tl==1){
            $w   = imagecolorallocate($i, 255, 250, 250);
            $style =array($ColorBorder);
            imagesetstyle($i, $style);
           
             
         }
         if($tl==2){
             $w   = imagecolorallocate($i, 255, 250, 250);
            $style2 =array($ColorBorder, $ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w);
             imagesetstyle($i, $style2);
            
         }
         if($tl==3){
             
             $w   = imagecolorallocate($i, 255, 250, 250);
             

             /* Рисование пунктирной линии, 5 красных точек, 5 белых */
             $style3 = array($ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder, $ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder, $w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$ColorBorder,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w,$w ,$w,$w,$w,$w,$w,$w,$w,$w,  );
             
             imagesetstyle($i, $style3);
             
         }
        
        
//        imageSetThickness($i, $t);
        //$ColorBorder=imagecolorallocate($i, $rB, $gB, $bB);
        
        imageellipse($i, $x, $y, $radius*2, $radius*2, IMG_COLOR_STYLED);
        
        $color=imagecolorallocate($i, $r, $g, $b);
        
        imagefilledellipse($i,$x, $y, ($radius-$t)*2, ($radius-$t)*2, $color);
        
       

    }
    
    $i = imageCreate(1000, 1000);
    $color = imageColorAllocate($i, 255, 250, 250);
    
    Circl($i,$_POST['x'],$_POST['y'] , $_POST['radius'] ,$_POST['color-borderR'] ,$_POST['color-borderG'],$_POST['color-borderB'], $_POST['colorR'] ,$_POST['colorG'],$_POST['colorB'], $_POST['tol-border'], $_POST['type-line'] );
    
//    Circl($i,200,200 , 50 ,250 ,0,0, 0 ,255,0 );

        
    Header("Content-type: image/jpeg");
    imageJpeg($i);
    imageDestroy($i);
  
}
else{
    echo "Achtung!!! Sorry, something went wrong :с";
}
?>





   