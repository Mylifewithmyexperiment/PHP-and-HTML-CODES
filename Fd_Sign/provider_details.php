<html>
<title>Service Provider | FD Sign Services</title>
<style>
.main
{
height:1000px;
width:1350px;
background-color:transparent;
}
.header
{
height:150px;
width:1350px;
background-color:transparent;
}
.sitebody
{
height:790px;
width:1350px;
background-color:transparent;
}
.left
{
  height:790px;
  width:100px;
  background-color:transparent;
  float:left;
}
.center
{
	height:790px;
	width:1150px;
	background-color:transparent;
	float:left;
}
.right
{
height:790px;
width:100px;
background-color:transparent;
float:left;	
}
.footer
{
height:60px;
width:1350px;
background-color:transparent;
}
table
{
	width:100px;
}
font
{
	font-family:Bradley Hand ITC;
	font-weight:bold;
	
}
fieldset
{
	width:100px;
}
input
{
	border:2px solid grey;
	border-radius:20px;
}
.opt
{
	border:2px solid grey;
	border-radius:20px;
}
#addr
{
	height:100px;
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
	<div class="left"></div>
	<div class="center">
	<center>
	<fieldset>
	<legend><font >Enter your complete details</font></legend>
	<form>
	<table>
	
	<tr><td><font>Father's Name</font></td><td><input type="text"\></td></tr>
	<tr><td><font>Mother's Name</font></td><td><input type="text"\></td></tr>
	<tr><td><font>Date of Birth</font></td><td><input type="text"\></td></tr>
	<tr><td><font>Nationality</font></td><td><select class="opt" name="select"><option>Select</option><option id="op1">Indian</option><option id="op2">Other</option></select></td></tr>
	<tr><td><font>Id Proof</font></td><td><input type="text"\></td></tr>
	<tr><td><font>Address(Residential)</font></td><td><input id="addr" type="text area"\></td></tr>
	<tr><td><font>Qualification</font></td><td><input type="text"\></td></tr>
	<tr><td><font>Work Experience</font></td><td><input type="number"\></td></tr>
	<tr><td><font>Specializd in</font></td><td><input type="text"\></td></tr>
	<tr><td><font>Minimum Income you expect</font></td><td><input type="number"\></td></tr>
	<tr><td><font>Are you ready to work 24x7</font></td><td>Yes<input type="radio" name="ab">  No<input type="radio" name="ab"></td></tr>
	<tr><td><input type="submit" value="Submit"></td><td><input type="Reset" name="Reset"></td></tr>
	</table>
	</form>
	
	</fieldset>
	</center>
	</div>
	<div class="right"></div>
 </div>
 
 <div class="footer">
<?php
 include("footer.html");
 ?>
 </div>
</div>
</body>
<html>