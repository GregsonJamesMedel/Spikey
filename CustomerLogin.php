<?php 
session_start(); 
//if($_SESSION["Username"] != null){echo "<script>window.open('index.php','_self',null,true)</script>";}
$Role = $_GET['Role'];
?>

<!DOCTYPE html>

<html>

<head>
	<title>Customer Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">	
</head>

<body style="background-image: url('Images/bg1.png'); background-attachment: fixed;
			 background-position: center;
			 background-repeat: no-repeat;
			 background-size: cover;">

	<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
		  <div class="container-fluid">
				<div class="navbar-header">
				  <a style="color: #f4bf62" class="navbar-brand" href="index.php">Spikey's Auto Wash</a>
				</div>
		  </div>
    </nav>
	<div class="container-fluid"  style="background-image: url('/Images/bg1.png');">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="row">
                        <div class="box">
                            <div class="col-md-12" style="background-color: black; border: 5px solid #f4bf62;
                                 border-radius: 10px; padding: 10px; margin-top: 30%; margin-bottom: 30%;">
                                 <form role="form" style="color: white;" action="CustomerLoginDestination.php?Role=<?php echo $Role; ?>" method="POST">

                                    <center>
                                    <h3>Please Login</h3><br>
                                    </center>

                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required maxlength="15">
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required maxlength="15">
                                    </div>

                                    <button type="submit" class="btn btn-default">Login</button>
                                    <button type="button" onclick="RegisterClick()" class="btn btn-default">Register</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
<script>
	function RegisterClick()
	{
		window.open('Register.php?typeOfAction=Register','_self',null,true);
	}
</script>
</html>


