<?php
require 'bbs.php';
require 'hey.php';
if(loggedin())
{
	echo 'you are successfully logged in '.getfield('username').'<br><a href="bbm.php">log out</a>';
}
else
{
include 'logins.php';	
}
?>