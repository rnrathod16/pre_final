<?php
require 'partials/dbconnect.php';

session_start();

        if(!isset($_SESSION['loggedin'])){
            echo 'session time out';
        }
        else{
            echo "welcome ".$_SESSION['username'];
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
<?php
if(isset($_SESSION['loggedin'])){

    echo "<button type='submit'><a href='logout.php'>logot</a></button>";
}
else{
   echo "<button type='submit'><a href='login.php'>login</a></button>";

}

?>
</body>
</html>