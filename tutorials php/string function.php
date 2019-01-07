<?php

 $string='<strong>use of string function in php</strong><br>';
  echo $string;
  
    function calling_String() 
       {
		   echo '<br><br>'; 
         echo ' declearing new string in insite function <br>';
         $string1='hello, everyone I can only be accessed when I am called <br>';	
	     echo $string1;
		
	   }
		
    function word_count()
		{ 
		 $string2='function to count the string';
		 $string_word_count1 = str_word_count($string2, 0 , '.'); //function to count word on string
		 echo $string_word_count1; // zero as second parameter is used to count words through this methode
		 echo '<br><br>';
		 $string_word_count1 = str_word_count($string2, 1 , '.');
		 print_r($string_word_count1);	// one  as second parameter is used to store the value in array.
		}
	
	function shuffel()
	{
		$string3 ='through shuffel function string is shuffled';
		$string_shuffle=str_shuffle($string3);
		echo $string_shuffle;
	}
	function substring()	
	{
		$string = 'love is love an unconditional love';
		$substring = substr($string , 3,strlen($string)); //from character 3 to last it will display
		echo $substring;
		
		
	}
	
 calling_String();  
 echo '<br><br>'; 
 word_count();  
  echo '<br><br>'; 
  shuffel();
  echo '<br><br>';
  substring();
 
  /** documentation comments
   inside any function you cannot call any value 
  ** you have to declear it global for accessing it.
  */ 

?>