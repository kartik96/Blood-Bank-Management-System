<?php
require 'hey.php';
if(isset($_POST['city'])&&
isset($_POST['venue'])&&
isset($_POST['date']) && isset($_POST['time']))
{
	$name=$_POST['city'];
	$venue=$_POST['venue'];
	$date=$_POST['date'];
	$time=$_POST['time'];
if(!empty($name) && !empty($venue) && !empty($date) && !empty($time)){
	$query="insert into camps values('".$name."','".$venue."','".$date."','".$time."')";
	mysql_query($query) or die(mysql_error());
}}
?>
	<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>Update Camps</title>
 </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome Admin</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost:81/blood/admin.php">Home</a></li>
        <li><a href="http://localhost:81/blood/update.php?">Update Camps</a></li>
        <li><a href="details.php">Donation Request</a></li>
		<li><a href="udetails.php">Update Details</a></li>
		<li><a href="cblood.php">Blood Count</a></li>
      </ul>
    </div>
 
</nav>

<div class="container">
  <form role="form" action="update.php" method="post">
   <div class="form-group">
      <label>City:</label>
      <input type="text" class="form-control" placeholder="Enter City" name="city" required>
    </div>
    <div class="form-group">
      <label>Area:</label>
      <input type="text" class="form-control" name="venue" placeholder="Enter Area" required>
    </div><div class="form-group">
      <label>Date:</label>
      <input type="date" class="form-control" name="date" placeholder="Enter Date" required>
    </div>
	<div class="form-group">
      <label>Time</label>
      <input type="time" class="form-control" placeholder="Enter Time" name="time" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>