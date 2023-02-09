<!DOCTYPE html>
<html>
<head>
    <title>
        Log in - E-Gift Shopper
    </title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="shortcut icon" href=" logo-images/EGSS-LoGo.png ">
    
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href=" logo-images\e-letter-gift-shop-creative-lettering-sign-logo-design-template_657888-125.jpg "> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        
</head>

<center>
<body>
    <!------navigation-bar------------->
  <ul>
    <li><a href="https://e-gift-shopper.000webhostapp.com/"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
    <li><a href="contact.shtm"><i class="fas fa-phone"></i> Contact Us</a></li>
    <li><a href="registration.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>

<div class="loginbox">
    <style>
      .loginbox{
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        border-radius: 4px;
            }
            </style>
<img src="index-images\login-avatar.png" class="avatar">
    <h1>LOGIN</h1>


    <form action="login process.php" method="POST">
    <input required="required" type="text" id="user" name="username" placeholder="Enter firstname"/>
    <span class="fas fa-user"></span><br><br>

    <input required="required" type="password" id="pass" name="password" placeholder="Enter password"/>
    <span class="fas fa-lock"></span><br><br>
    
    <button type="submit" id="btn" name="login" default><i class="fas fa-sign-in"></i> Sign in </button><br><br>
    <a href="registration.php">Not a member yet ?</a>

</form>
</center>
</div>
</body>
</html>
