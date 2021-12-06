<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'menu.php'; ?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="RECRETIONAL ROCKSTAR" width="1100" height="500">
      <div class="carousel-caption">
        <h3>RECRETIONAL ROCKSTAR</h3>
        <p>We had such a great time in PC!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="DIGITAL LIFE" width="1100" height="500">
      <div class="carousel-caption">
        <h3>DIGITAL LIFE</h3>
        <p>SECURE YOUR DIGITAL LIFE STYLE!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="ATTACK" width="1100" height="500">
      <div class="carousel-caption">
        <h3>ATTACK</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About Us</h3>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/cc3.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 >Cyber Attack</h2>
			<p class="py-3">
				A cyberattack is any offensive maneuver that targets computer information systems, computer networks, infrastructures, or personal computer devices. An attacker is a person or process that attempts to access data, functions, or other restricted areas of the system without authorization, potentially with malicious intent. Depending on the context, cyberattacks can be part of cyber warfare or cyberterrorism.
			</p>
			<a href="about.php" class="btn btn-success">Check More</a>
		</div>
	</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Our Services</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
		  		<img class="card-img-top" src="images/cc2.jpg" alt="image">
		  	<div class="card-body">
		   	 	<h4 class="card-title">Poke</h4>
		    		<p class="card-text">text</p>
		    		<a href="#" class="btn btn-primary">See Profile</a>
			</div>
			</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
		  		<img class="card-img-top" src="images/cc2.jpg" alt="image">
		  	<div class="card-body">
		   	 	<h4 class="card-title">Poke</h4>
		    		<p class="card-text">text</p>
		    		<a href="#" class="btn btn-primary">See Profile</a>
			</div>
			</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
		  		<img class="card-img-top" src="images/cc2.jpg" alt="image">
		  	<div class="card-body">
		   	 	<h4 class="card-title">Poke</h4>
		    		<p class="card-text">text</p>
		    		<a href="#" class="btn btn-primary">See Profile</a>
			</div>
			</div>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Our Gallery</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/cc1.jpg" class="img-fluid pb-4">
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Our Gallery</h3>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control" required="">
			</div>

			<div class="form-group">
				<label>Email ID</label>
				<input type="text" name="email" autocomplete="off" class="form-control" required="" value="email">
			</div>

			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control" required="">
			</div>

			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comments"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>
<footer>
	<p class="py-3 bg-dark text-white text-center">@AnilChaudhary</p>
</footer>
 	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>