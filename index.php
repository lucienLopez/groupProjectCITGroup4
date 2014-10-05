<?php

// handles database connection and checks if the user is connected
include("tools/init.php");

if(isset($_GET["page"])&& file_exists($_GET["page"].".php")){
	$page=$_GET["page"];
}else{
	$page = "unknown";
}
include($page.".php");

?>