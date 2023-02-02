<!--
<html>
<head>
<?php
include "header.php";
?>
</head>
<body>
<?php    include "navBar.php"; ?>
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
<a href = shopperhome.php><img src = admin-images\back-button-icon-26.jpg></a>
<div>
<br/>
<br/>
<br/>
<br/>
<center><h2 align = center>View Cart</h2></center>


<form method = post>
<table align = center>

<tr>
<td>Booking ID</td><td><input type = text name = bookingid></td>
</tr>

<tr>
<td>UserName</td><td><input type = text name = username></td>
</tr>
<tr>
<td>Gift Name</td> <td><input type = text name = giftname></td>
</tr>
<tr>
<td>Address</td><td><input type = text name = address></td>
</tr>
<tr>
<td>Contact</td><td><input type = number name = contact></td>
</tr>
<tr>
<td>Email ID</td><td><input type = text name = email></td>
</tr>

<tr>
<td>Booking Date</td><td><input type = text name = bookingdate></td>
</tr>
<tr>
<td colspan = 2 ALIGN = CENTER>

<input type = submit name = remove value = "Cancel Order">
<input type = submit name = search value = Search>
</td>
</tr>
</table>
</form>
-->
<?php

include "dbconfigure.php";
@session_start();
$u = $_SESSION['sun'];

if(isset($_POST['remove']))
{
$bookingid = $_POST['bookingid'];
$username = $_POST['username'];
$giftname = $_POST['giftname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$bookingdate = $_POST['bookingdate'];

$query = "delete from booking where bookingid=$bookingid";
$n = my_iud($query);
echo "$n record deleted"; 
}

if(isset($_POST['search']))
{
$query = "select * from booking where username='$u'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Booking ID</td>";
echo "<td>User Name</td>";
echo "<td>Gift Name</td>";
echo "<td>Quantity</td>";
echo "<td>Address</td>";
echo "<td>Contact</td>";
echo "<td>Email</td>";
echo "<td>Booking Date</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "</tr>";
}
echo "</table>";
}
?>


</div>
<?php  include "bottom.php"; ?>
</body>
</html>
