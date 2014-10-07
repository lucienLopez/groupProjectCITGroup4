<?php
// Should probably be renamed "home.php"

// Retrieve all restaurants in the database
$query = mysql_query("SELECT * FROM RESTAURANTS ");
$rows = mysql_num_rows($query);
if ($rows!=0)
{
  while ($row = mysql_fetch_assoc($query))
  {
    echo("ID : ".$row['idrestaurants']."</br>");
    echo("Name : ".$row['restaurantName']."</br>");
    echo("GPSX : ".$row['restaurantGPSX']."</br>");
    echo("GPSY : ".$row['restaurantGPSY']."</br></br>");
  }
}
?>