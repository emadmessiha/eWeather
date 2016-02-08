<?php
class ClientLocation {
  /* Constants */
  var $base_url="http://api.netimpact.com/qv1.php?key=U64hbHByfF2sHWu6&qt=geoip&d=json&q=";
  var $separator=",";

  /* Variables */
  var $city, $state_region, $country_long, $isp, $latitude, $longitude, $country;

  /* Constructr */
  function __construct(){
    $ip=$this->getClientIp();
    $json_response = file_get_contents($this->base_url . $ip);
    $cityObject = json_decode($json_response)[0];
    
    //set variables
    $this->city=$cityObject[0];
    $this->state_region=$cityObject[1];
    $this->country_long=$cityObject[2];
    $this->isp=$cityObject[3];
    $this->latitude=$cityObject[4];
    $this->longitude=$cityObject[5];
    $this->country=$cityObject[6];
  }

  /* Private functions */
  // Function to get the client IP address
  private function getClientIp() {
      $ipaddress = '';
      if (getenv('HTTP_CLIENT_IP'))
          $ipaddress = getenv('HTTP_CLIENT_IP');
      else if(getenv('HTTP_X_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
      else if(getenv('HTTP_X_FORWARDED'))
          $ipaddress = getenv('HTTP_X_FORWARDED');
      else if(getenv('HTTP_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_FORWARDED_FOR');
      else if(getenv('HTTP_FORWARDED'))
         $ipaddress = getenv('HTTP_FORWARDED');
      else if(getenv('REMOTE_ADDR'))
          $ipaddress = getenv('REMOTE_ADDR');
      else
          $ipaddress = 'UNKNOWN';
      return $ipaddress;
  }

  /* Public functions */
  public function getCurrentCityExact(){
    return $this->city . $this->separator . $this->state_region . $this->separator . $this->country_long;
  }
}
?>