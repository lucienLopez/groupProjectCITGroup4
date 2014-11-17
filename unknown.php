<?php
// Should probably be renamed "home.php"

function yourRating($idRestaurant){
    global $connected;
    if(!$connected){
        showRating($idRestaurant);
        return;
    }
    showRating($idRestaurant);
    $queryRating = mysql_query("SELECT * FROM individualratings WHERE ratingIdUser='".$_SESSION['id_user']."' AND ratingIdUser='".$idRestaurant."'");
    $rowsRating = mysql_num_rows($queryRating);
    if ($rowsRating!=0) {
        $rowsRating = mysql_fetch_assoc($queryRating);
        echo("Your rating : " . $rowsRating['rating']);
        echo("</br>");
    }?>
    <form action="tools/rate.php" method="post">
        <select name="rate">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="Rate this restaurant">
        <input type="hidden" name="idUser" value="<?php echo($_SESSION['id_user']); ?>"></br>
        <input type="hidden" name="idRestaurant" value="<?php echo($idRestaurant); ?>"></br>
    </form>
<?php
}

function showRating($idRestaurant){
    $query2 = mysql_query("SELECT restaurantRating FROM restaurants WHERE idrestaurants='".$idRestaurant."'");
    $rows2 = mysql_num_rows($query2);
    if ($rows2!=0) {
        $rows2 = mysql_fetch_assoc($query2);
        echo("Rating : ".$rows2['restaurantRating']."</br></br>");
    }
}

// Retrieve all restaurants in the database
$i=-1;
$query = mysql_query("SELECT * FROM RESTAURANTS ");
$rows = mysql_num_rows($query);
if ($rows!=0)
{
  while ($row = mysql_fetch_assoc($query))
  {
    $i++;
    echo("ID : ".$row['idrestaurants']."</br>");
    echo("Name : ".$row['restaurantName']."</br>");
    echo("GPSX : ".$row['restaurantGPSX']."</br>");
    echo("GPSY : ".$row['restaurantGPSY']."</br>");
    yourRating($row['idrestaurants']);?>
      <script>
      function initialize<?php echo($i); ?>() {
          var myLatlng = new google.maps.LatLng(<?php echo($row['restaurantGPSX']);?>, <?php echo($row['restaurantGPSY']);?>);
          var mapCanvas = document.getElementById('map_canvas<?php echo($i); ?>');
          var mapOptions = {
              center: myLatlng,
              zoom: 15,
              mapTypeId: google.maps.MapTypeId.ROADMAP
        }
          var map = new google.maps.Map(mapCanvas, mapOptions)
          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: "<?php echo($row['restaurantName']); ?>"
          });
      }
      google.maps.event.addDomListener(window, 'load', initialize<?php echo($i); ?>);
    </script>
    <div id="map_canvas<?php echo($i); ?>" class="map_canvas"></div>
  <?php }
}
?>