<?php

$string = 'This is a car of my friend. ';

$new_array=array('is','a','of');

$String1=str_replace('is','was',$string);
echo $String1;

echo '<br>';

$new_string = str_replace($new_array,'at',$string);// for array replace


echo $new_string;
$new_string = str_replace('string','at',$string);//to replace back the same 
?>