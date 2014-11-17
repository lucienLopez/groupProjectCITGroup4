<head>
	<link rel="stylesheet" type="text/css" href="css/global.css">
    <script language="javascript" type="text/javascript" src="js/global.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
	<title>Eat in Cork</title>
</head>
<body>

<?php

// handles database connection and checks if the user is connected
include("tools/init.php");
if(!$connected){
    include("registerPopup.php");
}?>
    <div id="actualPage">
    <?php
    include("header.php");

    if(isset($_GET["page"])&& file_exists($_GET["page"].".php")){
        $page=$_GET["page"];
    }else{
        $page = "unknown";
    }
    include($page.".php");

    ?>
    </div>
</body>