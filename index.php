<?php
require_once('classes/WeatherRequest.php');
require_once('classes/ClientLocation.php');
$cl = new ClientLocation();
$wr = new WeatherRequest($cl->getCurrentCityExact(),"1");

?>
<!doctype html>
<html>
  
  <head>
    <title>WEATHER | Current Weather forecast</title>
    <?php include 'includes/head-files.php';?>
  </head>
  
  <body>
    <div class="container">
      
      <?php include 'includes/header-navigation.php';?>
      <a target="_blank" href="https://www.google.ca/#q=weather">Also check weather on GOOGLE</a><br />
      <?php include 'includes/current-weather.php';?>
      <?php include 'includes/footer.php';?>
    </div>
  </body>

</html>