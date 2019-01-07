// find and replace

<?php
$offset =0;

 if (  isset($_POST['text']) 
	&& isset ($_POST ['search for']) 
	&& isset ($_POST['replacewith']) 
	)            

{
	$text=$_POST['text'];
	
	$search = $_POST["search for"];
	
	$replace = $_POST["replacewith"];
	
	
	if(!empty  ($text) && !empty ($search) && !empty  ($replace)) 
	{
		while($strpos = strpos ($text,$search,$offset))
		{
			
		}
		
		//echo 'OK';
	}
	else {
		echo 'Not ok';
	}
	
}

	
	
	
	
?>


<br><br>
<form action= 'find and Replace.php' method ="POST">
<textarea name = 'user_input' rows="7" cols="30"> <?php  echo user_input?>
</textarea>
<br><br>search for
<input type = 'text' name ='search for '>
<br><br>replacewith
<input type ="text" name ="replacewith"><br><br>
 

<input type = "submit" value ="submit">


</form>






