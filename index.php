<?php

?>
<!doctype html>

<html>
  
  <head>
    <title>WEATHER | Current Weather forecast</title>
    <?php include 'includes/head-files.php';?>
    <script type="text/javascript" src="js/index.js"></script>
  </head>
  
  <body>
    <div class="container">
      
      <?php include 'includes/header-navigation.php';?>
      <a target="_blank" href="https://www.google.ca/#q=weather">Also check weather on GOOGLE</a><br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1>Ottawa, ON Canada</h1>
          <div class="media">
            <a class="pull-left" href="#">    <img id="weatherIconUrl" class="media-object" src="http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0004_black_low_cloud.png">  </a>
            <div class="media-body">
              <h4 class="media-heading" id="temp_C">-12&deg;C</h4>
              <p id="weatherDesc">Partly Cloudy</p>
            </div>
          </div>
        </div>
        <div class="panel-body" autocomplete="off">
          <div>Wind Speed:&nbsp;<span id="windspeedKmph">17 kmph</span>
          </div>
          <div>Wind direction:&nbsp;<span id="winddir16Point">SEE</span>
          </div>
        </div>
        <div class="panel-footer" autocomplete="off"></div>
      </div>
      <hr>
      <footer>WEATHER | a development website to demonstrate responsive design concepts.</footer>
    </div>
  </body>

</html>