<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_X_forwarded_for =$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];


if(!empty ($http_clent_ip)  )
 
 {
	 
	 $ip_address = $http_client_ip;
	 
 }
 elseif (!empty ($http_x_forwarded_for))
 {
	 $ip_address= $http_x_forwarded_for;
 }
	else
	{
		
	$ip_address = $remote_addr;	
	}
	
	echo $ip_address;
	
	
?>