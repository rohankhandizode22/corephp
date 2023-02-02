<?php 
error_reporting(0);
  if(isset($_POST['sub'])){
    //Error messages 
     $nameEmptyErr="";
     $emailEmptyErr="";
     //read fields values
     $inputName=$_POST['name'];
     $inputEmail=$_POST['email'];
     // Name Validation 
     if(empty($inputName)){
        $nameEmptyErr='<div class="error"> Name cannot be left blank </div>';
     }
     else if(!(preg_match("/^[a-zA-Z ]+$/",$inputName)))
     {
        $nameEmptyErr='<div class="error"> Only Latter and white spaces allow </div>';
     }
     else {
        echo $inputName ."<br/>";
     }
       // Email Validation 
       if(empty($inputEmail)){
        $emailEmptyErr='<div class="error"> Email cannot be left blank </div>';
     }
     else if(!(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/",$inputEmail)))
     {
        $emailEmptyErr='<div class="error"> Enter correct email</div>';
     }
     else {
        echo $inputEmail ."<br/>";
     }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Form Validation</title>
        <style>
            .error{
                color:red;
                font-weight: bold;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <h2> Validation</h2>
        <form method="post">
            Name : <input type="text" name="name"/> <?= $nameEmptyErr;?><br/>
            Email : <input type="text" name="email" /> <?= $emailEmptyErr;?><br/>
          
            <input type="submit" name="sub" value="Submit"/>
        </form>
    </body>
</html>