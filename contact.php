<?php

require 'loginsystem/partials/dbconnect.php';
        if((isset($_POST['sub']))){
            $name = $_POST['name'];
            
            $email = $_POST['email'];
            $message = $_POST['message'];
            

            $query="INSERT INTO `contact` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$message', current_timestamp());";
            $result=mysqli_query($con,$query);

            if($result){
                echo "<script> alert('Your Message has been Submited We will contact You Very Soon'); </script>";
                // require "PHPmailer/compr.php";

                //     $mail= new PHPMailer(true);
                //     $mail-> isSMTP(true);

                //     $mail-> Host='smtp.gmail.com';
                //     $mail-> Port=587;
                //     $mail-> SMTPAuth=true;
                //     $mail-> SMTPSecure='tls';
                //     $mail->SMTPAuth=true;
                //     $mail-> Username='';
                //     $mail-> Password=';

                //     $mail-> setFrom('');
                //     $mail-> addAddress('');
                //     $mail-> isHTML(true);

                //     $mail-> Subject='Contact Request';
                //     $mail-> Body='Hello I am '. $_POST['firstname'].' ,'.  $_POST['lastname'] .' <br> My Email is :- '.$_POST['email'].' <br> Message:- '.$_POST['message'];
                //     $mail-> SMTPOptions= array('ssl'=>array(
                    
                //     'verify_peer'=>false,
                //     'verify_peer_name'=>false,
                //     'allow_self_signed'=>false
                //     ));
            }

            else{
                echo "<script> alert('Please Try Again Your submission is aborted'); </script>";

            }

            
            

            
            
            
        }
    
    ?>

        <form method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="cname" required>
                            <label class="label-control" for="name">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="email">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree with Ebase's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="sub" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                       

        </form>
                    