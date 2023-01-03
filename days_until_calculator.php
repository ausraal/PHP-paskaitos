<?php
$eventName = readline('Event Name:');
$eventDate = readline('Event Date: ');


$currentDate = new DateTime();

$interval = date_create($eventDate)->diff($currentDate)->days;

echo "Event" . $eventName . " is " . $interval . " days away";