<?php
  error_reporting(0);
  extract($_POST);
  if(isset($sub)){
   
    if(is_dir("users/$email")){
        $fo=fopen("users/$email/details.txt","r");
        fgets($fo);
        $pass=trim(fgets($fo));//in 2nd line there is password
        if($password==$pass){
          session_start();
          $_SESSION['uid']=$email;
          if($check){
          setcookie('email',$email,time()+3600);
          setcookie('pass',$password,time()+3600);
          }
          header("location:account.php");
        }
        else {
            $errMsg="Enter correct password";
        }
    }
    else {
        $errMsg="Enter correct Email";
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
    <h2> Login Here </h2>
<form method="post">
<?php 
        if($errMsg!=''){
        ?>
      <div class="alert alert-danger"><?= $errMsg;?></div>
        <?php 
        }
    ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" onchange="cook()">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <!-- <input type="hidden" name="h1" value="sumit"/> -->
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  <a href="regis.php"> Create a account </a>
</form>
    </div>
    <script>
      function cook(){
        if("<?php echo $_COOKIE['email'];?>"!=undefined){
            if(document.getElementById("email").value=="<?php echo $_COOKIE['email'];?>"){
              document.getElementById("password").value="<?php echo $_COOKIE['pass'];?>";
            }
        }
      }
    </script>
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