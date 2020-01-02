<?php

if ($_POST['radiobutton']==="line"){
  
    require "lr12-1.html";
}    
else
{
    if ($_POST['radiobutton']==="circle"){ 
        require "lr12-2.html";
    }
    else
    {
       if ($_POST['radiobutton']==="rectangle") { 
   
        require "lr12-3.html";
       } 
    }
}
?>



   