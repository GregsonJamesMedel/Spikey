<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Spikey's Auto Wash</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="Stylesheet" type="text/css" href="CSS/myStyle.css">
		<link rel="Stylesheet" type="text/css" href="CSS/bootstrap.css">
		<script src="Script/SpikeyScript.js"></script>
		<script src="Script/JQuery.js"></script>
		<script src="Script/bootstrap.js"></script>
		<?php 
		$_UsernameVar = null;
		if(!empty($_SESSION["sawUsername"]))
			{
				$_UsernameVar = $_SESSION["sawUsername"];
			}
		?>
	</head>

	<body>
		<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a style="color: #f4bf62;" class="navbar-brand" href="#">Spikey's Auto Wash</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li><a href="#divPromo">Promos</a></li>
				<li><a href="#divAbout">About</a></li>
				<li><a href="#divServices">Services</a></li>
				<li><a href="#divContactUs">Contact Us</a></li>
				<li><a href="#" onclick="managementclick()">Management</a></li>
				<li><?php if($_UsernameVar != null){echo "<a href='CustomerProfile.php'>My Profile</a>";} else { echo ""; } ?></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<?php if($_UsernameVar == null){echo "<li><a href='Register.php?typeOfAction=Register'>Register</a></li>";} ?>
				<li><?php if($_UsernameVar == null){echo "";} else { echo "<p id='username'>$_UsernameVar</p>"; } ?></li>
				<li><?php if($_UsernameVar == null){echo "<a href='customerLogin.php?Role=User'>Login</a>";} else { echo "<a href='logout.php'>Logout</a>"; } ?></li>
			  </ul>
			</div>
		  </div>
		</nav>

		<div class="parallax " style="Background-image: url('Images/background.png')"></div>
			
		<div id="divPromo">
			<br><hr><h3>Promos</h3><hr><br>
			<center>
				<div style="width: 90%">
				<h4 style="Text-align: center;">Once you Completed our stamp in our Loyalty card, you can enjoy the following services for <strong>FREE!!!<strong></h4>
				<br>
					<h5>FREE BODY WASH</h5>
					<h5>FREE ARMOUR ALL</h5>
					<h5>FREE WAX</h5>
				<br>
				<br>
				<img class="img-responsive img-border img-left" src="Images/LoyaltyCard.png" alt=""><br>
				<br>
				<h4>SO WHAT ARE YOU WAITING FOR? REGISTER YOUR PLATE NUMBER</h4>
				<a href="Register.php?typeOfAction=Register" 
				style="text-decoration: none; color: white; border: 2px solid white; font-size: 40px; padding: 5px;">HERE!</a>
				<br><br><br>
				</div>
			</center>
		</div>
	
		<div class="parallax" style="Background-image: url('Images/service1.png');  -webkit-filter: grayscale(100%);
		filter: grayscale(100%);"></div>
	
		<div id="divAbout">
			<br><hr><h3>About Spikey's Auto Wash</h3><hr><br>
				<center>
				
					<div style="width: 90%">
						<h4><strong>Services</strong></h4><hr>
						
						<h4>Spikey's auto wash is a car wash shop that offers different kinds of services for different kinds
							of Vehicles such as Motorcycle, Tricycle, Car, SUV, AUV, PICK-UP and Van. Some of the services that
							we offer are Body Wash, Wax (Hand Buff or Machine Buff), Armour All, Wax, Wash, and Armour, Interior Detailing,
							Exterior Detailing, Glass Watermarks and Rain Removal, Carpet Wash(Removal and Shampoo), and Seat Cover Removal 
							and Installation.
							<hr><br><br>
						</h4>
						
						<h4><strong>Facilities</strong></h4>
						<hr>
							<h4>While you are waiting, you can sit and relax in our air conditioned waiting area</h4><br>
								<img class="img-responsive img-border img-left" src="Images/facility1.png" alt=""><br>
								<h4>A flat screen TV and a free water for our customer.</h4><br>
								<img class="img-responsive img-border img-left" src="Images/facility2.png" alt=""><br>
								<h4>A very comfortable facility for our beloved customer. <strong>Only at Spikey's Auto Wash!</strong>
								So what are you waiting for? Visit our shop at Tatlonghari Street, Brgy. Market Area, Sta. Rosa City,
								Laguna.
							</h4>
						<hr>
					</div>
				
				</center>
				<br><br>
		</div>
		
		<div class="parallax" style="Background-image: url('Images/service2.png'); -webkit-filter: grayscale(100%);
		filter: grayscale(100%);"></div>
	
        <div id="divServices">
			<br><hr><h3>Here are the services that we offer</h3><hr><br>
			<center>
			<div style="width: 90%;">
				<div class="table-responsive">
				  <table class="table" border="5px">
					<thead>
					  <tr>
						<th style="text-align: center; color: #f4bf62;">Servies</th>
						<th style="text-align: center; color: #f4bf62;">Motorcycle</th>
						<th style="text-align: center; color: #f4bf62;">Car</th>
						<th style="text-align: center; color: #f4bf62;">SUV/AUV/PICK-UP</th>
						<th style="text-align: center; color: #f4bf62;">Van</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td colspan="5"><h4 style="text-align: center; color: #f4bf62;">Wash and Wax</h4></td>
					  </tr>
					  
					  <tr>
						<td>Body Wash</td>
						<td>P 50.00</td>
						<td>P 80.00</td>
						<td>P 110.00</td>
						<td>P 130.00</td>
					  </tr>
					  
					  <tr>
						<td>Wax (Hand Buff)</td>
						<td>P 50.00</td>
						<td>P 140.00</td>
						<td>P 160.00</td>
						<td>P 180.00</td>
					  </tr>
					  
					  <tr>
						<td>Wax (Machine Buff)</td>
						<td></td>
						<td>P 350.00</td>
						<td>P 400.00</td>
						<td>P 450.00</td>
					  </tr>
					  
					  <tr>
						<td>Armour All</td>
						<td>P 50.00</td>
						<td>P 180.00</td>
						<td>P 100.00</td>
						<td>P 120.00</td>
					  </tr>
					  
					  <tr>
						<td colspan="5"><h4 style="text-align: center; color: #f4bf62;">Package Price</h4></td>
					  </tr>
					  
					  <tr>
						<td>Wax, Wash, and Armour</td>
						<td>P 100.00</td>
						<td>P 270.00</td>
						<td>P 320.00</td>
						<td>P 370.00</td>
					  </tr>
					  
					  <tr>
						<td colspan="5"><h4 style="text-align: center; color: #f4bf62;">Auto Detailing Services</h4></td>
					  </tr>
					  
					  <tr>
						<td>Interior Detailing</td>
						<td></td>
						<td>P 1,200.00</td>
						<td>P 1,500.00</td>
						<td>P 1,700.00</td>
					  </tr>
					  
					  <tr>
						<td>Exterior Detailing</td>
						<td></td>
						<td>P 1,500.00</td>
						<td>P 1,800.00</td>
						<td>P 2,000.00</td>
					  </tr>
					  
					  <tr>
						<td colspan="5"><h4 style="text-align: center; color: #f4bf62;">Other Services</h4></td>
					  </tr>
					  
					  <tr>
						<td>Glass Watermarks and <br> Acid Rain Removal</td>
						<td></td>
						<td>P 500.00</td>
						<td>P 700.00</td>
						<td>P 900.00</td>
					  </tr>
					  
					  <tr>
						<td>Carpet Wash<br> (Removal and Shampoo)</td>
						<td></td>
						<td>P 1,500.00</td>
						<td>P 1,800.00</td>
						<td>P 2,000.00</td>
					  </tr>
					  
					  <tr>
						<td>Seat Cover Removal <br>and Installation</td>
						<td></td>
						<td>P 1,500.00</td>
						<td>P 1,800.00</td>
						<td>P 2,000.00</td>
					  </tr>
					</tbody>
				  </table>
				</div><br>
			</div>
			</center>
        </div>
	
		<div class="parallax" style="Background-image: url('Images/service3.png'); -webkit-filter: grayscale(100%);
		filter: grayscale(100%);"></div>
		
		<div id="divContactUs">
			<center>
			<div>
				<br><hr><h3>Contact Us</h3><hr><br>
				<h4><strong>Contact Number</strong></h4>
				<h4>Landline: (049)545-0359</h4>
				<h4>Mobile Number: 0917-8848886</h4><br>
				<h4><strong>Other</strong></h4>
				<h4>Email: Spikeys@Spikeys.com</h4>
				<h4>Facebook: www.Facebook.com/SpikeysAutoWash</h4><br>
			</div>
			</center>
		</div>
		
		<div class="parallax" style="Background-image: url('Images/service4.png'); -webkit-filter: grayscale(100%);
		filter: grayscale(100%);"></div>
		
		<div id="footer" style="background-color: black; text-align: center; color: white; height: 70px;">
			<br>
			<p>Copyright &copy; Spikey's Auto Wash 2017</p>
			<a href="#">Back to top</a><br>
		</div>
	
		<script>
			function managementclick(){
				if(confirm("Only Administrators are allowed in this page. Please login as an Administrator") == true)
				{
					window.open("CustomerLogin.php?Role=Admin","_self",null,true);
				}
			}
		</script>
		
	</body>
</html>


