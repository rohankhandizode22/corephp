<?php 
error_reporting(0);
  extract($_POST);
  if(isset($sub)){
    if(is_dir("users/$email")){
        $errMsg="User already registered";
    }
    else{
      $tmp_name=$_FILES['att']['tmp_name'];
      $name=$_FILES['att']['name'];
      $ext=pathinfo($name,PATHINFO_EXTENSION);
      if($ext=="jpg" || $ext=="png"){
        $fn="image-".rand().".$ext";
        mkdir("users/$email");
        move_uploaded_file($tmp_name,"users/$email/$fn");
        file_put_contents("users/$email/details.txt","$fname\n$password\n$gender\n$age\n$city\n$fn");
        header("location:welcome.php?uid=$email");//redirection
      }
      else {
   $errMsg="Only upload Jpg or Png images";
      }
      
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <h2> Regis Here </h2>
<form method="post" enctype="multipart/form-data">
    <?php 
        if($errMsg!=''){
        ?>
      <div class="alert alert-danger"><?= $errMsg;?></div>
        <?php 
        }
    ?>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname">
     </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <input type="radio"  name="gender" value="male"> Male 
    <input type="radio"  name="gender" value="female"> Female 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="age">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">City</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="city">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="att">
  </div>
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  
</form>
    </div>
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>