<?php
	session_start();
	$typeOfAction = $_GET["typeOfAction"];
	if($typeOfAction == "Register"){ 
		if(!empty($_SESSION["sawUsername"])){echo "<script>window.open('index.php','_self',null,true); alert('Seems that you are already registered!');</script>";}
	}elseif($typeOfAction=="Edit"){
	$ID = $_GET["ControlNumber"];}
?>
<!DOCTYPE html>

<html>

<head>
	<title><?php if($typeOfAction == "Register"){echo "Register an Account";} else {echo "Edit Information";}?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="Stylesheet" type="text/css" href="CSS/registerStyle.css">
	<style>
		#main{
			background-color: black;
			width: 100%;
			height: 100%; 
			padding: 10px; 
			border-radius: 10px; 
			border: 5px solid #f4bf62;
			border-top: 0;
			margin-bottom: 5px;
		}
		
		body{
			background-image: url('Images/bg1.png'); 
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		
		#ddl{
			width: 100%;
			height: 35px;
			border-radius: 5px;
			margin-left: 0;
			margin-top: 0;
		}
	</style>
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
			  <a style="color: #f4bf62" class="navbar-brand" href="index.php">Spikey's Auto Wash</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li></li>
			  </ul>
			</div>
		  </div>
	</nav>
	
	<div class="container-fluid"  style="background-image: url('/Images/bg1.png');">
		<div class="container-fluid" style="height: 100%;">
			<div id="main">
				<div class="row">
				<hr>
					<h2 style="text-align: center; color: #f4bf62;"><?php if($typeOfAction == "Register"){echo "Register an Account";} else {echo "Edit Information";}?></h2>
				<hr>
				<div class="box">
					<div class="col-lg-6">
						<div class="col-md-8">	
							<form role="form" action="RegisterAction.php?typeOfAction=<?php if($typeOfAction == "Register"){ echo "Register"; } else { echo "Edit&id=" . $ID; } ?>" method="POST">
								<div class="form-group">
								  <label for="username">Username:</label>
								  <input type="text" name="Username" class="form-control" id="username" placeholder="Enter Username" required maxlength="15">
								</div>
								
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required maxlength="15" minlength="6">
								</div>
								
								<div class="form-group">
								  <label for="Firstname">Firstname:</label>
								  <input type="text" name="Firstname" class="form-control" id="Firstname" placeholder="Enter Firstname" required maxlength="20">
								</div>
								
								<div class="form-group">
								  <label for="Lastname">Lastname:</label>
								  <input type="Text" name="Lastname" class="form-control" id="Lastname" placeholder="Enter Lastname" required maxlength="15">
								</div>
								
								<div class="form-group">
								  <label for="Plate">Plate Number:</label>
								  <input type="text" name="PlateNumber" class="form-control" id="Plate" placeholder="Enter Plate Number" required maxlength="10">
								</div>
								
								<div class="form-group">
								  <label for="Type">Type of Car:</label><br><br>
								  <select name="VehicleType" id="ddl" class="dropdown">
									<option value="Motorcycle">Motorcycle</option>
									<option value="Tricycle">Tricycle</option>
									<option value="Car">Car</option>
									<option value="SUV/AUV/PICK-UP">SUV/AUV/PICK-UP</option>
									<option value="Van">Van</option>
								  </select>
								</div>
								
								<br>
								<button id="btn" type="Submit" class="btn btn-default">Submit</button>
							</form>
						</div><br><br>
					</div>
					
					
					<div class="col-lg-6" id="ads">
                        <center>
                            <h4 style="color: red"><Strong>PROMO!!!</Strong></h4>
                            <h4 style="Text-align: center;">Once you Completed our stamp in our Loyalty card, you can enjoy the following services for <span style="color: red"><strong>FREE!!!</strong></span></h4>
                            <br>
                                <h5><span style="color: red"><strong>FREE</strong></span> BODY WASH | 
                                <span style="color: red"><strong>FREE</strong></span> ARMOUR ALL |
                                <span style="color: red"><strong>FREE</strong></span> WAX</h5>
                            <br>

                            <img class="img-responsive img-border img-left" style="border: 5px solid #f4bf62; border-radius: 10px;" src="Images/ads.png" alt=""><br>
                        </center>
				    </div>
                </div>
				
				
				
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>