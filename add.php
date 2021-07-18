<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <title>ADD</title>
  </head>
  <body>



<?php
include_once("config.php");
include_once("navbar.php");
//Establish DB connection

if(isset($_POST['Submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $balance=mysqli_real_escape_string($conn,$_POST['balance']);
    if(empty($name) || empty($email) || empty($balance)){
        if(empty($name)){
            echo"<br><div class='container text-center'><font color='red' class='text-center'>Name Field Is Empty</font></div><br>";
        }
        if(empty($email)){
            echo"<br><div class='container text-center'><font color='red' class='text-center'>Age Field Is Empty</font></div><br>";
        }
        if(empty($balance)){
            echo"<br><div class='container text-center'><font color='red' class='text-center'>Email Field Is Empty</font></div><br>";
        }
        echo"<div class='container text-center'><a href='createuser.php' type='submit' class='btn btn-primary'>BACK</a></div>";
    }else{
        $result=mysqli_query($conn,"INSERT INTO sid(name,email,balance) VALUES('$name','$email','$balance')");
        echo"<br><div class='container text-center'><p class='text-success'>User Created Successfully.</p></div>";
        echo"<div class='container text-center'><a href='transfermoney.php' type='submit' class='btn btn-primary'>View</a></div>";
        
    }
}
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>