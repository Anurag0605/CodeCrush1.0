<?php
$insert=FALSE;
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  // echo "Connected successfully";
}


if(isset($_POST["submit"])){ 
    $status = 'error'; 
$name = $_POST['vname'];
$desc = $_POST['vdesc'];
$quan = $_POST['vquan'];
$price = $_POST['vprice'];
$exp = $_POST['vexp'];


   if (isset($_POST["submit"])) {
    
    $filee=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query="INSERT INTO `farmers`.`veggies` (`name`, `descptn`, `quantity`, `price`, `exp_date`, `img`) VALUES ('$name', '$desc', '$quan', '$price', '$exp','$filee');";
    if ($conn->query($query)==true) {
        $insert=TRUE;
        // $name = '';
        // echo "Successsssssssssssssssssssssssss";
      }
      else{
        //  echo "Not Inserted Succesfully";  
      }
        
   }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VEGGIES | Uplaod</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    
    <style>
      body{
        font-family: 'Alkatra', cursive;
      }
        h1{
          margin-top: 3%;
            text-align: center;
        }
        .form{
            margin-top: 3%;
            width: 40%;
            margin-left: auto;
            margin-right: auto;
            border: 3px solid green;
            padding: 45px;
            border-radius: 10px;
        }
        .navbar{
	background-color: black;
	border-bottom: 2px solid rgb(184, 179, 179);
	font-size: 1.2em;
	color: white;
}

.navbar-brand{
	font-size: 1.3em;
}

.navbar-nav li{
	margin-left: 2.4em;
	
}

.navbar-nav{
	margin-left: 23%;
}

    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../main.html">Farmer's</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="uploadmain.html">UplaodProducts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="UploadedProducts.php">AvailableProducts</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <?php
    if($insert==TRUE){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Signed Up SuccessFully</strong> You can Login to Your account Now.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    ";
    }
?>
      <h1>Enter all the Details about VEGGIES!</h1>
      <div class="form">
      <form action="uploadveg.php" method="post" enctype="multipart/form-data">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="vname" placeholder="Tomato" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1">Description</label>
              <input type="text" name="vdesc" placeholder="Fresh Tomatos from farm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1">Quantity</label>
              <input type="text" name="vquan" placeholder="5kgs" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputPassword1">Price</label>
              <input type="text" name="vprice" placeholder="20Rs/kg" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group mt-3">
              <label for="exampleInputPassword1">Expiry Date</label>
              <input type="date" name="vexp" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group mt-4">
                <label for="">Uplaod image of the product</label> <br>

                <input type="file" name="image" class="form-control-file" id="image">
              </div>
            <div class="form-check mt-4">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
              <label class="form-check-label" for="exampleCheck1">All details provided by me are correct!</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-50">Submit</button>
         
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- <script>
      $(document).ready(function(){
        $('#insert').click(function(){
          var img_name=$('#image').val();
          if(img_name==''){
            alert("Please Select Image");
            return false;
          }
          else{
            var extension=$('#image').val().split('.').toLowerCase();
            if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1){
              alert("Invalid Image File");
              $('#image').val('');
              return false;
            }
          }
        })
      })
    </script> -->
  </body>
</html>