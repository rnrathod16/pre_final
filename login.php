<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">
  Launch demo modal
</button> -->
<?php
require 'loginsystem/partials/dbconnect.php';

      
      if(isset($_POST['Login'])){
          $password = $_POST['password'];
          $username = $_POST['username'];
          $query = "SELECT * from `accounts`";
          $result=mysqli_query($con,$query);
        //   while($fetch=mysqli_fetch_assoc($result)){
        //   if($fetch['username']=='rnrathod'&&$fetch['password']=='ritesh@07'){
        //     session_start();
        //           $_SESSION['username']= 'rnrathod';
        //           $_SESSION['login'] = true;
                  
        //           header('location:home.php');


        //   }
        // }
          $num=mysqli_num_rows($result);
          if($num > 0){ //this is to catch unknown error.
            while($fetch=mysqli_fetch_assoc($result)){

              $pack=$fetch['pack'];
              
               if($fetch['username']==$username&&$fetch['password']==$password){
                      
                      
                      switch($username){
                        case "rnrathod":
                          session_start();
                            $_SESSION['username']='rnrathod';
                             $_SESSION['login'] = true;
                             header("location:home.php");
                        break;

                        case "$username":
                          session_start();
                          $_SESSION['username']=$username;
                          $_SESSION['login'] = true;
                          $_SESSION['pack']=$pack;

                            switch($pack){

                              case ($pack=='starter'|| $pack=='Starter'):

                                header("location:packages/starter.php");
                                break;
                              
                              case ($pack=='medium'|| $pack=='Medium'):
                                header("location:packages/medium.php");
                                break;

                                case ($pack=='complete'|| $pack=='Complete'):
                                  header("location:packages/complete.php");
                                  break;


                            }

                      break;

                      }
                  }
                  else{
                    echo "<script>alert('Invalid Credentials')</script>";
                }
              }
          }else{
              echo "<script>alert('Error.')</script>";
          }

      }
    
    ?>
<!-- Modal -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form  method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary col-3 my-3">Login</button>
      </div> -->
  <div class="text-center">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="Login" class="btn btn-primary col-3 my-3">Login</button>
  </div>
</form>
      </div>
      
    </div>
  </div>
</div>
