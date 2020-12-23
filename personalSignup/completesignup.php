<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#completesignupmodal">
  Launch demo modal
</button> -->
<?php
        if((isset($_POST['c']))){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            // $pack=$_POST['pack'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];

            $query="SELECT username FROM `requests` WHERE username='$username'";
            $exists=mysqli_query($con,$query);

            $num=mysqli_num_rows($exists);
            

            if($num>0){
              echo "<script>alert('Username Already exists Please try Another Username');</script>";
              
            }
            
            // $message = "$lastname $firstname would like to request an account.";
            else{
              $query = "INSERT INTO `requests` (`firstname`, `lastname`, `username`, `password`, `pack`, `date`,`email`, `phone`, `address`) VALUES ('$firstname', '$lastname', '$username', '$password', 'complete', current_timestamp(), '$email', '$phone', '$address');";
              $result=mysqli_query($con,$query);
              if($result){
                  echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
              }else{
                  echo "<script>alert('Unknown error occured.')</script>";
              }
          }

//           require "PHPmailer/compr.php";

//   $mail= new PHPMailer(true);
//   $mail-> isSMTP(true);

//   $mail-> Host='smtp.gmail.com';
//   $mail-> Port=587;
//   $mail-> SMTPAuth=true;
//   $mail-> SMTPSecure='tls';
//   $mail->SMTPAuth=true;
//   $mail-> Username='';
//   $mail-> Password='';

//   $mail-> setFrom('');
//   $mail-> addAddress('');
//   $mail-> isHTML(true);

//   $mail-> Subject='Account Request';
//   $mail-> Body='There is An New Account Request From'. $_POST['firstname'].' '.  $_POST['lastname'] .' For Pack :- '.$_POST['pack'];
//   $mail-> SMTPOptions= array('ssl'=>array(
  
//   'verify_peer'=>false,
//   'verify_peer_name'=>false,
//   'allow_self_signed'=>false
//   ));
        }
    
    ?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<div class="modal fade" id="completesignupmodal" tabindex="-1" aria-labelledby="completesignupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="completesignupmodalLabel">Complete Pack Signup</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <div class="mb-3">
    <label for="exampleInputname" class="form-label">FirstName</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputlast" class="form-label">LastName</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputlast" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="form-group">
  <label for="exampleInputPack" class="form-label">Select one Pack</label>
                                <select class="form-control-select" id="rselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="Personal Loan">Starter</option>
                                    <option class="select-option" value="Car Loan">Medium</option>
                                    <option class="select-option" value="House Loan">Complete</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> -->
  
                            <div class="mb-3">
    <label for="exampleInputPack" class="form-label">Pack Selected</label><br>
    <input type="text"  class="form-control" value="Complete" id="exampleInputPack">
  </div>
  

    <div class="mb-3">
    <label for="exampleInputemail" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputemail">
  </div>

  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Phone</label>
    <input type="number" name="phone" class="form-control" id="exampleInputPhone">
  </div>

  <div class="mb-3">
  <label for="exampleInputPhone" class="form-label">Address</label>
  <textarea class="form-control" name="address" id="floatingTextarea2" style="height: 100px"></textarea>
  
</div>
<div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with EBase's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
  <div class="text-center">
  
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" name="c" class="btn btn-primary col-3 my-3">SignUp</button>
  </div>
</form>
      </div>
      
    </div>
  </div>
</div>
