<?php
    require 'loginsystem/partials/dbconnect.php';
    $id = $_GET['id'];

    $query = "select * from `requests` where `id` = '$id' ";

    $result=mysqli_query($con,$query);

    $num=mysqli_num_rows($result);
    if($num > 0){
        while(($fetch=mysqli_fetch_assoc($result))){
            $firstname = $fetch['firstname'];
            $lastname = $fetch['lastname'];
            $username = $fetch['username'];
            $password = $fetch['password'];
            $pack=$fetch['pack'];
            $email=$fetch['email'];

            $q= "INSERT INTO `rejected` (`firstname`, `lastname`, `username`, `password`, `pack`, `email`) VALUES ('$firstname', '$lastname', '$username', '$password', '$pack', '$email');";

            $r=mysqli_query($con,$q);
        }
    }
    $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id'";
    $result=mysqli_query($con,$query);
        if($result){
            echo "Account has been rejected.";
            
            
        }else{
            echo "Unknown error occured. Please try again.";
        }
        header("location:home.php");
?>
