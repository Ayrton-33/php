<?php

ini_set ("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);
date_default_timezone_set("America/Argentina/Buenos_Aires");

for ($i=2; $i <=100; $i +=2) {
    echo $i . "<br>";
    if ($i==60){
        break;
    }
}
