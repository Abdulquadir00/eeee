<!DOCTYPE HTML>  
<html>
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
</head>
<body>  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<?php
session_start();
$_SESSION['name']=$_POST['user'];
?>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">PHP FORM</h2>
    </div>
    <div class="w-50 m-auto">
        <form method="post" action="php3.php">  
            <div class="form-group">
                <lable>Location</lable>
                <input type="text" name="Location" autocomplete="off" class="form-control"> 
            </div> 
            <div class="form-group">
                <lable>Age</lable>
                <input type="text" name="Age" autocomplete="off" class="form-control"> 
            </div> 
            <div class="form-group">
                <lable>University</lable>
                <input type="text" name="university" autocomplete="off" class="form-control"> 
            </div>    
                   
            <button type="submit" class="btn btn-success">Submit</button> 

        </form>        
        
    </div>
</section>
</body>
</html> 