<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 6/10/2019
 * Time: 9:41 PM
 */

// 2 biến global

$city = "Hà Nội";

$country = "Việt Nam";

$go = function ($vehicle) use ($city, $country){
  echo "<br> Go to travel city " . $city . " country " .$country . " by " . $vehicle;
};