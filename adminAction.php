<?php
	
	require 'Connection.php';
	$Action = $_GET["action"];
	$ControlID = $_GET["id"];
	$Stamps = $_GET["stamp"];
	
	switch($Action)
	{
		case "Add":
			++$Stamps;
			$sqlA = "UPDATE `customers` SET `NumberofStamps`='" . $Stamps . "' WHERE `ControlNumber` = '" . $ControlID . "'";
			$resA = mysqli_query($Conn,$sqlA);
			if($resA){
				echo "<script>window.open('Management.php','_self',null,true)</script>";
			}
			break;
		case "Minus":
			--$Stamps;
			$sqlB = "UPDATE `customers` SET `NumberofStamps`='" . $Stamps . "' WHERE `ControlNumber` = '" . $ControlID . "'";
			$resB = mysqli_query($Conn,$sqlB);
			if($resB){
				echo "<script>window.open('Management.php','_self',null,true)</script>";
			}
			break;
		case "Delete":
			$sqlC = "DELETE FROM `customers` WHERE `ControlNumber`= '" . $ControlID . "'";
			$resC = mysqli_query($Conn,$sqlC);
			if($resC){
				echo "<script>window.open('Management.php','_self',null,true)</script>";
			}
			break;
	}
?>