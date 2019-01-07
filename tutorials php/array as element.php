<?php 

include 'function.php' ;

$mongodb = array ('operations' =>  array('create','delete','drop') );
 
 
       foreach($mongodb as $element => $inner_array )
           {
	              echo '<br>'.$element.'<br>';
				  
				foreach($inner_array as $item)

				{
					echo '<br>'.$item.'<br>';
				}				
	       }

		   
		   /** documentation comment
              araay declaratkion in  php is vbery simple 
			  first define astring after that declear array keep elements in that 
			  now add inbner array  by usiong  => sign
			   simillarl;ly declear inner aray 
			   
			   for dis]=losying thenm use foreach funcction eiwethg two parameter in that 
			   1st paramerterr string name and 2nd as array name  and then echo elementsx 
			   inside array .
			   
                
		   
		  */

?>