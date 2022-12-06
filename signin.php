<?php ob_start();?>
<html>
<head>
<?php
include "header.php";
?>
</head>
<body>
<?php include "top.php"; ?>
<div>
<?php
/*
on an anonymous site, anyone who can access
foreigners (anonymously) is also allowed
*/
@session_start();
include "dbconfigure.php";
$msg="";
if(verifyuser())
{
$un=fetchusername();
$msg="Welcome $un , <br /><a href='signout.php'>Signout</a>";
}
else
{
$msg="Welcome Guest 👋, ";
$msg.="<br/>Existing user <a href='signin.php'>Signin</a>";
$msg.="<br/>New user <a href='signup.php'>Signup</a>";
}
?>

<html >
<head>
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
			
			<h2 >SignIn Page</h2>		
					
<form method="post">
<table  width="360" border="0" align = center style = "position : absolute ; top : 250px ; left : 600px">
<tr>
<td>Email</td>
<td>
<input type="text" name="email">
</td>
</tr>
<tr>
<td>Password</td>
<td>
<input type="password" name="pwd" >
</td>
</tr>
<tr>
<td>Remember Me</td>
<td><input type="checkbox" name="rem"  value='yes'>
</td>
</tr>
<tr>
<td colspan='2' align='center'>
<input type="submit" name="login"  value="login">
</td>
</tr>
</table>
</form>
<?php
if(isset($_REQUEST['login']))
{
$email=$_REQUEST['email'];
$pwd=$_REQUEST['pwd'];
//syntax to fetch value of checkbox
if(isset($_REQUEST['rem']))
$remember='yes';
else
$remember='no';
//echo "<br/>$email,$pwd,$remember";

//1. check if user is valid or not
$query="select count(*) from siteuser where email='$email' and pwd='$pwd'";
include_once "dbconfigure.php";
$ans=my_one($query);
if($ans==1)
{
//2. save email and pwd to session variables
$_SESSION['semail']=$email;
$_SESSION['spwd']=$pwd;

//3. if remember is yes, save them to cookies too
if($remember=='yes')
{
setcookie('cemail',$email,time()+60*60*24*7);
setcookie('cpwd',$pwd,time()+60*60*24*7);
}

//4. fetch role of user
$query="select role from siteuser where email='$email' and pwd='$pwd'";
$ans=my_one($query);
//echo "<br/>Valid user and your role is $ans";
$targetpage=$ans."_home.php";
header("Location:$targetpage");
}

else
{
header("Location:loginerror.php");
}
}

?>
		</body>
</html>
</div>
<?php  include "bottom.php "?>
</body>
</html>