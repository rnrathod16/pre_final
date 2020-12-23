
<?php include 'filesLogic.php';?>



<?php
    session_start(); //we need session for the log in thingy XD 
    require '../../loginsystem/partials/dbconnect.php';
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
                    <a class="btn btn-primary" href="../../index.php" role="button">Home</a> 
                        
                </form>
                
                
            </div>
        </div>
      </div>
    </header>
    <?php


    
    
    ?>




<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../../home.php">Requests </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../../accounts.php">Accounts </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="../../Messages.php">Messages</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Upload Files
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../../uploads/starterUpload/index.php">Starter Pack</a>
          <a class="dropdown-item" href="../../uploads/mediumUpload/index.php">Medium Pack</a>
          <a class="dropdown-item" href="../../uploads/completeUpload/index.php">Complete Pack</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>


<pre>              </pre>
<pre>              </pre>

    <div class="container">
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Uploads</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../home.php">Go back</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="../../packages/starter.php">View Downloads</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Upload files to starter pack</h5>
    <div class="container ">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save" class="btn btn-primary">upload</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
