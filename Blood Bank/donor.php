<?php
mysql_connect("localhost","root","") or die ("could not connect");
mysql_select_db("test") or die ("dbase not found");
$output = '';
if(isset($_POST['search'])) {
	$searchq = $_POST['search'];
	$searchqq = $_POST['search2'];
	$query = mysql_query("SELECT * FROM user WHERE bg LIKE '%$searchq%' AND city LIKE '%$searchqq%' ") or die("<script>alert('Could Not Search')</script>");
	$count = mysql_num_rows($query);
	if(count !== 0)
		{
		while($row = mysql_fetch_array($query)){
			$bloodgroup = $row['bg'];
			$city = $row['city'];
			$id=$row['id'];
			$output .= '<div>'.$bloodgroup.' '.$city.'</div>';
		}
	}
	 else if(count ==0){
		$output = "<script>alert('Could Not Search')</script>";
	}
}
?>
<html>
<head> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Blood Bank</title>
<style>
	.btn-danger:hover{
		border-radius:3px;
		border:1px solid #ff0000;
		background-color:#ffffff;
		color:#ff0000;
		
	}
	
	#submit-btn{
		border-radius:3px;
		border:none;
		background-color:#dd0000;
		color:#ffffff;
	}
	
	#submit-btn:hover{
		border-radius:3px;
		border:1px solid #ff0000;
		background-color:#ffffff;
		color:#ff0000;
	}
	.tf{
		border-radius:3px;
		border:1px solid #808080;
	}

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  
section {
    width:1400px;
	
    float:left;
    padding:10px;	 	 
}

.flex-container {
    display: -webkit-flex;
    display: flex;
    width: 400px;
    height: 250px;
    background-color: green;
}

.flex-item {
    background-color: cornflowerblue;
    width: 100px;
    height: 100px;
    margin: 10px;
}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
  img.p
  {
  margin-top:2px;
  }
  #header {
    background-color:red;
	background-image:url(blood_t.jpg);
    color:white;
    text-align:center;
    padding:5px;
	}
	#nav 
	{
    line-height:30px;
    background-color:white;
    height:300px;
    width:400px;
    float:left;
    padding:5px;
	margin-left: 50px;
    }
	
	#footer {
    background-color:maroon;
    color:red;
    clear:both;
    text-align:center;
    padding:20px;	 	 
}
H2{
	COLOR:MAROON;
}

.modal-content{
    background-image: url('blood.png');
}
  </style>
<title>Blood Bank</title>
<link rel="shortcut icon" href="icon.png">
</head>
<body>

 <script>
/*jQuery(document).ready(function ($) {
    $("#lal").submit(function () {
        $.ajax({
            type: "POST",
            url: "don.php",
            data: $('form.contact').serialize(),
            success: function () {
   
                $("#myModal").modal('hide');
				$("#stack2").modal('show');
            },
            error: function () {
                alert("failure");
            }
        });
        return false;
    });
});*/
 </script>

<div class="clearfix" style="background-image: url(blood_t.jpg);background-size:100% 100%;background-repeat:no-repeat;height:150px;" id='header'>
<a href="bbm.php"<button type="button" class="btn btn-danger" align="right" style="float:right">Log out</button></a>  
</div>
<marquee scrollamount=10 onmouseover="this.stop()"; onmouseout= "this.start()" >
<b><i>Urgently Need O+ Blood.Any One Interested Contact +91 8591428292.</b></i>
</marquee>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a data-toggle="modal" href="#myModal">Donate Now</a></li>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Donate Blood</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="don.php" method='post' id="lal">
		   <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="username" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email" required>
    </div>
	<div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control"  placeholder="Enter age" name="age" required>
    </div>
	<div class="form-group">
      <label for="gender">Gender:</label>
      <input type="text" class="form-control" placeholder="Enter Gender" name="gender" required>
    </div>
	<div class="form-group">
      <label for="weight">Weight:</label>
      <input type="text" class="form-control" placeholder="Enter weight in Kgs" name="weight" required>
    </div>
	<div class="form-group">
      <label for="weight">Last Donated:</label>
      <input type="text" class="form-control" placeholder="YYYY/MM/DD.If First Time,Then Enter Today's Date" name="lastdonated" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
	<button type="reset" class="btn btn-default">Reset</button>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="stack2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>Thank you for your kindness.Further information will be sent via Email</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
        <li><a href="http://localhost:81/blood/donor1.php">My Details</a></li>
        <li><a href="http://localhost:81/blood/contact.php">About us</a></li>
      </ul>
    </div>
 
</nav>
<div align=right><b>
<?php
require_once 'bbs.php';
require 'hey.php';
if(loggedin())
{
echo 'Welcome  '.getfield('username');
}
else
{
include 'logins.php';	
}
?>
</b>
</div>
<section style="float:left; ">
<div style="float:left;margin-left:50px;"><br>
<b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIND A DONOR</i></b>
<br><br><br><br>
<form action="bbms.php" method="post" style>
<label>Blood Group:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name="search" class="tf" placeholder='Enter Blood Group' style="width:200px;height:30px;" required><br><br><br>
<label>&nbsp;&nbsp;&nbsp;City:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name="search2" class="tf" placeholder='Enter City' style="width:200px;height:30px;" required><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="submit-btn" class="btn btn-info" type='submit' align='right' value='Submit'><br>
<?php print("$output");?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
</form></div>
<p align='center'><b>FEATURES</b></p>
<div style="float:right;padding:5px;margin-right:100px;">
<p>- Blood Donation Camp & Camp Organiser Management.</P>
<P>- Donor Management - Donor Registration, Managing donor database, recording their physical and medical statistics.</P>
<P>- Inventory management in blood bank for storage and issuance of blood.</P>
<P>- Blood requisition and issuance of blood.</P>
<P>- Online transfer of blood from one blood bank to another.</P>
<P>- Discarding of expired and unsuitable blood (Less Qty., Reactive, Clotting, Hemolysis).</P>
<P>- Being a web based system, can be implemented throughout the state. 
<p>- Separate user accounts can be created for each blood bank.</P>
<P>- Patient Register/Blood Sample Receiving Register, Donor Register, Blood Issue Register and Discarded Blood report. </P>
<P>- Fridge Wise Stock Position and Printing of Fridge Stickers.</p>
<P>- List of Donors who are eligible for donation on a particular date with contact Number.</P>
</section>
</div>
 <section>
 <b><p align="center">OUR EARLIER CAMPAIGNS</P></b>
 <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="poonam-pandey-spotted-at-a-blood-donation-camp-9705aca5.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="exchangeprogram_clip_image002.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="24April-blood-donation-camp.jpg" alt="Flower" width="460" height="345">
      </div>
      <div class="item">
        <img src="blood-donation-camp-in-dubai_134476636010.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span +class="sr-only">Next</span>
    </a>
  </div>
  
<div id="footer" >
<div style="float:left" STYLE="MARGIN-BOTTOM:20PX">
<p align='left' style="font-family='comic sans ms';color:#eeeeee;">
THAPAR UNIVERSITY,PATIALA<BR>
ONLINE BLOOD BANK MANAGEMENT SYSTEM
</p>
</div>
<p align='right' style="font-family='comic sans ms';color:#eeeeee;">
FOR FURTHER DETAILS<BR>
CONTACT: KARTIK GOGIA<br>
Email: kartikgogia42@gmail.com<br>
Phone Number:8591428292
<p>
</div>
</div>
</body>
</html>