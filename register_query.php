<?php
//require "init1_query.php";


$host="localhost";
$db_name="jharkhand";


$user="jharkhand";
$password="9334221661";


$con=mysqli_connect($host,$user,$password,$db_name);

$Name=isset($_POST["Name"]) ? $_POST["Name"] : "";
$Email=isset($_POST["Email"]) ? $_POST["Email"] : "";

$Phone=isset($_POST["Phone"]) ? $_POST["Phone"] : "";
$Query=isset($_POST["Query"]) ? $_POST["Query"] : "";


$sql="select * from jharkhand_query where Email like '".$Email."';";
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
	$sql="insert into jharkhand_query values('".$Name."','".$Email."','".$Phone."','".$Query."');";
	$result=mysqli_query($con,$sql);
	  $code="reg_success";
	  $message="Thank you for register. Now u can login.....";
	  array_push($response,$code,$message);
	  
	  echo json_encode($response);
	
	
}

mysqli_close($con);

?>
