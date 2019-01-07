<?php


echo  '<strong> hello, kaise ho  </strong> <br>';


echo "<b>  <u>   kya ho raha h  </u>  </b><br>";

echo '    <br>      ' ;       //spaces are not generated this way

//defining text
echo $text = 'decision'; 
echo $number = '7';
echo $bool =false;

echo $text;                     //again displaying 


//concatenation (dot operator)

echo '<br>M S DHONI lucky no is <b>'.$number.' </b> and he took right
 <b><u>'.$text. ' </u></b> in his life<br>';

$text1 = 'vito';
$text1 .='power';      //here two sentence are concatenated by dot operator
echo $text1;


//if else corresponding to 0(false) and 1(true) 

  IF (0)
    {
     ECHO ' <br>1 is automatically for true <br>';// php is not case sensitive even commands like if and else
    }
  else
    {	
     ECHO "<br>0 is automatically false <br>";  //dont confuse between '' and "" both r same
    }

	
	
//some arithmetic operation
$number2 = $number+2;   //similar to java
$number3= ($number+$number2*$number)/3;
echo "$number3";	
	
//logical operation
if($number==7 && $number2==9)
{
	echo "<br>an example of logical operator<br>";
}
else 
{
	echo "<br>unlogical<br> ";
}	

// do while loop 	
  do
	{ 
		echo ' <br> loop   returns'   .$number.' now<br>';
		$number++;
	}	
	 while($number<15);

//for loop
 
for($num=0; $num<9;$num++) 
{
	echo '<br>for u it is for loop'.$num.'<br>' ;
}
	  $num2 =1;
	 
	 Switch ($num2)
	 {
		 case 0:
		 echo '<br>num value is zero';
		 break;
		 
		 case 1:
		 echo " <br>num's value is one";
		 break;
		 
		 default :
		 echo "<br>num value not provided ";
		 
	 }
	 
	 
	
die(' <br><br>no print because of die');   //to kill furter execution 
	 
	 
	 
	
	 
	 
	 echo ' these r not going to be printed<br><br><br><br><br><br><br><br><br>';
?>
...........................................
// generalised variable declaration
 // var name = 'shri niwasan';

 //var  age= 3 october;