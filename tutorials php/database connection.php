<?php

echo 'ready to connect to database';

//@ is facilitated to avoid the error and die statement is executed in that condition
//@mysql_connect('localhost','root','') or die('if it could not connect');


@mysql_connect('localhost','root','') or exit('if it could not connect');


echo ' <br>conected to database  '  ; 

?>


