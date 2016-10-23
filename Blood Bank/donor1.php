<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <style>
section {
    width:200px;
	
    float:left;
    padding:10px;	 	 
}

	#footer {
    background-color:maroon;
    color:red;
    clear:both;
    text-align:center;
    padding:20px;	 	 
}
#footer {
    background-color:maroon;
    color:red;
    clear:both;
    text-align:center;
    padding:20px;	 	 
}

.modal-content{
    background-image: url('blood.png');
}
  </style>
  <link rel="shortcut icon" href="blood.png">
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

<?php 
require 'hy.php';
?>
<nav class="navbar navbar-INVERSE">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blood Bank</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost:81/blood/donor.php">Home</a></li>
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
          <form role="form" action="don.php" method='post'>
    <div class="form-group" action='don.php' method="post">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
	  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="username" required>
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
        <li><a href="http://localhost:81/blood/contact.php">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">

	<b><p>Your Donations.</p></b>
  <div class="table-responsive">          
  <table class="table table-hover" Style="float:left; width:1000px;" >
    <thead>
      <tr>
        
        <th>City</th>
        <th>Area</th>
        <th>Date</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <?php getdetails();?>
      </tr>
    </tbody>
  </table>
  </div>



  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:350px;float:right;">
    <!-- Indicators -->
	<b><p align=center>Our Earlier Campaigns</p></b>
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

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	<b><p>Our Coming up Campaigns</p></b>
  <div class="table-responsive" >          
  <table class="table table-hover" Style="float:left; width:700px;align:center;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Venue</th>
        <th>Date</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	<?php getcamps();?> 
	 <br>
      </tr>
    </tbody>
	</table>
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

</body>
</html>