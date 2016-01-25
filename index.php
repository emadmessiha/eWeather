<?php
require_once('classes/WeatherRequest.php');
$wr = new WeatherRequest("Toronto,Canada","1");

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
          <h1><?php echo $wr->getCurrentCity(); ?></h1>
          <div class="media">
            <a class="pull-left" href="#">    <img id="weatherIconUrl" class="media-object" src="<?php echo $wr->getCurrentIconURL(); ?>">  </a>
            <div class="media-body">
              <h4 class="media-heading" id="temp_C"><?php $wr->getCurrentTempC(); ?>&deg;C</h4>
              <p id="weatherDesc"><?php echo $wr->getCurrentDescription(); ?></p>
            </div>
          </div>
        </div>
        <div class="panel-body" autocomplete="off">
          <div>Wind Speed:&nbsp;<span id="windspeedKmph"><?php echo $wr->getCurrentWindSpeedKmph(); ?> kmph</span>
          </div>
          <div>Wind direction:&nbsp;<span id="winddir16Point"><?php echo $wr->getCurrentWinddir16Point(); ?></span>
          </div>
        </div>
        <div class="panel-footer" autocomplete="off"></div>
      </div>
      <?php include 'includes/footer.php';?>
    </div>
  </body>

</html>