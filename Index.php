<!Doctype html>
<html>
<head>

	<meta charset = "UTF-8">
	<title>Railway Database Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	
	<link rel = "stylesheet" href = "css/bootstrap.min.css" />
	<script type = "text/javascript" src = "js/jquery-3.4.1.min.js"></script>
	<script type = "text/javascript" src = "js/popper.min.js"></script>
	<script type = "text/javascript" src = "js/bootstrap.min.js"></script>

	<link rel="stylesheet" 
	href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" 
	integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" 
	crossorigin="anonymous">
	
	<link rel = "stylesheet" href = "css/custom1.css" />

</head>
<body>

<header>

  <!-- Fixed navbar create -->

<nav class="navbar navbar-expand-md" datasqstyle="{&quot;top&quot;:null}" datasquuid="50a90d7b-4a73-4161-82fe-b0dfd320af9a" datasqtop="40" style="/* top: 40px; */">
    
	<div class="container">
	
	<div class = "col-md-4">
	
	<center><div id="mainlogo" class="navbar-brand">
	
	<img src="logo\images.png" alt="">
	
	</div>
	</center>
	
	</div>
	
	<div class = "col-md-8">
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" 
	data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
	  <i class="fas fa-bars"></i>
    </button>
	
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Ticket.php">Verify Ticket</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="logn.php">Login</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
	</div>
	</div>
  </nav>
</header>

<!-- Fixed navbar End -->

<!-- Fixed section tag create -->

<div class="container">
	<div class="row heading-box">
		<h2 class="text-center"><marquee scrollamount = "10" behavior = "alternate" direction = "right">
      Welcome To Our Railway Management</marquee></h2>
	</div>
</div>

<section style = "padding:0px; "id = "homeslider">
    <div id="slider-animation" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->

  <ul class="carousel-indicators">
    <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
    <li data-target="#slider-animation" data-slide-to="1"></li>
    <li data-target="#slider-animation" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\2197113-train-wallpaper.jpg" alt="Los Angeles" width = '550px' height="450px">
        <div class="text-box">
            <h2 class="wow slideInRight" data-wow-duration="2s">  <!--- header --->  </h2>
            <p class="wow slideInLeft" data-wow-duration="2s"> <!--- from  tag --->  </p>
        </div>
    </div>


    <div class="carousel-item">
      <img src="img\Railway.jpg" alt="Chicago" width = '550px' height="450px">
    <div class="text-box">
            <h2 class="wow slideInUp" data-wow-duration="4s" > <!--- header --->  </h2>
            <p class="wow fadeInDown" data-wow-duration="4s">  <!--- form tag ---> </p>
        </div>
    </div>


    <div class="carousel-item">
      <img src="img\front-img_12.png" alt="Chicago" width = '550px' height="450px">
    <div class="text-box">
            <h2 class="wow slideInUp" data-wow-duration="4s" > <!--- header --->  </h2>
            <p class="wow fadeInDown" data-wow-duration="4s">  <!--- form tag ---> </p>
        </div>
    </div>

  <!-- Left and right controls -->

  <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider-animation" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
    
</section>

<section id = "services">

<div class = "container">
<div class ="row titleRow">
	<div class ="section_title">
	<h2>Services</h2>
	</div>
	</div>
	
	<div class ="row serviceRow">
		
		<div class = "col-md-4">
		<div class = "service_box">
		<div class = "service_icon"><i class="fas fa-tags"></i></div>
		<div class="service_title"> <h5>Get Train Tickets from the comfort of your home</h5></div>
		<div class = "service_desc">
    Book train tickets from anywhere using the robust ticketing platform exclusively built to provide the passengers 
    with pleasant ticketing experience. Also check out the mobile app RailSheba to further extend your pleasure of 
    booking train tickets.
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Learn More
		</button>
		</div>
		</div>
		</div>
		
		<div class = "col-md-4">
		<div class = "service_box">
		<div class = "service_icon"><i class="far fa-clock"></i></div>
		<div class="service_title"> <h5>Train & Ticketing related information at your fingertips</h5></div>
		<div class = "service_desc">
		Checkout available seats, route information, fare information on real time basis with Esheba Platform.
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Learn More
		</button>
		</div>
		</div>
		</div>
		
		<div class = "col-md-4">
		<div class = "service_box">
		<div class = "service_icon"><i class="fas fa-lock"></i></div>
		<div class="service_title"> <h5>Pay Securely</h5></div>
		<div class = "service_desc">
    Pay using your convenient payment option. Bangladesh Railway supports Visa, 
    Master, Amex & Nexus Cards, Rocket and bKash Mobile Financial Services for your convenience.
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Learn More
		</button>
		</div>
		</div>
    </div>
    
  </div>

</div>

</section>

<!-- Fixed section tag End -->

<!-- Fixed footer tag create -->

<footer>

<div class = "container boxescontainer">
	
<div class ="row">

<div class = "col-md-12">

<div class = "footer_box"></div>
	<div class="ftitle"> <h4>About Railway Management System </h4></div>
	<div class = "fdesc">
  A train is a form of rail transport consisting of a series of connected vehicles that generally run along a railroad track 
  to transport cargo or passengers. The word "train" comes from the Old French trahiner, derived from the Latin trahere 
  meaning "to pull" or "to draw".

Motive power for a train is provided by a separate locomotive or individual motors in a self-propelled multiple unit. 
Although historically steam propulsion dominated, the most common types of locomotive are diesel and electric, the latter 
supplied by overhead wires or additional rails. Trains can also be hauled by horses, pulled by engine or water-driven cable 
or wire winch, run downhill using gravity, or powered by pneumatics, gas turbines or batteries.

The track usually consists of two running rails with a fixed spacing, which may be supplemented by additional rails such as 
electric conducting rails and rack rails. Monorails and maglev guideways are also used occasionally.

A passenger train includes passenger-carrying vehicles and can often be very long and fast. One notable and growing 
long-distance train category is high-speed rail. To achieve much faster operation at speeds of over 500 km/h (310 mph), 
innovative maglev technology has been the subject of research for many years. The term "light rail" is sometimes used to 
refer to a modern tram system, but it may also mean an intermediate form between a tram and a train, similar to a heavy 
rail rapid transit system. In most countries, the distinction between a tramway and a railway is precise and defined in law.

A freight train (or goods train) uses freight cars (or wagons/trucks) to transport goods or materials (cargo). 
It is possible to carry passengers and freight in the same train using a mixed consist.

Rail cars and machinery that are used for the maintenance and repair of tracks, are termed "maintenance of way" equipment; 
these may be assembled into maintenance of way trains. Similarly, dedicated trains may be used to provide support services
 to stations along a train line, such as garbage or revenue collection.
    
    <!-- Button trigger modal -->
    
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Learn More
	</button>
	</div>

</div> 

</div>

</div>

<div class = "copyrights">

&copy;All rights reserved by Railway Management

</div>

</footer>

<!-- Fixed footer tag End-->

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <h1>...</h1>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src = "js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


</body>
</html>