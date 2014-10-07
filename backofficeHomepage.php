<?php
if(!($connected && $isAdmin)){
	header('Location: ../index.php?');
}
?>
<a href="index.php?page=backofficeAddRestaurant"><button>Add restaurant</button></a>
