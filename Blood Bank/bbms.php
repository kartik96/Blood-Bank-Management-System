<?php
mysql_connect("localhost","root","") or die ("could not connect");
mysql_select_db("test") or die ("dbase not found");
$output = '';
if(isset($_POST['search']))
{
	$searchq = $_POST['search'];
	$searchqq = $_POST['search2'];
	
	$query = mysql_query("SELECT * FROM user WHERE bg LIKE '%$searchq%' AND city LIKE '%$searchqq%' ") or die("could not search!");
	$count = mysql_num_rows($query);
	if(count !== 0)
		{
		while($row = mysql_fetch_array($query)){
			$bloodgroup = $row['bg'];
			$city = $row['city'];
			$id=$row['id'];
			$name=$row['username'];
			$pn=$row['pn'];
			$bg=$row['bg'];
			
			$output .= '<div ><table border="3"  class="table" style="width:5px;"" ><tr><td>'.$name.'</td> <td>'.$pn.' </td><td>'.$bg.'</td></tr></table></div>';
		}
	}
	 else if(count ==0){
		$output = 'There was no search result!';
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
.modal-content{
    background-image: url('blood.png');
}
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
  </style>
<title> Thapar Blood Bank</title>
<link rel="shortcut icon" href="logo.png">
</head>
<body>
  
<div class="clearfix" style="background-image: url(blood_t.jpg);background-size:100% 100%;background-repeat:no-repeat;height:150px;" id='header'>
&nbsp;&nbsp;&nbsp;<a href='http://localhost:81/blood/signup.php'><button type="button" class="btn btn-danger" align="right" style="float:right">Sign Up</button></a> 
<a href='http://localhost:81/blood/logins.php'><button type="button" class="btn btn-danger" align="right" style="float:right">To Donate Login</button></a> 
<a href='http://localhost:81/blood/admin1.php'><button type="button" class="btn btn-danger" align="right" style="float:right">Admin Login</button></a> 

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
       <li class="active"><a href="bbms.php">Home</a></li>
       <li><a href="http://localhost:81/blood/fact.php">Why You Should Donate</a></li>
       <li><a href="http://localhost:81/blood/contact.php">About us</a></li>
      </ul>
    </div>
 
</nav>
<section style="float:left; ">
<div style="float:left;margin-left:50px;"><br>
<b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIND A DONOR</i></b>
<br><br><br><br>
<form action="bbms.php" method="post" style>
<label>Blood Group:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name="search" class="tf" placeholder='Enter Blood Group' style="width:200px;height:30px;" required><br><br><br>
<label>&nbsp;&nbsp;&nbsp;City:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name="search2" class="tf" placeholder='Enter City' style="width:200px;height:30px;" required><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="submit-btn" type='submit' class="btn btn-info" align='right' value='Submit'><br>
<?php echo $output;;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
</form></div>
<p align='center'><b>FEATURES</b></p>
<div style="float:right;padding:5px;margin-right:50px;">
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
    <a 
	class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span +class="sr-only">Next</span>
    </a>
  </div>
  </section>
<div id="footer" >
<div style="float:left" STYLE="MARGIN-BOTTOM:20PX">
<p align='left' style="font-family='comic sans ms';color:#eeeeee;">
THAPAR UNIVERSITY,PATIALA<BR>
ONLINE BLOOD BANK MANAGEMENT SYSTEM
</p>
</div>
<p align='right'style="font-family='comic sans ms';color:#eeeeee;" >
FOR FURTHER DETAILS<BR>
CONTACT KARTIK GOGIA<br>
Email:kartikgogia42@gmail.com<br>
Phone Number:8591428292
<p>
</div>
</div>
</body>
</html>