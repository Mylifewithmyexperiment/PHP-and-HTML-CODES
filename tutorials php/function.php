<?php
//general format of obtaining IP
echo $user_ip  = $_SERVER {'REMOTE_ADDR'};

//echo $user_ip;
//using this in function 
  function echo_ipa()
  {
	global $user_ip;   //you need to specify global keywork to access the value inside function
	$abc = '<br>your ip address is '.$user_ip. '<br>got it ';
	echo $abc;
  }
  
  echo_ipa();
  
  
  die();

// self-explatory example of function
	function Address()
	{
	echo ' <br>pune ';
	} 

	echo 'where i have done my summer training<br> (get the address through function)';
    Address();



// function with argument
    function Total_fees( $basic)     //take care to define by $ symbol not int
      {
	   $total=$basic+2000;
	   echo  $total ;
      }

    echo 'calculate total fees<br>';
    Total_fees(3000);
 







?>