<?php 
session_start();
?>
<!DOCTYPE html>

<html>

<head>
	<title>Management</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style>
		#main{
			background-color: black;
			width: 100%;
			height: 100%; 
			padding: 10px; 
			border-radius: 10px; 
			border: 5px solid #f4bf62;
			border-top: 0;
			margin-bottom: 20px;
		}
		
		#main a{
			color: #f4bf62;
			text-align: center;
			text-decoration: none;
		}
		
		body{
			background-image: url('Images/bg1.png'); 
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body>

	<?php
		
		require 'Connection.php';
		$sql = "SELECT * FROM `customers` where Role='User'";
		$Resulta = mysqli_query($Conn,$sql);
	?>
	
	<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
		  <div class="container-fluid">
			<div class="navbar-header">
				<a style="color: #f4bf62" class="navbar-brand" href="index.php">Spikey's Auto Wash</a>
			</div>
		  </div>
	</nav>
	
	<div class="container-fluid"  style="background-image: url('/Images/bg1.png');">
		<div class="container-fluid" style="height: 100%;">
			<div id="main">
				<center>
					<h3 style="margin-top: 0; color: #f4bf62;">Administrator's Panel</h3><br>
					<div class="table-responsive">
						<table border="5px" class="table">
							<caption style="font-weight: bold; font-size: 15px; text-align: center; color:#f4bf62; border: 1px solid;">Customer List</caption>
							<tr style="text-align: center; color: #f4bf62; font-weight: bold;">
								<td>Control Number</td>
								<td>Firstname</td>
								<td>Lastname</td>
								<td>Plate Number</td>
								<td>Type of Vehicle</td>
								<td>Number of Stamps</td>
								<td>Action</td>
							</tr>
							
							<?php while($Rows = mysqli_fetch_array($Resulta)):; ?>
							<tr style="color: white">
							<td><?php $cid = $Rows[0]; echo $cid; ?></td>
							<td><?php echo $Rows[3]; ?></td>
							<td><?php echo $Rows[4]; ?></td>
							<td><?php echo $Rows[5]; ?></td>
							<td><?php echo $Rows[6]; ?></td>
							<td><?php $stmp = $Rows[7]; echo $stmp; ?></td>
							<td>
							<a href="#" onclick="Action('Add',<?php echo $Rows[0]; ?>,<?php if($stmp == null){echo 0;}else{echo $stmp;} ?>)"><strong>+</strong> Stamp</a> | 
							<a href="#" onclick="Action('Minus',<?php echo $Rows[0]; ?>,<?php if($stmp == null){echo 0;}else{echo $stmp;} ?>)"><strong>-</strong> Stamp</a> |
							<a href="#" onclick="Action('Delete',<?php echo $Rows[0]; ?>,<?php if($stmp == null){echo 0;}else{echo $stmp;} ?>)">X Delete</a>
							</td>
							<?php endwhile; ?>
							</tr>
						</table>
					</div>
				</center>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

<script>
	function Action(cmd,ID,stamps)
	{
		switch(cmd)
		{
			case "Add":
				if(confirm("Are you sure you want to add a new stamp for this user?") == true){
				window.open('adminAction.php?id=' + ID + '&action=Add&stamp=' + stamps,'_self',null,true);}
				break;
			case "Minus":
				if(confirm("Are you sure you want to Remove a stamp for this user?") == true){
				window.open('adminAction.php?id=' + ID + '&action=Minus&stamp=' + stamps,'_self',null,true);}
				break;
			case "Delete":
				if(confirm("Are you sure you want to Delete this user?") == true){
				window.open('adminAction.php?id=' + ID + '&action=Delete&stamp=' + stamps,'_self',null,true);}
				break; 
		}
		
	}
</script>

</html>
























