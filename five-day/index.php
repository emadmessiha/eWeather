<?php

?>
<!doctype html>

<html>
  
  <head>
    <title>WEATHER | Five day forecast</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="icon" 
      type="image/png" 
      href="images/eweather-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/five_day.js"></script>
  </head>
  
  <body>
    <div class="container">
      <div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img height="25px" src="images/eweather.png">Emad WEATHER</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li>
                <a href="/">Current</a>
              </li>
              <li class="active">
                <a href="five-day">5-Day forecast</a>
              </li>
              <li>
                <a href="help">Help</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <a href="https://www.google.ca/#q=weather">Also check weather on GOOGLE</a><br />
	  <p>We are committed to getting the latest weather forecast for you!</p>
      <div class="row">
        <div class="col-md-10" id="current-weather">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1>Ottawa, ON Canada</h1>
              <div class="media">
                <a class="pull-left" href="#">    <img id="weatherIconUrl" class="media-object" src="http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0004_black_low_cloud.png">  </a>
                <div class="media-body">
                  <h4 class="media-heading" id="temp_C">12&deg;C</h4>
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
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="media">
                <a class="pull-left" href="#">                  <img class="media-object" src="http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0002_sunny_intervals.png" width="30" height="30">                </a>
                <div class="media-body">
                  <h4 class="media-heading" id="weatherDesc">Partly cloudy</h4>
                </div>
              </div>
              <p class="small" id="date">2014-02-24</p>
              <div>Max: <b id="tempMaxC">12&deg;C</b>
              </div>
              <div>Min: <b id="tempMinC">8&deg;C</b>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="media">
                <a class="pull-left" href="#">                  <img class="media-object" src="http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0002_sunny_intervals.png" width="30" height="30">                </a>
                <div class="media-body">
                  <h4 class="media-heading" id="weatherDesc">Partly cloudy</h4>
                </div>
              </div>
              <p class="small" id="date">2014-02-24</p>
              <div>Max: <b id="tempMaxC">12&deg;C</b>
              </div>
              <div>Min: <b id="tempMinC">8&deg;C</b>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="media">
                <a class="pull-left" href="#">                  <img class="media-object" src="http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0002_sunny_intervals.png" width="30" height="30">                </a>
                <div class="media-body">
                  <h4 class="media-heading" id="weatherDesc">Partly cloudy</h4>
                </div>
              </div>
              <p class="small" id="date">2014-02-24</p>
              <div>Max: <b id="tempMaxC">12&deg;C</b>
              </div>
              <div>Min: <b id="tempMinC">8&deg;C</b>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="media">
                <a class="pull-left" href="#">                  <img class="media-object" src="http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0002_sunny_intervals.png" width="30" height="30">                </a>
                <div class="media-body">
                  <h4 class="media-heading" id="weatherDesc">Partly cloudy</h4>
                </div>
              </div>
              <p class="small" id="date">2014-02-24</p>
              <div>Max: <b id="tempMaxC">12&deg;C</b>
              </div>
              <div>Min: <b id="tempMinC">8&deg;C</b>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="media">
                <a class="pull-left" href="#">                  <img class="media-object" src="http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0002_sunny_intervals.png" width="30" height="30">                </a>
                <div class="media-body">
                  <h4 class="media-heading" id="weatherDesc">Partly cloudy</h4>
                </div>
              </div>
              <p class="small" id="date">2014-02-24</p>
              <div>Max: <b id="tempMaxC">12&deg;C</b>
              </div>
              <div>Min: <b id="tempMinC">8&deg;C</b>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <footer>WEATHER | a development website to demonstrate responsive design concepts.</footer>
    </div>
  </body>

</html>