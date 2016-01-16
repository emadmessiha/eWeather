//Make sure to insert your World Weather Online key in the URL.
$(document).ready(function(){
  var url = "http://api.worldweatheronline.com/free/v1/weather.ashx?q=Ottawa&format=json&num_of_days=1&key=jk2trybcc2hvpvx57sqzgtqk";
  $.get(
    url,
    function(data) {
       //alert('page content: ' + data);
    }
);
});