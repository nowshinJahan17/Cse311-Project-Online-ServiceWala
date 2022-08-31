<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="css/all.min.css">

 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="css/custom.css">

 <title>Online ServiceWala</title>
</head>
<body>
 <!-- Start Navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-success pl-5 fixed-top">
  <a href="index.php" class="navbar-brand">Online ServiceWala</a>
  <span class="navbar-text">Customer's Happiness is outr Aim</span>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
   <ul class="navbar-nav pl-5 custom-nav">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
    <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
   </ul>
  </div>
 </nav> <!-- End Navigation -->

 <!-- Start Header Jumbotron-->
 <header class="jumbotron back-image" style="background-image:url(images/front1.jpg);">
  <div class="myclass mainHeading">
   <h1 class="text-uppercase text-dark-transparant font-weight-bold">Welcome to Online ServiceWala</h1>
   <p class="font-italic">Customer's Happiness is our Aim</p>
   <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
   <a href="#registration" class="btn btn-info mr-4">Sign Up</a>
  </div>
 </header> <!-- End Header Jumbotron-->

 <!-- Start Introduction Section -->
 <div class="container">
  <div class="jumbotron">
   <h3 class="text-center">Online ServiceWala</h3>
   <p>
   Online Servicewala is a project which aims in developing a online application to maintain all the daily work of Service Centre. 
  Here you will get the necessary things according to your needs. Our sole mission is to make our customers happy by providing such services.
  we provide quality services with excellent packages that are designed to offer you great savings. Our state-of-art workshops are conveniently located in many cities across the country.
 Now you can book your service online by doing Registration.   
   </p>
  </div>
 </div> <!-- End Introduction Section Container -->

 <!-- Start Services Section -->
 <div class="container text-center border-bottom" id="Services">
  <h2>Our Services</h2>
  <div class="row mt-4">
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
    <h4 class="mt-4">Software Engineers</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
    <h4 class="mt-4">Technicians</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
    <h4 class="mt-4">Electrician</h4>
   </div>
  </div>
 </div> <!-- End Services Section Container -->

 <!-- Start Registration Form -->
 <?php include('UserRegistration.php') ?>
 <!-- End Registration Form Container -->

 <!-- Start Happy Customer -->
 <div class="jumbotron bg-success">
   <div class="container">
    <h2 class="text-center text-dark">Happy Customers</h2>
    <div class="row mt-5">
     <div class="col-lg-3 col-sm-6"> <!-- Start 1st Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/customer3.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
        <h4 class="card-title">Zaed Khan</h4>
        <p class="card-text">I would rather be despised of who I am, rather than loved by who I am not.</p>
       </div>
      </div>
     </div> <!-- End 1st Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 2nd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/customer1.jpg" class="img-fluid" style="border-radius:100px;" alt="avt2">
        <h4 class="card-title">Absara Chowdhury</h4>
        <p class="card-text">I do not exist to impress the world. I exist to live my life in a way that will make me always Happy.</p>
       </div>
      </div>
     </div> <!-- End 2nd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 3rd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/customer2.jpg" class="img-fluid" style="border-radius:100px;" alt="avt3">
        <h4 class="card-title">Farhan Ishrak Tahmid</h4>
        <p class="card-text">Every story I build brings me to life.</p>
       </div>
      </div>
     </div> <!-- End 3rd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 4th Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/customer4.jpg" class="img-fluid" style="border-radius:100px;" alt="avt4">
        <h4 class="card-title">Md.Abdul Kader</h4>
        <p class="card-text">I am blessed with a funny gene that makes me enjoy life to the fullest.</p>
       </div>
      </div>
     </div> <!-- End 4th Column -->
    </div>
   </div>
 </div> <!-- End Happy Customer -->

 <!-- Start Contact US -->
 <div class="container" id="Contact">
  <h2 class="text-center mb-4">Contact Us</h2>
  <div class="row">
   <!-- Start 1st Column -->
    <?php include('contactform.php') ?>
   <!-- End 1st Column -->
   <div class="col-md-4 text-center"> <!-- Start 2nd Column -->
    <strong>Headquarter:</strong><br>
     Online ServiceWala Ltd,<br>
    Dhanmondi,Dhaka<br>
    Phone: +880*******<br>
    <a href="#" target="_blank">www.OnlineServiceWala.com</a><br>
    <br> <br>
    <strong>Branch:</strong><br>
    Online ServiceWala Ltd,<br>
    Banani, Dhaka<br>
    Phone: +880000000000<br>
    <a href="#" target="_blank">www.OnlineServiceWala.com</a><br>    
   </div> <!-- End 2nd Column -->
  </div>
 </div> <!-- End Contact US -->

 <!-- Start Footer -->
 <footer class="container-fluid bg-dark mt-5 text-info">
  <div class="container">
   <div class="row py-3">
    <div class="col-md-6"> <!-- Start 1st Column -->
     <span class="pr-2">Follow Us: </span>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
    </div> <!-- End 1st Column -->
    <div class="col-md-6 text-right"> <!-- Start 2nd Column -->
     <small>Designed by Nowshinjahan &copy; 2022</small>
     <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
    </div> <!-- End 2nd Column -->
   </div>
  </div>
 </footer>

 <!-- JavaScript -->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/all.min.js"></script>
</body>
</html>