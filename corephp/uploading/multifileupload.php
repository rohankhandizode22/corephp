<?php 
 error_reporting(0);
 if(isset($_POST['sub'])){
    $tmpname=$_FILES['att']['tmp_name'];
    $name=$_FILES['att']['name'];
    $flag=0;
    for($i=0;$i<count($tmpname);$i++){
        if(move_uploaded_file($tmpname[$i],"attach/".$name[$i]))
        {
            $flag=1;
        }
    }
    if($flag){
        echo "Uploaded";
    }
    else {
        echo "Not uploaded";
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
        <h2>Multi File Uploading</h2>
      
        <form  method="post" enctype="multipart/form-data">
        Upload : <input type="file" name="att[]" multiple/><br>
        <input type="submit" value="Upload" name="sub">
        </form>
    </body>
</html>