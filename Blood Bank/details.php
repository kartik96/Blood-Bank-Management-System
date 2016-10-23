<?php
require 'hy.php';
?>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Donation Requests</title>
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
        <li><a href="http://localhost:81/blood/details.php">Donation Request</a></li>
		<li><a href="udetails.php">Update Details</a></li>
		<li><a href="cblood.php">Blood Count</a></li>
      </ul>
    </div>
 
</nav>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Weight</th>
        <th>Last Donated</th>
        <th>Date Of Submission</th>
      </tr>
    </thead>
    <tbody>
      <tr>
<?php getdet();?>
   
   </tr>
    </tbody>
  </table>
</div>

</body>
</html>