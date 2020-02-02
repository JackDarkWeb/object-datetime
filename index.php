<?php

// Calculate time ago

$date1 = '2015-12-20';
$date2 = '2020-02-20';

$d1  = new Datetimes($date1);
$d2  = new Datetimes($date2);


var_dump($d1->diff($d2, true));




//$days = ($d1->diff($d2, true)->days);

echo "il y a $days ago";


exit();
echo "<br/>";

$date = new Datetimes();

$date->modify('+1 month');

var_dump($date);

echo "\n";

echo $date->format('d/m/Y');

echo "\n";

$time = time();
$time = strtotime('+1 month', $time);

echo date('d/m/Y', $time)."<br/>";

// time ago

$time1 = strtotime($date1);
$time2 = strtotime($date2);

$days = floor(ceil(abs($time1 - $time2) / (24*60*60)));

echo "il y a $days ago";
