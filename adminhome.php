<html>
<head>
<?php
include "header.php";
?>
</head>
<body background = "admin-images\shop.webp">
<?php    include "top.php" ?>
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
<br/>
<a href = admin_home.php><img src = admin-images\back-button-icon-26.jpg></a>
<div>

<html >
<head>

</head>
<body>
<br/>
<br/>
			
				<center><h2 align = center>ADMIN HOME PAGE</h2></center>
				
				
					<p>

<form method="post">
<table width="360" border="0" align = center>
<tr>
<td>Name</td>
<td><input type="text" name="username" ></td>
</tr>
<tr>
<td>Password</td>
<td>
<input type="password" name="pwd" ></td>
</tr>
<tr>
<td>Date of birth</td>
<td>
<input type = date name =dob>
</td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender"  value='male' checked>Male
&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender"  value='female'>Female
</td>
</tr>
<tr>
<td>Emailid</td>
<td><input type="text" name="emailid" ></td>
</tr>
<tr>
<td>Phone no.</td>
<td><input type="number" name="phoneno" ></td>
</tr>
<td>Role</td>
<td>
<input type="text" name="role" >
</td></tr>
<tr>
<td>
<input type="submit" name="save"  value="save"/></td>
<td>
<input type="submit" name="search" value="search"/></td>
</tr>
<tr>
<td><input type="submit" name="customize"  value="customize"/></td>
<td><input type="submit" name="delete"  value="delete"/></td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$emailid = $_POST['emailid'];
$phoneno = $_POST['phoneno'];
$role =  $_POST['role'];

$query = "insert into siteuser values('$username','$pwd','$dob','$gender','$emailid','$phoneno','$role')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['customize']))
{
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$emailid = $_POST['emailid'];
$phoneno = $_POST['phoneno'];
$role =  $_POST['role'];

$query = "update siteuser set pwd='$pwd',dob='$dob',gender='$gender',emailadd='$emailid',phoneno='$phoneno',role='$role' where username='$username' ";
$n = my_iud($query);
echo "$n record customized"; 
}

if(isset($_POST['delete']))
{
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$emailid = $_POST['emailid'];
$phoneno = $_POST['phoneno'];
$role =  $_POST['role'];

$query = "delete from siteuser where username='$username'";
$n = my_iud($query);
echo "$n record deleted"; 
}

if(isset($_POST['search']))
{
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$emailid = $_POST['emailid'];
$phoneno = $_POST['phoneno'];
$role =  $_POST['role'];

$query = "select * from siteuser";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "$n record found"; 
echo "<table align = center border = 1>";
echo "<tr>";
echo "<th>UserName</th>";
echo "<th>Password</th>";
echo "<th>Date of Birth</th>";
echo "<th>Gender</th>";
echo "<th>Email ID</th>";
echo "<th>Contact No.</th>";
echo "<th>Role</th>";
echo "</tr>"; 
while($row = mysql_fetch_array($rs))
{
echo "<tr>";
echo "<td>$row[0]</td>" ;
echo "<td>$row[1]</td>" ;
echo "<td>$row[2]</td>" ;
echo "<td>$row[3]</td>" ;
echo "<td>$row[4]</td>" ;
echo "<td>$row[5]</td>" ;
echo "<td>$row[6]</td>" ;
echo "</tr>";
}
echo "<table>";
}
?>

		
		</body>
</html>


</div>
<?php  include "bottom.php "?>
</body>
</html>