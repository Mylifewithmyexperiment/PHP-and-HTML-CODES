<?php
//require "init1.php";


$host="localhost";
$db_name="jharkhand";


$user="jharkhand";
$password="9334221661";


$con=mysqli_connect($host,$user,$password,$db_name);


	
//{  isset($_POST['yy']) ? $_POST['yy'] : "";  


$Name=isset($_POST["Name"]) ? $_POST["Name"] : "";
$Email=isset($_POST["Email"]) ? $_POST["Email"] : "";
//}




$Username=isset($_POST["Username"]) ? $_POST["Username"] : "";
$Password=isset($_POST["Password"]) ? $_POST["Password"] : "";


$sql="select * from jharkhand_feed where Email like '".$Email."';";
$result=mysqli_query($con,$sql);

$response=array();



if(mysqli_num_rows($result)>0)
{
	
	  $code="reg_failed";
	  $message="User Already Exists";
	  array_push($response,$code,$message);
	  
	  echo json_encode($response);
	
	
}
else
{
	$sql="insert into jharkhand_feed values('".$Name."','".$Email."','".$Username."','".$Password."');";
	$result=mysqli_query($con,$sql);
	  $code="reg_success";
	  $message="Thank you for register. Now u can login.....";
	  array_push($response,$code,$message);
	  
	  echo json_encode($response);
	
	
}

mysqli_close($con);

?>
