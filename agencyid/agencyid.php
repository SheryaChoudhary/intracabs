<?php 

// session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: loginform.php");
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="agencyid.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />    
</head>

<body>

<a herf="#">
    <div class="site-logo">
        <img src="../images/logo.gif" id="logogif" alt="IntraCabs-Website-Logo">
    </div>
</a>
<div class="topnav">    
    <a class="active" href="#home">Ride</a>
    <a href="#">Shared Cabs</a>
    <a href="#">Rent Cab</a>
    <a href="#">Ride History</a>
</div>
<a href="../index.php"> 
    <h6 style="margin:-2rem 0rem 0rem 75rem;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</h6>
</a>

<div class="col-lg-6" style="padding-left:16px; ">
  <h1 style="font-weight: 1000; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 143px 0px 26px 100px;">Looking For Easy <br> Hassel Free <br> Ride</h2>
  <p style="margin: 0px 0px 26px 100px;">Garenteed to get you a Ride with the Best Price!</p>
  
  <div class="page-content page-container" id="page-content">
     <div class="padding">
         <div class="row container d-flex justify-content-center" style="margin: -17px 1px 0px -92px !important">
             <div class="template-demo mt-2"> <button class="btn btn-outline-dark btn-icon-text"> <i class="fa fa-apple btn-icon-prepend mdi-36px"></i> <span class="d-inline-block text-left"> <small class="font-weight-light d-block">Available on the</small> App Store </span> </button> <button class="btn btn-outline-dark btn-icon-text"> <i class="fa fa-android btn-icon-prepend mdi-36px"></i> <span class="d-inline-block text-left"> <small class="font-weight-light d-block">Get it on the</small> Google Play </span> </button> </div>
         </div>
     </div>
 </div>
 <br>
  <a class="btn btn-warning" href="../addcars/addcars.php" role="button" style="margin: 0px 0px 26px 100px" type="button" >Add New Cars</a> 
  <a class="btn btn-warning" href="../carsbooked/carsbooked.php" role="button" style="margin: 0px 0px 26px 100px" type="button" >View Booked Cars</a>
</div>
<div class="col-lg-6">
<img src="../images/ride.gif" alt="Cabs-on-road" style="margin:-25rem 5rem 0rem 50rem; height: 25rem; ">
</div>

<br>

<div class="container"  style="align-items: center !important;">
            <h5 style="color: #737373; align-items: center !important;">How To Join Us!</h5>
            <h3>Earn with Us in Four Easy Steps!</h3><br>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <h4 style="color: #5a5a5ad3;"><i class="fa fa-map-marker" aria-hidden="true"></i><br>Choose Location</h4>
            </p>
          </div>

          <div class="col-xs-6 col-md-3 col-lg-4">
          <h4 style="color: #5a5a5ad3;"><i class="fa fa-usd" aria-hidden="true"></i><br>Check Price</h4>
            
          </div>

          <div class="col-xs-6 col-md-3 col-lg-4">
          <h4 style="color: #5a5a5ad3;"><i class="fa fa-taxi" aria-hidden="true"></i><br>Book Your Cab</h4>
          </div>       
    </div>
</div>
<br>



  <!---------------------------------------- Site footer --------------------------------------------------------->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3">
            <h6><i class="fa fa-clock-o" aria-hidden="true"></i><br>24*7</h6>
            <p class="text-justify">At your service!
            </p>
          </div>

          <div class="col-xs-6 col-md-3 col-lg-3">
          <h6><i class="fa fa-usd" aria-hidden="true"></i><br>Price...</h6>
            <p class="text-justify"> Your Budget's Best Friend</p>
          </div>

          <div class="col-xs-6 col-md-3 col-lg-3">
          <h6><i class="fa fa-eye" aria-hidden="true"></i><br>Safe & Secure</h6>
            <p class="text-justify">Priority is Your Safety</p>
          </div>

          <div class="col-xs-6 col-md-3 col-lg-3">
          <h6><i class="fa fa-map-signs" aria-hidden="true"></i>Find Our Service</h6>
            <p class="text-justify">Anywhere & Everywhere You Go!</p>
          </div>        
      </div>
    </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
            <a href="#">IntraCabs Pvt. Ltd.</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

</body>
</html>
