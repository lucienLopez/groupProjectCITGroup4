<?php
include("init.php");

// If one of the fields is missing, no need to go further
if(!(isset($_POST["userName"]) && isset($_POST["password"]))){
	header('Location: ../index.php?page=login&failedlogin=true');
	die();
}

// mysql request
// TODO preven SQL injections
$query = mysql_query("SELECT * FROM USER WHERE userName='".$_POST["userName"]."' AND userPassword ='".$_POST["password"]."'");
$rows = mysql_num_rows($query);
if ($rows!=0)
{
  while ($row = mysql_fetch_assoc($query))
  {
    $_SESSION['id_user'] = $row['iduser'];
    $_SESSION['userName'] = $row['userName'];
    $_SESSION['userIsAdmin'] = $row['userIsAdmin'];

    header('Location: ../index.php?');
    
    exit();
  }
}else{
	header('Location: ../index.php?failedlogin=true');
	die();
}
?>