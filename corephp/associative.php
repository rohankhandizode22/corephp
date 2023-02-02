<?php 
   $arr=["ind"=>"india","nep"=>"nepal","chi"=>"china"];
   //echo $arr["nep"];
   //to render all the values of associative array we have foreach 
   foreach($arr as $v){
    echo $v."<br/>";
   }
   //prinit index as well as the values
   echo "<hr/>";
   foreach($arr as $i=>$v){
    echo $v." is in index ".$i."<br/>";
   }
?>