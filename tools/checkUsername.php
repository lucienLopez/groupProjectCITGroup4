<?php
include("init.php");

// If one of the fields is missing, no need to go further
if(!(isset($_GET["username"]))){
	echo("0");
	die();
}

// mysql request
// TODO preven SQL injections
$query = mysql_query("SELECT * FROM USER WHERE userName='".$_GET["username"]."'");
$rows = mysql_num_rows($query);
if ($rows!=0)
{
  echo("0");
    die();
}else{
	echo("1");
	die();
}
?>