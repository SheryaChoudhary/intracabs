<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="rentcab.css">
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

<form action="ridedetail.php" method="post" style="padding: 6rem 0rem 0rem 24rem;">
  <div class="form-row">
    <div class="form-group col-md-6 col-lg-8">
      <label for="passengername">Name</label>
      <input type="text" class="form-control" id="passengername" placeholder="Passenger Name">
    </div>
    <div class="form-group col-md-6 col-lg-8">
      <label for="carname">Car Name</label>
      <input type="text" class="form-control" id="carname" placeholder="Car Name">
    </div>
  </div>
  <div class="form-group col-md-6 col-lg-8">
    <label for="pickup">Pick Up</label>
    <input type="text" class="form-control" id="pickup" placeholder="Pick Up Address">
  </div>
  <div class="form-group col-md-6 col-lg-8">
    <label for="destination">Destination</label>
    <input type="text" class="form-control" id="destination" placeholder="Destination/ Stopping Location">
  </div>
  <div class="form-row col-md-6 col-lg-8">
    <div class="form-group col-md-6">
      <label for="numberofpassenger">Number Of Passengers Taking Ride</label>
      <input type="text" class="form-control" id="numberofpassenger">
    </div>
    <div class="form-group col-md-4 col-lg-6">
      <label for="starttime">Start Time</label>
      <select id="starttime" class="form-control">
        <option selected>Choose From Below</option>
        <option>12 AM</option>
        <option>1 PM</option>
        <option>2 PM</option>
        <option>3 PM</option>
        <option>4 PM</option>
        <option>5 PM</option>
        <option>6 PM</option>
        <option>7 PM</option>
        <option>8 PM</option>
        <option>9 PM</option>
        <option>10 PM</option>
      </select>
    </div>
    <div class="form-group col-md-4 col-lg-6">
      <label for="endtime">End Time</label>
      <select id="endtime" class="form-control">
        <option selected>Choose From Below</option>
        <option>12 AM</option>
        <option>1 PM</option>
        <option>2 PM</option>
        <option>3 PM</option>
        <option>4 PM</option>
        <option>5 PM</option>
        <option>6 PM</option>
        <option>7 PM</option>
        <option>8 PM</option>
        <option>9 PM</option>
        <option>10 PM</option>
      </select>
    </div>
    <div class="form-group col-md-2 col-lg-4">
      <label for="jsd">Journey Start Date</label>
      <input type="date" class="form-control" id="jsd">
    </div>
    <div class="form-group col-md-2 col-lg-4">
      <label for="jed">Journey End Date</label>
      <input type="date" class="form-control" id="jed">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirm the Booking of Ride
      </label>
    </div>
  </div>
  <a class="btn btn-success" href="../ridedetail/ridedetail.php" role="button" style="margin: 0px 0px 26px 100px" type="button" >Confirm Booking</a>
</form>
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
          <h6><i class="fa fa-map-signs" aria-hidden="true"></i><br>Find Our Service</h6>
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
