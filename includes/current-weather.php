<?php
//$wr object must be set using a WeatherRequest Object
?>
<div class="panel panel-default">
    <div class="panel-heading">
      <h1><?php echo $wr->getCurrentCity(); ?></h1>
      <p id="currentdate"><?php echo $wr->getCurrentDate(); ?></p>
      <div class="media">
        <a class="pull-left" href="#"><img id="weatherIconUrl" class="media-object" src="<?php echo $wr->getCurrentIconURL(); ?>"></a>
        <div class="media-body">
          <h4 class="media-heading" id="temp_C"><?php echo $wr->getCurrentTempC(); ?>&deg;C</h4>
          <p id="weatherDesc"><?php echo $wr->getCurrentDescription(); ?></p>
        </div>
      </div>
    </div>
    <div class="panel-body" autocomplete="off">
      <div>Wind Speed:&nbsp;<span id="windspeedKmph"><?php echo $wr->getCurrentWindSpeedKmph(); ?> kmph</span>
      </div>
      <div>Wind direction:&nbsp;<span id="winddir16Point"><?php echo $wr->getCurrentWinddir16Point(); ?></span>
      </div>
      <div>Precip. (MM):&nbsp;<span id="PrecipMM"><?php echo $wr->getCurrentPrecipMM(); ?></span>
      </div>
    </div>
    <div class="panel-footer" autocomplete="off"></div>
</div>