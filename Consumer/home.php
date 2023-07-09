<?php 
// Include the database configuration file  
// require_once 'dbConfig.php'; 
session_start();
$server="localhost";
$username="root";
$password="";

$conn= mysqli_connect($server,$username,$password);

if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
else{ // echo "Connected successfully"; 
} 



if(isset($_POST["submit"])){
  $name = $_POST['name'];
$mail = $_POST['email'];
$sub = $_POST['subject'];
$msg = $_POST['message'];
// echo"hieeeeeeeeeeeeeeeeeeee";
  $sql="INSERT INTO `consumers`.`contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$mail', '$sub', '$msg');";
  if ($conn->query($sql)==true) {
    $insert=TRUE;
    // echo "Inserted Succesfully";
  }
  else{
     echo "Not Inserted Succesfully";  
  }
}



$user = $_SESSION['usernamec'];

// echo $user;

// Get image data from database
$result = $conn->query("SELECT * FROM `farmers`.`fruits` ORDER BY id DESC");
// $result1 = $conn->query("SELECT * FROM `farmers`.`fruits` ORDER BY id DESC"); //
// $result2 = $conn->query("SELECT img FROM `farmers`.`fruits` ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home|Consumer</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

  <link rel="stylesheet" href="mcss/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="mcss/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="mcss/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="mimages/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="mcss/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    
    <style>
      body{
        font-family: 'Alkatra', cursive;
      }
      .banner {
        background-color: black;
        color: #f1f1f1;
        height: 100vh;
      }
      .container {
        height: 100vh;
      }
      .row {
        align-items: center;
        height: 100vh;
        overflow: hidden;
      }
      .btn {
        padding: 0.5em 1.5em;
        border-radius: 2em;
      }

      @media screen and (min-width: 769px) {
        p {
          font-size: 1.2em;
        }
      }
      @media screen and (max-width: 768px) {
        .banner {
          padding: 2em;
          text-align: center;
        }
      }
      @media screen and (max-width: 567px) {
        img {
          width: 70%;
        }
      }

      .card {
        
        border: 3px solid black;
        border-radius: 15px;
        transition: all 0.3s ease-in-out;
        
      }
      .card img{
        border-radius: 15px;
        
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

      .upcard{
        
        display: flex;
        justify-content: center;
        margin-bottom: 2em;
        margin-top: 2em;
        flex-wrap: wrap;
      }
      h4{
        color: white;
        margin-right: 1.5em;
      }
      .trend{
        margin-top: 1.2em;
      }

      hr{
        width: 80%;
        border: 2px solid rgb(48, 66, 225);
        margin-left: auto;
        margin-right: auto;
      }

      .card:hover{
        transform: scale(1.1);
        border: 2px solid white;
        cursor: pointer;
      }

      .btn{
        margin-top: 0.5em;
      }

      .card{

width: 350px;
border: none;
box-shadow: 5px 6px 6px 2px #e9ecef;
border-radius: 12px;
}

.circle-image img{

border: 6px solid #fff;
  border-radius: 100%;
  padding: 0px;
  top: -28px;
  position: relative;
  width: 70px;
  height: 70px;
  border-radius: 100%;
  z-index: 1;
  background: #e7d184;
  cursor: pointer;

}


.dot {
    height: 18px;
  width: 18px;
  background-color: blue;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  border: 3px solid #fff;
  top: -48px;
  left: 186px;
  z-index: 1000;
}

.name{
margin-top: -21px;
font-size: 18px;
}


.fw-500{
font-weight: 500 !important;
}


.start{

color: green;
}

.stop{
color: red;
}


.rate{

border-bottom-right-radius: 12px;
border-bottom-left-radius: 12px;

}



.rating {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center
}

.rating>input {
  display: none
}

.rating>label {
  position: relative;
  width: 1em;
  font-size: 30px;
  font-weight: 300;
  color: #FFD600;
  cursor: pointer
}

.rating>label::before {
  content: "\2605";
  position: absolute;
  opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
  opacity: 1 !important
}

.rating>input:checked~label:before {
  opacity: 1
}

.rating:hover>input:checked~label:before {
  opacity: 0.4
}


.buttons{
top: 36px;
  position: relative;
}


.rating-submit{
border-radius: 15px;
color: #fff;
    height: 49px;
}


.rating-submit:hover{

color: #fff;
}

.rcard{
  height:25em;
  margin-top: 2%;
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
.h4c{
  margin-top: 0.2em;
  font-size:1.4em;
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
              <a class="nav-link active" aria-current="page" href="#about"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#contact"
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
          <div class="user">
            <h4 class="h4c">Welcome,<?php echo $user;?>!</h4>
          </div>
        </div>
      </div>
    </nav>
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 order-2 order-sm-1">
            <u><h4 class="fw-bold display-4">Freshness at Your Doorstep</h4></u>
            <p>
              The website provides a variety of options for customers to choose
              from, and the produce is sourced directly from farmers or local
              markets to ensure quality and freshness. The website typically
              includes features such as product listings with images and
              descriptions, shopping cart functionality, secure payment options,
              and delivery or pickup options. Customers can browse the website,
              place their orders, and receive their fresh produce at their
              doorstep, making it a convenient and hassle-free way to buy fruits
              and vegetables.
            </p>
            <a href="products.php" class="btn btn-light">Shop Now</a>
          </div>
          <div class="col-sm-6 order-1 order-sm-2">
            <img src="../images/pngwing.com.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>
    
<div class="trend">
  <h1 align="center">Trending Products!</h1>
</div>
<hr>
    <?php if($result->num_rows > 0){ ?>

    <div class="upcard">
      <?php while($row = $result->fetch_assoc()){ ?>

      <div class="card m-3" style="width: 20rem">
        <img
          height="310em"
          width="312em"
          src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>"
        />
        <div class="card-body">
          <h1 class="pname"><?php echo $row['name'] ?></h1>
          <p class="card-text pdesc"><?php echo $row['descptn'] ?></p>
          <p class="card-text pprice">
            Price: <strong><?php echo $row['price'] ?></strong>
          </p>
          <p class="card-text pprice">
            Expiry Date: <strong><?php echo $row['exp_date'] ?></strong>
          </p>
          <a href="#" class="btn btn-primary btn1">Add to cart</a>
          <a href="#" class="btn btn-primary btn1">Buy Now</a>
        </div>
      </div>
      <?php } ?>
      <?php } ?>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>About Us<br></h2>
                        <h5>Welcome to our agricultural website! Our mission is to provide you with the most up-to-date and relevant information on the latest advances in agriculture and how they can benefit you and your community.

                            We believe that agriculture is the backbone of our society and that sustainable farming practices are crucial for the health of our planet and the well-being of future generations. As such, we are committed to promoting and advocating for sustainable farming practices that prioritize soil health, biodiversity, and the conservation of natural resources.
                            
                            Our team consists of experts in agriculture, environmental science, and technology, who are passionate about making a positive impact in the world through sustainable farming practices. We are constantly researching and testing new techniques and technologies to find the most effective and efficient ways to produce healthy crops while reducing the environmental impact of farming.
                            
                            We are dedicated to providing you with high-quality content, including articles, videos, and tutorials, that cover a wide range of agricultural topics, including crop production, livestock management, irrigation, and soil health. We also provide resources for farmers and gardeners of all skill levels, from beginner to expert, to help you improve your yields and enhance your farming practices.
                            
                        </h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="mimages/about.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

    <div class="container-contact1" id="contact">
		<div class="contact1-pic js-tilt" data-tilt>
			<img src="images/img-01.png" alt="IMG">
		</div>

		<form action="home.php" method="post" class="contact1-form validate-form">
			<span class="contact1-form-title">
				<h2>Get in touch</h2>
			</span>

			<div class="wrap-input1 validate-input" data-validate = "Name is required">
				<input class="input1" type="text" name="name" placeholder="Name">
				<span class="shadow-input1"></span>
			</div>

			<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<input class="input1" type="text" name="email" placeholder="Email">
				<span class="shadow-input1"></span>
			</div>

			<div class="wrap-input1 validate-input" data-validate = "Subject is required">
				<input class="input1" type="text" name="subject" placeholder="Subject">
				<span class="shadow-input1"></span>
			</div>

			<div class="wrap-input1 validate-input" data-validate = "Message is required">
				<textarea class="input1" name="message" placeholder="Message"></textarea>
				<span class="shadow-input1"></span>
			</div>

			<div class="container-contact1-form-btn">
				<button  type="submit" name="submit" class="contact1-form-btn">
					
						Send
						
				</button>
			</div>
		</form>
	</div>

  <div class="container d-flex justify-content-center mt-5">

        <div class="card text-center mb-5 rcard">

            <div class="circle-image">
                <img src="https://avatars.githubusercontent.com/u/86012394?v=4" width="50">
            </div>

                <span class="dot"></span>

            <span class="name mb-1 fw-500"><?php echo $user;?></span>
            <small class="text-black-50">User ID</small>
            <small class="text-black-50 font-weight-bold">A99C</small>



            <div class="location mt-4">

                <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2">Pumphouse Andheri East</small> </span>

                <span><i class="fa fa-map-marker stop mt-2"></i> <small class="text-truncate ml-2">Mumbai-400093</small> </span>
                
            </div>


            <div class="rate bg-success py-3 text-white mt-3">

                <h6 class="mb-0">Rate your Experience!</h6>

                <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>


                <div class="buttons px-4 mt-0">

                <button class="btn btn-warning btn-block rating-submit">Submit</button>
                
            </div>

                
            </div>




            
            
        </div>
        


    </div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
