<?php
require_once('classes/WeatherRequest.php');
$wr = new WeatherRequest("Toronto,Canada","5");

?>
<!doctype html>

<html>
  
  <head>
    <title>WEATHER | Five day forecast</title>
    <?php include 'includes/head-files.php';?>
    <script type="text/javascript" src="/js/five_day.js"></script>
  </head>
  
  <body>
    <div class="container">
      
      <?php include 'includes/header-navigation.php';?>
      <a href="https://www.google.ca/#q=weather">Also check weather on GOOGLE</a><br />
      <div class="row">
        <div class="col-md-10" id="current-weather">
          <?php include 'includes/current-weather.php';?>
        </div>
      </div>
      <div class="row">
        <?php 
          $weatherList=$wr->getWeatherForecastList(); 
          foreach ($weatherList as $weatherItem) {
        ?>
        <div class="col-md-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="<?php echo $weatherItem->weatherIconUrl[0]->value; ?>" width="30" height="30">
                </a>
                <div class="media-body">
                  <h4 class="media-heading" id="weatherDesc"><?php echo $weatherItem->weatherDesc[0]->value; ?></h4>
                </div>
              </div>
              <?php $d = new DateTime($weatherItem->date); ?>
              <p class="small" id="date"><?php echo $d->format('l (jS M Y)'); ?></p>
              <div>Max: <b id="tempMaxC"><?php echo $weatherItem->tempMaxC; ?>&deg;C</b>
              </div>
              <div>Min: <b id="tempMinC"><?php echo $weatherItem->tempMinC; ?>&deg;C</b>
              </div>
              <div>Precip. (MM) <b id="precipMM"><?php echo $weatherItem->precipMM; ?></b>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <?php include 'includes/footer.php';?>
    </div>
  </body>

</html>