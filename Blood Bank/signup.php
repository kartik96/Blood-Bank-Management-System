<?php
require 'hey.php';
require 'bbs.php';
if(!loggedin()){

if(isset($_POST['username'])&&
isset($_POST['password'])&&
isset($_POST['password_again']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_again=$_POST['password_again'];
	$bloodgroup=$_POST['bg'];
	$city=$_POST['city'];
	$pn=$_POST['pn'];
	if(!empty($username) && !empty($password) && !empty($password_again)&& !empty($bloodgroup)&& !empty($city)&& !empty($pn)){
		if($password!=$password_again){
			echo'passwords do not match';
		}else{
			$query="select username from user where username='$username'";
			$query_run=mysql_query($query);
			if(mysql_num_rows($query_run) == 1) {
				echo 'The username already exsist';
			}else{
				$query="insert into user values('','".$username."','".$password."','".$bloodgroup."','".$city."','".$pn."')";
				if($query_run=mysql_query($query)){
					header('location: donor.php');
				}else
				{
					echo 'sorry';
				}
			}
			
		}
	}else {
		echo 'all fields are required';
	}
	


}
?>

<!DOCTYPE html>
<html >
  <head>
  <link rel="shortcut icon" href="icon.png">
    <meta charset="UTF-8">
    <title>Blood Bank Login</title>
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
        <style>
      

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image:url(blood_t.jpg);
	background-size: auto;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Mozilla,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #F00 !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.7;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>
  </head>

  <body>
<div class='container'>
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Blood <span>Bank</span></div>
		</div>
		<br>
		<div class="login">
		<form method='post' action='signup.php'>
				<input type="text" placeholder="username" name="username" required><br>
				<input type="password" placeholder="password" name="password" required><br>
				<input type="password" placeholder="re-enter password" name="password_again" required><br><br>
				<input type="text" placeholder="Blood Group" name="bg" required><br><br>
				<input type="text" placeholder="Enter City" name="city" required><br><br>
				<input type="text" placeholder="Enter Mobile Number" maxlength="10" name="pn" required><br><br>
				<input type="submit" value="Sign-up">
		</form>
		</div>
    </div>
  </body>
</html>


<?php
}else if(loggedin())
{
	echo 'you are already logged in';
}
?>