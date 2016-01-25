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

  /* Constructr */
  function __construct($region,$num_days) {
    $json_response = file_get_contents($this->buildUrl($region,$num_days));
    $this->weather_object = json_decode($json_response)->data;
  }

  /* Private functions */
  private function buildUrl($region,$num_days){
    return $this->base_url . 
    $this->parameter_join . $this->query_parameter . $this->parameter_assign . $region . 
    $this->parameter_join . $this->days_parameter . $this->parameter_assign . $num_days;
  }
  
  /* Public functions */
  function getCurrentCity(){
    return $this->weather_object->request[0]->query;
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

}
?>