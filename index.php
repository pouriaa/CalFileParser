<?php

include('core/CalFileParser.php');

$cal = new CalFileParser();

//Create SS calendar in JSON
$parsed_cal = $cal->parse('_examples/schedule.ical', 'json');

$total_hours = $cal->total($parsed_cal, 1308182400);

echo "total hours : " . $total_hours;

?>
