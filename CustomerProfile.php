<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
	<title>Customer Profile</title>
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
		
		#username{
			color: #f4bf62;
			font-size: 17px;
			margin-top: 13px;
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
				<li><?php $_UsernameVar = $_SESSION["sawUsername"]; if($_UsernameVar == null){echo "";} else { echo "<p id='username'>$_UsernameVar</p>"; } ?></li>
				<li><?php echo "<a href='logout.php'>Logout</a>"; ?></li>
			  </ul>
			</div>
		  </div>
	</nav>
	
	<?php
		$un = $_SESSION['sawUsername'];
		require 'Connection.php';
		$sql = "SELECT * FROM `customers` WHERE Username = '$un'";
		$Resulta = mysqli_query($Conn,$sql);
		while($Rows = mysqli_fetch_array($Resulta)){
			$txtControlNumber = $Rows[0];
			$txtUsername = $Rows[1];
			$txtPassword = $Rows[2];
			$txtFirstname = $Rows[3];
			$txtLastname = $Rows[4];
			$txtPlate = $Rows[5];
			$xtxTypeOfVehicle = $Rows[6];
			$numOfStamps = $Rows[7];
		}
	?>
	
	<div class="container-fluid"  style="background-image: url('/Images/bg1.png');">
		<div class="container-fluid" style="height: 100%;">
			<div id="main">
				<div class="row">
				<hr>
					<h2 style="text-align: center; color: #f4bf62;">Customer Profile</h2>
				<hr>
				<div class="box">
					<div class="col-lg-6">
						<div class="col-md-8">	
								<form role="form" action="Register.php?typeOfAction=Edit&ControlNumber=<?php echo $txtControlNumber; ?>" method="POST">
                                    <div class="form-group">
                                      <label for="username">Control Number:</label>
                                      <input type="text" name="ControlNumber" class="form-control" id="ControlNumber" value="<?php echo $txtControlNumber; ?>" disabled>
                                    </div>  

                                    <div class="form-group">
                                      <label for="username">Username:</label>
                                      <input type="text" name="Username" class="form-control" required maxlength="15" value="<?php echo $txtUsername; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                      <label for="pwd">Password:</label>
                                      <input type="password" name="password" class="form-control" id="pwd" required maxlength="15" value="<?php echo $txtPassword; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                      <label for="Firstname">Firstname:</label>
                                      <input type="text" name="Firstname" class="form-control" id="Firstname" required maxlength="20" value="<?php echo $txtFirstname; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                      <label for="Lastname">Lastname:</label>
                                      <input type="Text" name="Lastname" class="form-control" id="Lastname" required maxlength="15" value="<?php echo $txtLastname ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                      <label for="Plate">Plate Number:</label>
                                      <input type="text" name="PlateNumber" class="form-control" id="Plate" required maxlength="10" value="<?php echo $txtPlate; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                      <label for="Plate">Type of vehicle:</label>
                                      <input type="text" name="Typeofvehicle" class="form-control" id="Typeofvehicle" required maxlength="10" value="<?php echo $xtxTypeOfVehicle ?>" disabled>
                                    </div>
                                    <br>
                                <button id="btn" type="submit" class="btn btn-default">Edit My Info</button>
							</form>
						</div><br><br>
					</div>
					
					
					<div class="col-lg-6" id="ads">
                        <center>
                            <h3 style="color: #f4bf62;">Here is your Loyalty Card</h3>
                            <h4>As of today you have <?php if($numOfStamps != null){echo $numOfStamps;} else{echo 0;} ?> stamps</h4>
                            <img class="img-responsive img-border img-left" style="border: 5px solid #f4bf62; border-radius: 10px; margin-top: 10%; "
							src="Images/LoyaltyCards/<?php if($numOfStamps != null){echo $numOfStamps;} else{echo 0;} ?>.png" alt=""><br>
                        </center>
				    </div>
                </div>
				
				
				
				</div>
			</div>
		</div>
	</div>
</body>

</html>