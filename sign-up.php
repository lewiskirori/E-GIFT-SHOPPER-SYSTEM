<html>
<head>
<?php
include "header.php";
?>
</head>
<body>
<?php    include "top.php" ?>
<div>
<html>
<head>
<script type="text/javascript" src="calendarDateInput.js">
</script>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
	<br/>	
			
			<h2>Signup page</h2>
				
	
<form method="post">
<table border="0" width="400" height = 500 align = center style = "position : absolute ; top : 250px ; left : 600px">
<tr>
<td>
Name</td>
<td><input type="text" name="username" >
</td>
</tr>
<tr><td>
Password</td>
<td><input type="password" name="pwd" >
</td>
</tr>
<tr>
<td>
Date of birth</td>
<td>
<script>DateInput('dob', true, 'DD-MM-YYYY')</script>
</td>
</tr>
<tr>
<td>
Gender</td>
<td><input type="radio" name="gender"  value='male' checked>Male
&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender"  value='female'>Female
</td>
</tr>
<tr>
<td >
Emailid</td>
<td><input type="text" name="emailid" >
</td>
</tr>
<tr>
<td>
Phone no.</td>
<td>
<input type="number" name="phoneno" ></td>
</tr>

<tr>
<td colspan='2' align='center'>
<input type="submit" name="save"  value="save"/>
</td>
</tr>
</table>
</form>
<?php

include "dbconfigure.php" ;
if(isset($_POST["save"]))
{
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$emailid=$_POST['emailid'];
$phoneno=$_POST['phoneno'];
$role="customer";
$query="insert into siteuser values('$username','$pwd','$dob','$gender','$emailid','$phoneno','$role')";
$n = my_iud($query);
echo "<br/>$n record saved" ;
}
?>


	
        </body>
</html>


</div>
<?php  include "bottom.php "?>
</body>
</html>