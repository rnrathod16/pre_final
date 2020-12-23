<?php

require "partials/dbconnect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $username=str_replace('<','&lt;',$username);
    $username=str_replace('>','&gt;',$username);
    $password=$_POST['password'];
    $password=str_replace('<','&lt;',$password);
    $password=str_replace('>','&gt;',$password);
    $cpassword=$_POST['cpassword'];

    $sign=false;
    $namexists=false;

    $existsql="SELECT * FROM `users` WHERE `username`='$username'";
    $result=mysqli_query($con,$existsql);

    $num=mysqli_num_rows($result);

    if($num>0){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Username Already in Use
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else{

        if(($password==$cpassword)){

            $hash=password_hash($password,PASSWORD_DEFAULT);
    
            $sql="INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$hash')";
            $result=mysqli_query($con,$sql);
            if($result){
                $sign=true;
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> You account is Created
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            
        }
        else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> Passwords Do not matched 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
      <div class="container my-5 "></div>
      <div class="container col-md-5 my-5 shadow-lg p-3 mb-5 bg-white rounded">
        <h1 class="text-center my-3">Sign Up</h1>

    <form action="signup.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Conform Password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary col-3 my-3">SignUp</button>
  </div>
</form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>
