<?php
require "feed.php";


$Username=isset($_POST["Username"]) ? $_POST["Username"] : "";
$Password=isset($_POST["Password"]) ? $_POST["Password"] : "";

$sql="select Name,Email from jharkhand_feed where Username like '".$Username."' and Password like '".$Password."';";

$result=mysqli_query($con,$sql);
$response=array();


if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_row($result);
	$Name=$row[0];
	$Email=$row[1];
	$code="login_success";
	
	array_push($response, array("code"=>$code, "name"=>$Name, "email"=>$Email));
	echo json_encode($response);
}
else
{
$code="login_failed";
$message="User Not Found.... Plz Try Again...";

array_push($response, array("code"=>$code,"message"=>$message));
echo json_encode($response);

}	
mysqli_close($con);


?>
