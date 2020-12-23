
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "file";

 
 $conn = mysqli_connect($servername, $username, $password, $database);

 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $name = $_POST['file'];
    $sql= "INSERT INTO `upload` (`file`) VALUES ('$file');";
  $result = mysqli_query($conn, $sql);
  }





if(isset($_REQUEST["submit"]))
{
    $file=$_FILES["file"]["name"];
    $tmp_name=$_FILES["file"]["tmp_name"];
    $path="pdf/".$file;
    $filel=explode(".",$file);
    $ext=$filel[1];
    $allowed=array("jpg","png","gif","pdf","wmv");
    if(in_array($ext,$allowed))
    {
 move_uploaded_file($tmp_name,$path);
}
}

?>


<form enctype="multipart/form-data" method="post">

file upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">
</form>