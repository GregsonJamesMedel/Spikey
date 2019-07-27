<?php session_start(); ?>
<!DOCTYPE html>

<html>

<head>
	<title>Register an Account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="Script/JQuery.js"></script>
	<script src="Script/bootstrap.js"></script>
	<link rel="Stylesheet" type="text/css" href="CSS/bootstrap.css">
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
				<li><a href="CustomerLogin.html">Login</a></li>
			  </ul>
			</div>
		  </div>
	</nav>
	
	<div class="container-fluid"  style="background-image: url('/Images/bg1.png');">
		<div class="container-fluid" style="height: 100%;">
			<div id="main">
				<style>
					h3{
						color: #f4bf62;
						text-align: center;
					}
					h4{
						color: #f4bf62;
						text-align: center;
					}
				</style>
				
			<?php
				require 'Connection.php';
				$typeOfActtion = $_GET["typeOfAction"];
				$_Username = $_POST['Username'];
				$_Password = $_POST['password'];
				$_Firstname = $_POST['Firstname'];
				$_Lastname = $_POST['Lastname'];
				$_Plate = $_POST['PlateNumber'];
				$_VehicleType = $_POST['VehicleType'];
				
				if(empty($_Username)||empty($_Password)||empty($_Firstname)||empty($_Lastname)||empty($_Plate)||empty($_VehicleType))
				{
						echo "Oooooppppssss! Cant leave any field blank";
				}
				else
					{
						if($typeOfActtion == "Register")
						{
							$sqlRegister = "INSERT INTO `customers`(`Username`, `Password`, `Firstname`, `Lastname`, `PlateNumber`, `TypeofVehicle`,`Role`,`NumberofStamps`) VALUES('$_Username','$_Password','$_Firstname','$_Lastname','$_Plate','$_VehicleType','User',0)";
							$res = mysqli_query($Conn,$sqlRegister);
							if(!$res)
								{
									die("connection failed" . mysqli_connect_error($Conn));
								}
							else
								{
									echo "
									<h3>Your Registration is Successfull</h3> <br>
									<h4>Please Login to see your stamps.<h4>
									<a href='CustomerLogin.php?Role=User'><h4>Login</h4></a>
									";
								}
							// echo $sqlRegister;
							// echo $_Username . " - " . $_Password . " - " . $_Firstname . " - " . $_Lastname . " - " . $_Plate . " - " . $_VehicleType;
						}
						else
						{
							$controlid = $_GET["id"];
							$sqlEdit = "UPDATE `Customers` SET `Username`='$_Username', `Password` = '$_Password', `Firstname` = '$_Firstname', `Lastname` = '$_Lastname', `PlateNumber` = '$_Plate', `TypeofVehicle` = '$_VehicleType' where ControlNumber = '$controlid' ";
							$res = mysqli_query($Conn,$sqlEdit);
							if(!$res)
								{
									die("connection failed" . mysqli_connect_error($Conn));
								}
							else
								{
									echo "<script>window.open('CustomerProfile.php','_self',null,true)</script>";
								}
						}
				}
				
			?>			
			</div>
		</div>
	</div>
</body>

</html>