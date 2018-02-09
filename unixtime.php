<?php
$unix_timestamp = 1333699439;
$datetime = new DateTime("@$unix_timestamp");
$date_time_format = $datetime->format('Y-m-d H:i:s');
$time_zone_from="UTC";
$time_zone_to="America/New_York";
$display_date = new DateTime($date_time_format, new DateTimeZone($time_zone_from));
$display_date->setTimezone(new DateTimeZone($time_zone_to));
print "Me:   ". $display_date->format('jS F Y - g:i A T') . "\n";
print "Good: 6th April 2012 - 4:03 AM EDT\n";
?>
