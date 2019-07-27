<?php
	session_start();
	require 'Connection.php';
	$_un = $_POST['username'];
	$_pass = $_POST['password'];
	$_Role = $_GET['Role'];
	
		$query = "SELECT * FROM `customers` WHERE `Username` = '".$_un."' and `Password` = '".$_pass."' and `Role` = '".$_Role."'";
		$res = mysqli_query($Conn,$query);
			if($res===false)
				{
					die("Error" . mysqli_error($conn));
				}
		$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
			if($row)
				{
					if($_Role == "User"){
					$_SESSION["sawUsername"] = $_un;
					echo "<script>window.open('index.php','_self',null,true)</script>";
					die("Logged in");}
					else if($_Role == "Admin"){
						echo "<script>window.open('Management.php','_self',null,true)</script>";
					}
				}
			else
				{
					die("Wrong username or password");
				}
?>
















