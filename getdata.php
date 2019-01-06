
<?php
   $dbhost = 'localhost';
   $dbuser = 'jharkhand';
   $dbpass = '9334221661';
 
 
 
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT Name,Email FROM jharkhand_feed';
   
   mysql_select_db('jharkhand');
   
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
  $result = array();
  while($row=mysql_fetch_array($retval))
  {
  array_push ($result,array('Name'=>$row[0], 'Email'=>$row[1]));
  }
  echo json_encode(array("Details"=>$result));
  
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>




