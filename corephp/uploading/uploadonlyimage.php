<?php 
 error_reporting(0);
 if(isset($_POST['sub'])){
    $tmpname=$_FILES['att']['tmp_name'];
    $name=$_FILES['att']['name'];
    if(empty($tmpname)){
        $errMsg="Please select a image";
    }
    else{
        $ext=pathinfo($name,PATHINFO_EXTENSION);
        $fn="image-".rand()."-".time().".$ext";
        if($ext=="jpg" || $ext=="png"){
            if(move_uploaded_file($tmpname,"attach/".$fn)){
               $succMsg="Uploaded";
            }
            else {
                $errMsg="Uploading Error";
            }
        }
        else{
            $errMsg="Only Jpg and Png allow";
        }
    }
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Uploading</title>
        <style>
            .yes{
                color:green; font-weight: bold;
            }
            .no{
                color:red; font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h2>File Uploading</h2>
        <?php 
            if(!empty($succMsg)){
                ?>
              <p class="yes"><?= $succMsg;?></p>
                <?php
            }
            if(!empty($errMsg)){
                ?>
              <p class="no"><?= $errMsg;?></p>
                <?php
            }
        ?>
        <form  method="post" enctype="multipart/form-data">
        Upload : <input type="file" name="att"/><br>
        <input type="submit" value="Upload" name="sub">
        </form>
    </body>
</html>