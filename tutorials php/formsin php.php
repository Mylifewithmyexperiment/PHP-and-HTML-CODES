// errror iin display of what we type
<?php

$find = array('shahsi',"Manish","Vineet");
$replace=array ('s*****i','M****h','Vineet');


if ( isset($_POST['user_input']) &&! empty ($_POST['user_input']) )
{
	$user_input = $_POST['user_input'];
	$user_input_new = str_replace($find,$replace,$user_input);
	echo $user_input_new;
}
 



?>
<br>
<form action = "formsin php.php" method="POST">

<textarea name ="user_input" rows ="7" cols="40"><?php echo $user_input; ?></textarea><br><br>
<input type  ="submit" value="Submit">

</form>
