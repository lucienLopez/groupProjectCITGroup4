<?php
//Tool that handles database connection, and that checks if the user is already connected


//checks if the user is alredy connected, we'll have to load different stuff if he is
$connected=false;
session_start();
if(isset($_SESSION['id_user'])){
	$connected = true;
	echo("connected");		//TODO : Add custom stuff for connected ones
}else{
	include("notConnectedHeader.php");
}

//handles database connection
//TODO : better exceptions
$dbhandle = mysql_connect("127.0.0.1", "root", "root")
  or die("Unable to connect to MySQL");
$groupProjectDB = mysql_select_db("groupproject",$dbhandle)
  or die("Could not select db");
  ?>