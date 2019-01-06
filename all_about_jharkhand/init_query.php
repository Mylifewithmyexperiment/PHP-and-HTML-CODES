<?php

$host="localhost";
$db_name="jharkhand";

//if(isset($_POST['submit']))
	
//{
$user_name=$_POST["Name"];
$user_pass=$_POST["Email"];
//}
$user_Phone=$_POST["Phone"];
$user_Query=$_POST["Query"];

$user="jharkhand";
$password="9334221661";


$con=mysqli_connect($host,$user,$password,$db_name);

$sql="insert into jharkhand_query values('".$user_name."','".$user_pass."','".$user_Phone."','".$user_Query."');";

if(mysqli_query($con,$sql))

if($con)
{
	echo "Connection Success..... ok!";
}
else
{
	echo "Connection failed..!!";

}
mysqli_close($con);

?>
