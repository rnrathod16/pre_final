




<?php
    session_start(); //we need session for the log in thingy XD 
    require 'loginsystem/partials/dbconnect.php';
    if($_SESSION['login']!==true){
        header('location:index.php');
    }
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Hi, <?php echo $_SESSION['username'] ?></strong>
            
          </a>










            <div class="pull-right">
                <?php
                if(isset($_POST['logout'])){
                    session_start();
                    session_unset();
                    session_destroy();
                    header('location:index.php');
                }
    
                ?>

                
                <form method="post">
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                    <a class="btn btn-primary" href="index.php" role="button">Home</a> 
                        
                </form>
                
                
            </div>
        </div>
      </div>
    </header>
    <?php


    
    
// require "nav.php";

    ?>



<nav class="navbar center navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Requests <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="accounts.php">Accepted</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rejected.php">Rejected</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Messages.php">Messages</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Upload Files
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="uploads/starterUpload/index.php">Starter Pack</a>
          <a class="dropdown-item" href="uploads/mediumUpload/index.php">Medium Pack</a>
          <a class="dropdown-item" href="uploads/completeUpload/index.php">Complete Pack</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>


<div class="container my-5">
<div class="container text-center my-4"><h2>Accepted Accounts</h2></div>

<?php
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "users";

 
 $conn = mysqli_connect($servername, $username, $password, $database);
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $username= $_POST['username'];
   $password= $_POST['password'];
   $pack = $_POST['pack'];
 $sql= "INSERT INTO `accounts` (`firstname`, `lastname`, `username`, `password`, `pack`) VALUES (`$firstname`, `$lastname`, `$username`, `$password`, `$pack`);";
 $result = mysqli_query($conn, $sql);
 if($result){
   echo "record inserted";
 }
 }
 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
  


 
<table class="table table-striped" id="myTable">
  <thead>
    <tr>
      <th scope="col">srno</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">username</th>
      <th scope="col">pack</th>
    </tr>
  </thead>
  <tbody>
  <?php

  $sl="SELECT * FROM `accounts`";
 $result=mysqli_query($conn,$sl);
 
   $row=mysqli_num_rows($result);
   echo "$row";
   $no=1;
   if($row>0){
     while($fetch=mysqli_fetch_assoc($result)){
 
       echo "     <tr>
       <th scope='row'>$no</th>
       <td>".$fetch['firstname']."</td>
       <td>".$fetch['lastname']."</td>
       <td>".$fetch['username']."</td>
       <td>".$fetch['pack']."</td>
     </tr>";
      $no=$no+1;
     }
   }
  ?>
  </tbody>
</table>

</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
   </script>
  </body>
</html>
