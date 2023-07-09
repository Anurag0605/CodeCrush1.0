<?php
require 'uploadveg.html';
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "Connected successfully";
}


$status=$statusMsg='';


if(isset($_POST["submit"])){ 
    $status = 'error'; 
$name = $_POST['vname'];
$desc = $_POST['vdesc'];
$quan = $_POST['vquan'];
$price = $_POST['vprice'];
$exp = $_POST['vexp'];

   if (isset($_POST["submit"])) {

    $filee=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query="INSERT INTO `farmers`.veggies` (`name`, `descptn`, `quantity`, `price`, `exp_date`, `img`) VALUES ('$name', '$desc', '$quan', '$price', '$exp','$filee');";
    if ($conn->query($query)==true) {
        $insert=TRUE;
        // $name = '';
        echo "Successsssssssssssssssssssssssss";
      }
        
   }

}

?>



