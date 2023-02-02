<?php 
  session_start();
  $sid=$_SESSION['uid'];
  if(empty($sid)){
    header("location:index.php");
  }
  //find the user image path 
  $fo=fopen("users/$sid/details.txt","r");
  fgets($fo); fgets($fo); fgets($fo); fgets($fo); fgets($fo); 
  $path=trim(fgets($fo));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Welcome <b><?= $sid;?></b> </h2>
    <img src="users/<?= "$sid/$path";?>" width="200" height="200"/> <br/>
    <a href="logout.php"> Logout </a>
</body>
</html>