<?php 
   $num1=10;
   $num2=5;
   $choice=2;
   switch($choice){
    case 1 : $res=$num1+$num2;
             break;
    case 2 : $res=$num1-$num2;
            break;
    default : $res="Invalid Choice";
   }
   echo $res;
?>