<?php	
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=$_SERVER['HTTP_REFERER'];

function cblood()
{
		$query="select * from user where bg = 'o+' ";
		$run=mysql_query($query) or die(mysql_error());
		$num= mysql_num_rows($run);
		echo $num;
}

function bblood()
{
		$query="select * from user where bg = 'b+' ";
		$run=mysql_query($query) or die(mysql_error());
		$num= mysql_num_rows($run);
		echo $num;
}
function oblood()
{
		$query="select * from user where bg = 'ab+' ";
		$run=mysql_query($query) or die(mysql_error());
		$num= mysql_num_rows($run);
		echo $num;
}

function c_blood()
{
		$query="select * from user where bg = 'c-' ";
		$run=mysql_query($query) or die(mysql_error());
		$num= mysql_num_rows($run);
		echo $num;
}

function abblood()
{
		$query="select * from user where bg = 'ab-' ";
		$run=mysql_query($query) or die(mysql_error());
		$num= mysql_num_rows($run);
		echo $num;
}

function getfield($field){
		$query="select $field from user where id='".$_SESSION['user_id']."'";
		if($query_run=@mysql_query($query))
		{
		 if($query_result=@mysql_result($query_run,0,$field)){
			return $query_result;
		}
		}
	}
	function loggedin(){
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;}
			else{
				return false;
			}
		}
function donate() {
	require 'hey.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$weight=$_POST['weight'];
	$lastdonated=$_POST['lastdonated'];
	
	//if(!empty($email) && !empty($password) && !empty($age) && !empty($gender) && !empty($weight) && !empty($lastdonated)){
				$query="insert into donate values('".$email."','".$password."','".$age."','".$gender."','".$weight."','".$lastdonated."')";
				mysql_query($query) or die(mysql_error());
					
				
			
	header('location:donor.php');
	}
	function getfield1($field){
		$query="select $field from admin where id='".$_SESSION['user_id']."'";
		if($query_run=@mysql_query($query))
		{
		if($query_result=@mysql_result($query_run,0,$field)){
			return $query_result;
		}
		}
	}
	function loggedin1(){
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;}
			else{
				return false;
			}
		}
		

?>