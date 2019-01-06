<?php
//require "init1.php";


$host='localhost';
$db='mydb';


$user='root';
$pass='';


$con=mysqli_connect($host,$user,$pass,$db);
if($con)
	echo 'connected ';

$sql="insert into mutable 1(username,password,email) values ('shashi', 123, 'shashijaiswa17@gmail.com')";

$query = mysqli_query($con,$sql);
if($query)


echo 'data inserted successfully';

?>



 