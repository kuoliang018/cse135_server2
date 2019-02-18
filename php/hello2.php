<?php


$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Script timezone differs from ini-set timezone.';
} else {
    echo 'Script timezone and ini-set timezone match.';
}
echo $timestamp = date('H:i:s');
echo "Hello Web World from Language PHP on date time stamp enjoy my COLOR page!";
?>
