<?php

//$imgFrom=$GET['i'];
$imgFrom=$_POST['adress'];



$im = imagecreatefrompng($imgFrom);

if ($_POST['radiobutton']==="invert"){
        if($im && imagefilter($im, IMG_FILTER_NEGATE))
        {
           

           
            header('Content-Type: image/png');
            imagepng($im);
            imagedestroy($im);
        }
        else
        {
            echo 'Преобразование не удалось.';
        }
}
if ($_POST['radiobutton']==="gray"){
        if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
        {
           

           
            header('Content-Type: image/png');
            imagepng($im);
            imagedestroy($im);
        }
        else
        {
            echo 'Преобразование не удалось.';
        }
}
if ($_POST['radiobutton']==="shine"){
        if($im && imagefilter($im, IMG_FILTER_EDGEDETECT))
        {


           
            header('Content-Type: image/png');
            imagepng($im);
            imagedestroy($im);
        }
        else
        {
            echo 'Преобразование не удалось.';
        }
}
if ($_POST['radiobutton']==="blure"){
        if($im && imagefilter($im, IMG_FILTER_SELECTIVE_BLUR))
        {
            

           
            header('Content-Type: image/png');
            imagepng($im);
            imagedestroy($im);
        }
        else
        {
            echo 'Преобразование не удалось.';
        }
}
if ($_POST['radiobutton']==="rels"){
        if($im && imagefilter($im, IMG_FILTER_EMBOSS))
        {
           

           
            header('Content-Type: image/png');
            imagepng($im);
            imagedestroy($im);
        }
        else
        {
            echo 'Преобразование не удалось.';
        }
}
if ($_POST['radiobutton']==="pix"){
        if($im && imagefilter($im, IMG_FILTER_PIXELATE, 6))
        {
           

           
            header('Content-Type: image/png');
            imagepng($im);
            imagedestroy($im);
        }
        else
        {
            echo 'Преобразование не удалось.';
        }
}



?>
