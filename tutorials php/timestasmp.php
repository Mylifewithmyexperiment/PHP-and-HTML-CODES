<?php

$time = time();//display only seconds

$actual_time = date('h:i:s', $time ); //display time 
echo 'the current  time is  '.  $actual_time;

$actual_time = date('D M Y', $time );//displaying date


echo '<br>the current date is  '.  $actual_time;

?>