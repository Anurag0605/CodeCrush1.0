<?php
$insert=false;

if (isset($_POST["lname"]) && isset($_POST["submit"])) {
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);

//To check is connection is sestablished or not.

// echo"Hieee";

$name = $_POST['lname'];
$pass = $_POST['lpass'];


$sql = "SELECT * FROM consumers.signup WHERE name='$name' AND pass='$pass'";

$result= mysqli_query($con,$sql) or die (mysqli_error($con));

$num= mysqli_num_rows($result);

if ($num!= 0) {
  $insert=true;
  echo "Succeessful login";
  session_start();
  $_SESSION['usernamec'] = $_POST['lname'];
  header("Location:home.php");
  exit();

  }
  else{
    echo "Invalid credentials!!";
  }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login|Farmer's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    <style>
        body{
            overflow-x: hidden;
            font-family: 'Alkatra', cursive;
        }
        /* form{
            border: 2px solid green;
            border-radius: 30px;
            padding: 30px;
            margin-top: 2%;
            width: 40%;
            margin-left: auto;
            margin-right: auto;
        } */
        h1{
            margin-top: 1%;
            text-align: center;
        }
        .btn{
            width: 70%;
            margin-left: 10%;
        }
        input{
            border: 2px solid black;
        }
        .vh-100{
            margin-top: -5%;
            transform: scale(1.2);
            width: 100%;
            
        }

        .limg{
          margin-top: 4em;
          margin-left: 10em;
        }

        .fclass{
          margin-right: 10em;
        }

        .hr{
          width:70%;
          border:2px solid blue;
          margin-left: auto;
          margin-right: auto;
        }
       
    </style>
  </head>
  <body>
   
    <h1>Login To Your account</h1>
    <hr class="hr">
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="../images/userlogin.png"
                class="img-fluid limg" height="400em" width="450em" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form action="login.php" method="post" class="fclass">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" name="lname" id="form1Example13" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example13">Username</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="lpass" id="form1Example23" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example23">Password</label>
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                  <a href="#!">Forgot password?</a>
                </div>
      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
      
                <div class="text-center mt-4">
                    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>