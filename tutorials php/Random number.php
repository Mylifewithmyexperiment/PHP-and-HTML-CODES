<?php 

$rand = rand();
$max = getrandmax();
echo $rand.'/'.$max ;// to get random number with index 

echo '<br>'; 
echo $rand ; // get random number 

$rand1= rand(1,6);//to get random number between specified range 
echo '<br>' ;
echo $rand1;

// code for form to respond 
if (isset ($_POST['roll the dice'] )  ) //call name of input and display result
{
	echo "you rolled a dice " .$rand; 
	
}


?>


<form action ="Random number.php" method ="POST">

<input type = "submit" name =" roll the dice" value ="Roll dice">


</form>











