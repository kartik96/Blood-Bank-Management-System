<?php 
ob_start();
	require 'hey.php';
	$name=$_POST['username'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$weight=$_POST['weight'];
	$lastdonated=$_POST['lastdonated'];
	
					$query="insert into donate values('".$email."','".$name."','".$age."','".$gender."','".$weight."','".$lastdonated."', now())";
				mysql_query($query) or die(mysql_error());
				
				header('location: donor.php');
?>