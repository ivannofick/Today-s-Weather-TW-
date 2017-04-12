<body>
<u><b>Your Location Now</b></u> <br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/c1380180f9d70963/geolookup/q/Semarang.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'country_name'};
  $location1 = $parsed_json->{'location'}->{'city'};
  $lat = $parsed_json->{'location'}->{'lat'};
  $lon = $parsed_json->{'location'}->{'lon'};
  echo "Country is ${location} \n </br>";
  echo "City is ${location1}\n </br>";
  //echo "Latitude is : ${lat} and Longitude is: ${lon}\n </br>";
?>
================================================= </p>
</body>
<body>
<u><b>Forecast Today</b></u> <br>
<?php
$json_data1=file_get_contents("http://api.wunderground.com/api/c1380180f9d70963/forecast/q/Semarang.json");
$obj = json_decode($json_data1);
$loc = $obj->{'forecast'}->{'txt_forecast'}->{'date'};
$day = $obj->forecast->txt_forecast->forecastday[0]->title;
$image = $obj->forecast->txt_forecast->forecastday[0]->icon_url;
$info = $obj->forecast->txt_forecast->forecastday[0]->fcttext_metric;
$info1 = $obj->forecast->simpleforecast->forecastday[0]->{'date'}->pretty;
$info2 = $obj->forecast->simpleforecast->forecastday[0]->avehumidity;
$wind = $obj->forecast->simpleforecast->forecastday[1]->{'avewind'}->kph;
echo "Forecast Day : ${day} \n </br>";
echo "${info1} \n </br>";
echo "${info} ";
echo '<img src="'.$image.'"></br>';
echo "Humidity : ${info2} \n </br>";
echo "Wind Speed : ${wind} mph\n </br>";
?>
</body>
================================================= </p>
</body>
<body>
<u><b>Astronomy Today</b></u> <br>
<?php
$json_data2=file_get_contents("http://api.wunderground.com/api/c1380180f9d70963/astronomy/q/Balikpapan.json");
$obj1 = json_decode($json_data2);
$moon = $obj1->{'moon_phase'}->{'ageOfMoon'};
$hemis = $obj1->{'moon_phase'}->{'hemisphere'}; 
$time = $obj1->{'moon_phase'}->{'current_time'}->{'hour'};
$time1 = $obj1->{'moon_phase'}->{'current_time'}->{'minute'};
$time2 = $obj1->{'moon_phase'}->{'sunrise'}->{'hour'};
$time3 = $obj1->{'moon_phase'}->{'sunrise'}->{'minute'};

echo "Age Of Moon is ${moon} with Hemisphere at ${hemis}  \n </br>";
echo "Sun wil rise at ${time2} Hour, ${time3} Minutes \n </br>";


//echo "Current Time is ${time}Hour, ${time1}Minutes  \n </br>";
?>
</body>
