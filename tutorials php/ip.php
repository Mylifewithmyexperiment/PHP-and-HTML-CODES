<?php

require 'server&page_transition.php';

foreach($ip_blocked as $ip)
{
	
	if($ip==$ip_address)
	{
	die('Your IP address is , '.$ip_address.'haas been blocked ' );
    }
}



?>
 
<h1>Welcome</h1>