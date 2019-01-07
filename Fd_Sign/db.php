<?php
$con=mysql_connect("localhost","root","");
$name=$_post("name");
	$email=$_post("email");
	$username=$_post("username");
    $contact=$_post("contact");
	$password=$_post("password");
if($con)
{
	$db=mysql_select_db("FDSign");
	if($db)
	{
		mysql_query("create table $username()");
	}
	

	
	
}
?>