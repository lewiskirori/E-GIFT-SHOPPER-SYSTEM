<html>
<head>
<?php
include "header.php";
?>
</head>
<body>
<?php    include "navBar.php"; ?>
<?php
session_start();
$u = @$_SESSION['sun'];
?>
<div>
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
<a href = shopperhome.php><img src = admin-images\back-button-icon-26.jpg></a>
<br>
<br>
<h2 align = center>FeedBack</h2>

<br/>
<br/>
<form method = post>
<table align = center>

<tr>
<td>Name</td><td><input type = text name = name value = "<?php echo $u; ?>" readonly></td>
</tr>
<tr>
<td>Phone No.</td> <td><input type = number name = phoneno></td>
</tr>
<tr>
<td>Email ID</td><td><input type = text name = email></td>
</tr>
<tr>
<td>Date</td><td><input type = date name = date></td>
</tr>
<tr>
<td>Your Message</td><td><textarea name = ymsg></textarea></td>
</tr>
<tr>
<td align = center>
<input type = submit name = save value = Submit>

</td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$name = $_POST['name'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$date = $_POST['date'];
$ymsg = $_POST['ymsg'];
$query = "insert into feedback values('','$name','$phoneno','$email','$date','$ymsg')";
$n = my_iud($query);
echo "$n record saved<br/>Your FeedBack Has Been Sent Successfully"; 
}

?>

</div>
<?php  include "bottom.php"; ?>
</body>
</html>