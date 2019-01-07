<?php
//program to find matching string
$string='get ready to receive a suitable match for you';

if(preg_match('/ /',$string))
{
	echo 'match found';
}
else
{
	echo 'No match found';
}



?>