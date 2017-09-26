<?php

$str   = @file_get_contents('/proc/uptime');
$num   = floatval($str);
$secs  = round(fmod($num, 60)); $num = (int)($num / 60);
$mins  = $num % 60;      $num = (int)($num / 60);
$hours = $num % 24;      $num = (int)($num / 24);
$days  = $num;

echo "System Uptime : " .  $days . " Day, " . $hours . " Hrs, " . $mins . " Mins, " . $secs . " Seconds";

?>