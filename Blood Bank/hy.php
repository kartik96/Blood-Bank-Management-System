<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='test';

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){
die('could not connect');
}
function getcamps(){
$get_cats="select * from camps";
$run=mysql_query($get_cats);
while($row_cats = mysql_fetch_array($run)){

$name=$row_cats['name'];
$venue=$row_cats['venue'];
$date=$row_cats['date'];
$time=$row_cats['time'];

echo "<td>$name</td>
 <td>$venue</td>
 <td>$date</td>
 <td>$time</td>
 </tr><tr>
 ";
}
}
function getdet()
{
$get_cats="select * from donate";
$run=mysql_query($get_cats);
while($row_cats = mysql_fetch_array($run))
	{
		$name=$row_cats['email'];
		$venue=$row_cats['age'];
		$date=$row_cats['gender'];
		$time=$row_cats['weight'];
		$ld=$row_cats['lastdonated'];
		$dateofsubmission=$row_cats['dateofsubmission'];
		$user=$row_cats['username'];

		$break="<br>";

		echo "<td>$name</td>
		 <td>$user</td>
		 <td>$venue</td>
		 <td>$date</td>
		 <td>$time</td>
		 <td>$ld</td>
		 <td>$dateofsubmission</td>
		 </tr><tr>
		 ";
		 
	}
}

 function getdetails()
{
require 'hey.php';
require 'bbs.php';
$query1='select * from user where id='.$_SESSION['user_id'].''; 
$query_run1=mysql_query($query1) or die(mysql_error());
$username=mysql_fetch_row($query_run1);
$query="select * from details where name='$username[1]'";
$query_run=mysql_query($query);
while($row=mysql_fetch_array($query_run))
	{
	$dcity=$row['city'];
	$darea=$row['area'];
	$ddate=$row['date'];
	$dtime=$row['time'];
	
	echo"
	
	<td>$dcity;</td>
	<td>$darea;</td>
	<td>$ddate;</td>
	<td>$dtime;</td></tr><tr>
	";
	}
}

function get(){
$get_cats="select * from gs";
$run=mysql_query($get_cats);
while( mysql_fetch_row($run))
{
$image=$row[0];
$id=$row[1];
echo "<td>$image</td>
 <td>$id</td>
 </tr><tr>";
}
}
?>