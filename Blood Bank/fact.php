<?php
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
.video
{
margin-left:250px;

}
  </style>
<title> Thapar Blood Bank</title>
<link rel="shortcut icon" href="icon.png">
</head>
<body>
 <div class="body"></div> 
<div class="clearfix" style="background-image: url(blood_t.jpg);background-size:100% 100%;background-repeat:no-repeat;height:150px;" id='header'>


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
        <li class=""><a href="fact.php">Why You Should Donate</a></li>
        <li><a href="contact.php">About us</a></li>
      </ul>
    </div>
 
</nav>
<p align='center'><b>India facing a blood shortage of 3 million units</b></p>
<div width:50px; height:300px;
    width:500px;
    float:right;
    padding:5px;>

<p id=nav>
	<img src="BloodDonation1.jpg" width="360px" height="290px">
	</p>

<p>Despite being a country with a population of 1.2 billion, India faces a blood shortage of 3 million units. The problem can be addressed if an additional two percent of Indians donated blood, health experts say.

According to a 2012 World Health Organisation (WHO) report, only nine million units are collected annually, while the need is for 12 million units.

Delhi NCR alone faces a shortage of 100,000 units per year.

"The shelf-life of donated blood is 35 to 42 days. There is a constant need to replenish stocks in our blood banks. The problem could be addressed if only two percent more Indians donated blood," Anju Verma, chief medical officer, Rotary Blood Bank, told us.
<h4> Source: TImes of India</h4>

</p>


 <section>
 
<b><p align="center">Donate Blood Save Lives</P></b>
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
        <img src="donate-how_much_blood.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="bloodbank.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="blood_donate.jpg" alt="Flower" width="460" height="345">
      </div>
      <div class="item">
        <img src="blood-division.png" alt="Flower" width="460" height="345">
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
  </section>
  <div class ="video">
  <iframe width="854" height="455" src="https://www.youtube.com/embed/wR-uwKc3di0" frameborder="0" allowfullscreen></iframe>
  </div>
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