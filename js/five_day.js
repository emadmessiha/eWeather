$(document).ready(function(){
  var url = "http://api.worldweatheronline.com/free/v1/weather.ashx?q=Ottawa&format=json&num_of_days=5&key=jk2trybcc2hvpvx57sqzgtqk";
  $.get(
    url,
    function(data) {
       //alert('page content: ' + data);
    }
);
});