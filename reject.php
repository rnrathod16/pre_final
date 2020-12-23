<?php
    require 'loginsystem/partials/dbconnect.php';
    $id = $_GET['id'];
    
    $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id'";
    $result=mysqli_query($con,$query);
        if($result){
            echo "Account has been rejected.";
            
            
        }else{
            echo "Unknown error occured. Please try again.";
        }
        header("location:home.php");
?>
