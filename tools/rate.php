<?php
include("init.php");
//TODO inform the user request failed

// If one of the fields is missing, no need to go further
if(!(isset($_POST["idUser"]) && isset($_POST["idRestaurant"]) && isset($_POST["rate"]))){
	header('Location: ../index.php?failedRating=true');
	die();
}

// mysql request
// TODO preven SQL injections
$query='INSERT INTO individualratings(ratingIdUser, ratingIdRestaurant, rating) VALUES ("'.
    $_POST["idUser"].'", "'.$_POST["idRestaurant"].'", "'.$_POST["rate"].'")';
$inserts=mysql_query($query);
if(!$inserts)
{
    $message = 'Invalid query:' .mysql_error()."</br>";
    $message .= 'Whole query ' .$query;
    die($message);
    //header('Location: ../index.php?failedRegister=true');
}else{
}

$query2='UPDATE restaurants SET restaurantTotalRating = restaurantTotalRating + '.$_POST["rate"].
    ', RestaurantNumberRatings = RestaurantNumberRatings +1, restaurantRating= ((restaurantTotalRating + '.$_POST["rate"].
    ')/(RestaurantNumberRatings +1)) WHERE idrestaurants = \''.$_POST["idRestaurant"].'\'';
$inserts2=mysql_query($query2);
if(!$inserts2)
{
    $message = 'Invalid query:' .mysql_error()."</br>";
    $message .= 'Whole query ' .$query2;
    die($message);
    //header('Location: ../index.php?failedRegister=true');
}else{
    header('Location: ../index.php');
}
?>