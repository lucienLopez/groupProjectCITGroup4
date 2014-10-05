<?php

//checks if the user is alredy connected, we'll have to load different stuff if he is
$connected=false;
session_start();
if(isset($_SESSION['user_name'])){
	$connected = true;
	echo("connected");		//TODO : Add custom stuff for connected ones
}

if(isset($_GET["page"])&& file_exists($_GET["page"]."php")){
	$page=$_GET["page"];
}else{
	$page = "unknownPage";
}
echo("page : ".$page."</br>");

?>