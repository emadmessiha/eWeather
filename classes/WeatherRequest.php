<?php
class WeatherRequest {
  /* Constants */
  var $base_url="http://api.worldweatheronline.com/free/v1/weather.ashx?format=json&key=jk2trybcc2hvpvx57sqzgtqk";
  var $query_parameter="q";
  var $days_parameter="num_of_days";
  var $parameter_join="&";
  var $parameter_assign="=";

  /* Variables */
  var $weather_object;
  var $current_date;

  /* Constructr */
  function __construct($region,$num_days) {
    $json_response = file_get_contents($this->buildUrl($region,$num_days));
    $this->weather_object = json_decode($json_response)->data;
    $this->current_date= date('l jS \of F Y h:i:s A');
  }

  /* Private functions */
  private function buildUrl($region,$num_days){
    return $this->base_url . 
    $this->parameter_join . $this->query_parameter . $this->parameter_assign . $region . 
    $this->parameter_join . $this->days_parameter . $this->parameter_assign . $num_days;
  }
  
  /* Public functions */
  /* Current condition functions */
  function getCurrentDate(){
    return $this->current_date;
  }

  function getCurrentCity(){
    return $this->weather_object->request[0]->query;
  }

  function getCurrentPrecipMM(){
    return $this->weather_object->current_condition[0]->precipMM;
  }

  function getCurrentTempC(){
    return $this->weather_object->current_condition[0]->temp_C;
  }

  function getCurrentDescription(){
    return $this->weather_object->current_condition[0]->weatherDesc[0]->value;
  }

  function getCurrentIconURL(){
    return $this->weather_object->current_condition[0]->weatherIconUrl[0]->value;
  }

  function getCurrentWindSpeedKmph(){
    return $this->weather_object->current_condition[0]->windspeedKmph;
  }

  function getCurrentWinddir16Point(){
    return $this->weather_object->current_condition[0]->winddir16Point;
  }

  /* Future forecast functions */
  function getWeatherForecastList(){
    return $this->weather_object->weather;
  }

}
?>