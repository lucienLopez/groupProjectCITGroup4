<head>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<title>Eat in Cork</title>
</head>
<body>

<?php

// handles database connection and checks if the user is connected
include("tools/init.php");
include("header.php");

if(isset($_GET["page"])&& file_exists($_GET["page"].".php")){
	$page=$_GET["page"];
}else{
	$page = "unknown";
}
include($page.".php");

?>
</body>