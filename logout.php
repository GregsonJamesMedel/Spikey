<?php
	session_start();
	
	$_SESSION["sawUsername"] = null;
	
	echo "<script>window.open('index.php','_self',null,true)</script>";
	
?>