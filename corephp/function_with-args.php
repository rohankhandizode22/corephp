<?php 
 function add($a,$b)//parameter
 {
    return $a+$b;
 }
 $sum=add(2,3);//arguments // call by value 
 echo $sum;

 //call by reference only variables are passed as an argument 
 echo "<hr/> Call By reference Example <br/>";
 function myadd(&$a1,&$a2){
    return $a1+$a2;
 }
 //$sum1=myadd(23,45);//only variables are passed as a refernce in call by reference 
 $x=100;
 $y=30;
 $sum1=myadd($x,$y);
 echo $sum1;
?>