<!DOCTYPE html>
<html>
<head>
    <title>
        Login Page
    </title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<center>
<body>
    <!------navigation-bar------------->
  <ul>
    <li><a href="index.php">🏪Home</a></li>
    <li><a href="about.php">👥About</a></li>
    <li><a href="contact.php">☎️Contact Us</a></li>
    <li><a href="registration.php">Sign Up</a></li>

<div class="loginbox">
<img src="index-images\login-avatar.png" class="avatar">
    <h1>LOGIN</h1>


    <form action="login process.php" method="POST">
    <input required="required" type="text" id="user" name="username" placeholder="username (firstname)"/><br><br>

    <input required="required" type="password" id="pass" name="password" placeholder="enter password"/><br><br>
    
    <button type="submit" id="btn" name="login" default>login</button><br><br>
    <a href="registration.php">Not a member ?</a>

</form>
</center>
</div>
</body>
</html>

