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


    
    
    ?>






<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Requests <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="accounts.php">Accounts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Messages.php">Messages</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<pre>              </pre>
<pre>              </pre>

    <main role="main">

      <section class="text-center">
    
        <div class="container">
        <table id="myTable" class="table table-striped">
  <thead>
  <tr>
      <th scope="col">Sr.No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Pack Selected</th>
      <th scope="col">Phone No.</th>
      <th scope="col">opt1.</th>
      <th scope="col">opt2.</th>
      <th scope="col">opt3.</th>
      


    </tr>
  </thead>
  <tbody>
            <?php
            
                $query = "select * from `requests`";
                $result=mysqli_query($con,$query);
                $num=mysqli_num_rows($result);
                $a=1;
                  

                if($num>0){
                  
                  while($fetch=mysqli_fetch_assoc($result)){

                    include "details.php";

                    
  
                   echo  '<tr>
                  <td>'. $a.'</td>
                    <td>'.$fetch['firstname'].'</td>
                    <td>'.$fetch['lastname'].'</td>
                    <td>'.$fetch['username'].'</td>
                    <td>'.$fetch['pack'] .'</td>
                    <td>'.$fetch['phone']  .'</td>

                    <td><a href="accept.php?id='.$fetch['id'].'" class="btn btn-success my-2" name="accept">Accept</a></td>
                    <td><a href="reject.php?id='.$fetch['id'].'" class="btn btn-danger my-2">Reject</a></td>
                    <td><div class="d-grid gap-2 d-md-block">
                    
                    <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#detmodal">Details</button>
                </div></td>


                    
                  </tr>';
                  $a=$a+1;
                }
              }else{
                  echo "No Pending Requests.";
              }
          ?>
                  
                  
                </tbody>
              </table>';


              <a href='https://www.symptoma.es/'>symptoma.es</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=8ec22b968fcf6a849f6938d64349b852f5aa1ed8'></script>
<script type="text/javascript" src="https://freevisitorcounters.com/en/home/counter/776611/t/6"></script>






<!-- 
                    // echo '
                    // <div class=" row w-60">
                    // <div class="card text-white bg-dark mb-3 my-5 shadow-lg p-3 mb-5 bg-dark  rounded" style="max-width: 18rem;">
                    //   <div class="card-header"><h1 class="card-title">'. $fetch['firstname'] .' '. $fetch['lastname'] .'</h1></div>
                    //   <h1 class="jumbotron-heading">'. $fetch['username'] .'</h1>
                    //   <div class="card-body">
                    //     <h5 class="card-title">I would Like to Create an Account In your Organisation</h5>
                    //     <h3 class="jumbotron-heading">Pack Selected :-'. $fetch['pack'] .'</h3>
                    //     <p>
                    //     <a href="accept.php?id='.$fetch['id'].'" class="btn btn-primary my-2" name="accept">Accept</a>
                    //     <a href="reject.php?id='.$fetch['id'].'" class="btn btn-secondary my-2">Reject</a>
                    //   </p>
                    //   </div>
                    // </div>
                    // </div>';

                  //   echo '<div class="card w-60 my-5 shadow-lg p-3 mb-5 bg-dark text-white rounded" style="border-radius:50px;">
                  //   <div class="card-body">
                  //     <h1 class="card-title">'. $fetch['firstname'] .' '. $fetch['lastname'] .'</h1>
                  //     <h1 class="jumbotron-heading">'. $fetch['username'] .'</h1>
                  //     <p class="card-text">I would Like to Create an Account In your Organisation</p>
                  //     <h3 class="jumbotron-heading">Pack Selected :-'. $fetch['pack'] .'</h3>
                  //     <h5 class="jumbotron-heading"> Email :-'. $fetch['email'] .'</h5>
                  //     <h5 class="jumbotron-heading"> Contact :-'. $fetch['phone'] .'</h5>
                  //     <h5 class="jumbotron-heading"> Address :-'. $fetch['address'] .'</h5>
                  //     <p>
                  //       <a href="accept.php?id='.$fetch['id'].'" class="btn btn-success my-2" name="accept">Accept</a>
                  //       <a href="reject.php?id='.$fetch['id'].'" class="btn btn-danger my-2">Reject</a>
                  //     </p>
                  //   </div>
                  // </div>';
                        
                
                    // echo <h1 class="jumbotron-heading">'. $fetch['firstname'] .' '. $fetch['lastname'] .'</h1>
                    // <h1 class="jumbotron-heading">'. $fetch['username'] .'</h1>
                    //   <p class="lead text-muted">I would like to create an account</p>
                    //   <h1 class="jumbotron-heading">Pack Selected :-'. $fetch['pack'] .'</h1>
                    //   <p>
                    //     <a href="accept.php?id='.$fetch['id'].'" class="btn btn-primary my-2" name="accept">Accept</a>
                    //     <a href="reject.php?id='.$fetch['id'].'" class="btn btn-secondary my-2">Reject</a>
                    //   </p>
                    // <small><i></i></small>; -->
            
                    
          
        </div>
          
      </section>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" ></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>

  </body>
</html>
