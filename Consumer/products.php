<?php


?>
<?php 
// Include the database configuration file  
// require_once 'dbConfig.php'; 
$server="localhost";
$username="root";
$password="";

$conn= mysqli_connect($server,$username,$password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  // echo "Connected successfully";
}
// Get image data from database 
$result = $conn->query("SELECT * FROM `farmers`.`veggies` ORDER BY id DESC"); 
$result1 = $conn->query("SELECT * FROM `farmers`.`fruits` ORDER BY id DESC"); 

// $result2 = $conn->query("SELECT img FROM `farmers`.`fruits` ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    
    <style>
.image-gallery {
    text-align:center;
}
.image-gallery img {
    padding: 3px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
    border: 1px solid #FFFFFF;
    border-radius: 4px;
    margin: 20px;
}

body{
  font-family: 'Alkatra', cursive;

}
.upcard{
  display:flex;
  flex-direction:row;
  justify-content:center;
  flex-wrap:wrap;


}

.hr{
  margin-left:auto;
  margin-right:auto;
  border:2px solid cyan;
}
.hr1{
  margin-left:auto;
  margin-right:auto;
  border:2px solid black;
}
.btn1 {
        background-color: transparent;
        border: 2px solid black;
        color: black;
        transition: all 0.3s ease-in-out;
      }

      .btn1:hover{
        border: 2px solid black;
        background-color: black;
        color: white;
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
  <nav
      class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="../main.html">Consumer's</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php#about"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php#contact"
                >Contact</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="products.php"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Products
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="veggies.php">Vegetables</a></li>
                <li><a class="dropdown-item" href="fruits.php">Fruits</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="cart.html"
                >Cart</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="chatbot.html"
                >ChatBot</a
              >
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

<h1 align="center" class="mt-3">Find all the products at one place!</h1>
<hr align="center" class="hr" width="80%">



  <?php if($result->num_rows > 0){ ?>
      
    <div class="upcard">
      <?php while($row = $result->fetch_assoc()){ ?> 
       
        <div class="card m-3" style="width: 20rem;">
            <img height="300em" width="310em" src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" /> 
            <div class="card-body">
         <h1 class="pname"><?php echo $row['name'] ?></h1> 
         <p class="card-text pdesc"><?php echo $row['descptn'] ?></p> 
        <p class="card-text pprice">Price: <strong><?php echo $row['price'] ?></strong></p>
        <p class="card-text pprice">Expiry Date: <strong><?php echo $row['exp_date'] ?></strong></p>
        <a href="#" class="btn btn-primary btn1">Add to cart</a>
          <a href="#" class="btn btn-primary btn1">Buy Now</a>
      </div>
    </div>
        <?php } ?> 
               <?php } ?> 
               

               <?php if($result1->num_rows > 0){ ?>
      
      
        <?php while($row = $result1->fetch_assoc()){ ?> 
         
          <div class="card m-3" style="width: 20rem;">
              <img height="300em" width="310em" src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" /> 
              <div class="card-body">
           <h1 class="pname"><?php echo $row['name'] ?></h1> 
           <p class="card-text pdesc"><?php echo $row['descptn'] ?></p> 
          <p class="card-text pprice">Price: <strong><?php echo $row['price'] ?></strong></p>
          <p class="card-text pprice">Expiry Date: <strong><?php echo $row['exp_date'] ?></strong></p>
          <a href="#" class="btn btn-primary btn1">Add to cart</a>
          <a href="#" class="btn btn-primary btn1">Buy Now</a>
        </div>
      </div>
          <?php } ?> 
                 <?php } ?> 
                 </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>