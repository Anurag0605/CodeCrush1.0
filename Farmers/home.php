
<?php 
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);
session_start();
$user = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Farmer's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">

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
      .icon {
  width: 3rem;
  height: 3rem;
}

.icon i {
  font-size: 2.25rem;
}

.icon-shape {
  display: inline-flex;
  padding: 12px;
  text-align: center;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
}

.icon-shape i {
  font-size: 1.25rem;
}
      .banner_main {
     background: url(../images/banner.jpg);
     background-repeat: no-repeat;
     min-height: 840px;
     background-size: 100% 100%;
     display: flex;
     justify-content: center;
     align-content: center;
     align-items: center;

}


.box_text {
     box-shadow: 0 0 95px rgba(13, 3, 3, 0.56);
}

.box_text figure {
     margin: 0;
}

.box_text figure img {
     width: 100%;
}

.text-bg {
     text-align: center;
}

.text-bg h1 {
     text-transform: uppercase;
     color: #fff;
     font-size: 110px;
     line-height: 120px;
     padding-bottom: 15px;
     font-weight: bold;
}

.text-bg p {
     font-size: 17px;
     color: #fff;
     line-height: 28px;
     font-weight: 500;
     padding-bottom: 50px;
     display: block;
}

.text-bg a {
     font-size: 17px;
     background-color: transparent;
     color: #fff;
     font-weight: 600;
     padding: 11px 0px;
     width: 100%;
     max-width: 230px;
     text-align: center;
     display: inline-block;
     border-radius: 30px;
     border: #030303 solid 4px;
     transition: ease-in all 0.5s;
}

.text-bg a:hover {
     background-color: #13110e;
     color: #fff;
     transition: ease-in all 0.5s;
}
.three_box {
     margin-top: -5%;
     display:flex;
     flex-direction:row;
     justify-content:center;
     margin-left: 20%;

     /* margin-bottom: 20%; */
}
.user{
  margin-right:2em;
  display:flex;
}

.far{
  margin-top: 0.3em;
}

.cont{
  transform:scale(1.2);
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
h4{
  color:white;
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
                <a class="nav-link active" aria-current="page" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="uploadmain.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="UploadedProducts.php">AvailableProducts</a>
              </li>
            </ul>
            <div class="user">
            <div></div>
            <h4><i class='far fa-user-circle' style='font-size:25px'></i> <?php echo $user?> </h4>
            </div>
          </div>
        </div>
      </nav>
      <section class="banner_main">
        <div class="container">
           <div class="row">
              <div class="col-md-12 ">
                 <div class="text-bg">
                    <h1>Welcome, <?php echo $user?>!! </h1>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it</p>
                    <a href="#about">Discover</a>
                 </div>
              </div>
           </div>
        </div>
     </section>

      <div class="three_box">
        <div class="container">
          <div class="main-content">
            <!-- <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> -->
              <div class="container-fluid">
                <div class="header-body">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6">
                      <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                              <span class="h2 font-weight-bold mb-0">350,897</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                      <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Revenue</h5>
                              <span class="h2 font-weight-bold mb-0">2,356</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                <i class="fas fa-chart-pie"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                            <span class="text-nowrap">Since last week</span>
                          </p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6">
                      <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                              <span class="h2 font-weight-bold mb-0">49,65%</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                <i class="fas fa-percent"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                            <span class="text-nowrap">Since last month</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page content -->
          </div>

        </div>
      </div>

      <div id="about" class="about mt-7">
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
                        <figure><img src="../Consumer/mimages/about.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-contact1 cont" id="contact">
		<div class="contact1-pic js-tilt" data-tilt>
			<img src="../Consumer/images/img-01.png" alt="IMG">
		</div>

		<form class="contact1-form validate-form">
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
				<button class="contact1-form-btn">
					<span>
						Send Email
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</span>
				</button>
			</div>
		</form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>