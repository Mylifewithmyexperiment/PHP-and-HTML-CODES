<?php  ob_start();


?>

<h1>My Page</h1>
A page to show redirection to url.


<?php

$redirect_page = 'https://www.google.co.in/?gfe_rd=cr&ei=ScUQWPyYNIOHoAPMkaiYBA';
$redirect =true;

if($redirect == true)
{
header ('Location: '.$redirect_page   );	
}

ob_end_clean();
?>

/**    php program for redirecting page to server 
**     use redirect keyword  
**     and if and else condition 
**     if true then redirect 
**/