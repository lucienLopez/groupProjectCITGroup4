<?php
include("init.php");
//TODO inform the user request failed

// If one of the fields is missing, no need to go further
if(!(isset($_POST["password"]) && isset($_POST["password"]) && isset($_POST["email"]))){
	header('Location: ../index.php?failedRegister=true');
	die();
}

//If the username is already used, we stop there
$checkUsernameQuery = mysql_query("SELECT * FROM USER WHERE userName='".$_POST["userName"]."' AND userPassword ='".$_POST["password"]."'");
$rows = mysql_num_rows($checkUsernameQuery);
if ($rows!=0) {
    header('Location: ../index.php?failedRegister=true');
    die();
}

// mysql request
// TODO preven SQL injections
$query='INSERT INTO user(userPassword, userName, useremail, userIsAdmin) VALUES ("'.
    $_POST["password"].'", "'.$_POST["password"].'", "'.$_POST["email"].'", 0)';
$inserts=mysql_query($query);
if(!$inserts)
{
    $message = 'Invalid query:' .mysql_error()."</br>";
    $message .= 'Whole query ' .$query;
    die($message);
    //header('Location: ../index.php?failedRegister=true');
}else{
    header('Location: ../index.php');
}
?>