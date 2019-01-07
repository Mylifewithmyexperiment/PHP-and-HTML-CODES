<html>
<title>Homepage | FD Sign Services</title>
<style>
*
{
	margin 0 0;
}
.main
{
height:625px;
width:1350px;
background-color:transparent;
margin:auto;
}
.header
{
height:80px;
width:1350px;
background-color:transparent;
}
.sitebody
{
height:485px;
width:1350px;
background-color:transparent;
}
.footer
{
height:60px;
width:1350px;
background-color:transparent;
}
.left
{
height:485px;
width:800px;
background-color:transparent;
float:left;
}
.right
{
height:485;
width:550px;
float:left;
background-color:transparent;
}
input
{
background-color:white;
width:160px;
border:2px solid grey;
border-radius:20px;


}
font
{
	color:black;
	font-weight:bold;
}



</style>
<body background="bg1.jpg">
<div class="main">

 <div class="header">
 <?php
 include("header.html");
 ?>
 </div>
 
 <div class="sitebody">
  <div class="left">
  </br>
  </br></br></br>
  <center>
  <marquee size=5 behavior="scroll" direction="up" width=350 height=200 margin="right" scrolldelay="150">
	<h3>About us</h3>
	<h4>Welcome to F.D SIGN SERVICES</h4>
	we provide you with all sorts of services at one place.This is a newly started where user all sorts of the day -to-day services at one place.Customer satisfaction is our priority. Our services are provided 24x7 hr. The services include Driver on demand,plumbers, Electrician,Carpainters,Painter,home-tutor, baby-sitter,maid.
  </marquee>
  </center>
  </div>
  <div class="right">
   <fieldset>
    <legend><font face="Bradley Hand ITC" size=4 >Login</font></legend>
	 <table>
	  <tr><td><font face="Bradley Hand ITC" size=4 >Username </font><input type="text"/></td><td><font face="Bradley Hand ITC" size=4 > Password </font><input type="password"/></td>
	  <td><input type="submit" value="Login"/></td></tr>
	 </table>
   </fieldset><br/>
<fieldset>
    <legend><font face="Bradley Hand ITC" size=4 >Register</font></legend>
	 <table>
	  <tr><td><font face="Bradley Hand ITC" size=4 >Register as</font></td><td><select name="select"><option>Select</option><option id="op1">User</option><option id="op2" >Provider</option></select></td></tr>
	  <tr><td><font face="Bradley Hand ITC" size=4 >Name</font></td><td><input type="text" required="" action="db.php" method="post" name="name"/></td></tr>
	  <tr><td><font face="Bradley Hand ITC" size=4 >Email</font></td><td><input type="email" required="" action="db.php" method="post" name="email"/></td></tr>
	  <tr><td><font face="Bradley Hand ITC" size=4 >Username</font></td><td><input type="text" maxlength=18 required="" action="db.php" method="post" name="username"/></td></tr>
	  <tr><td><font face="Bradley Hand ITC" size=4 >Contact No.</font></td><td><input type="text" maxlength=10 required="" action="db.php" method="post" name="contact"/></td></tr>
	  <tr><td><font face="Bradley Hand ITC" size=4 >Password</font></td><td><input type="password" required="" action="db.php" method="post" name="password"/></td></tr>
	  <tr><td></td><td><input type="submit" value="Submit" action="db.php" method="post" background-color="black"/></td></tr>
	 </table>
   </fieldset>
  </div>
 </div>
 
 <div class="footer">
<?php
 include("footer.php");
 ?>
 </div>
</div>


</body>
</html>
