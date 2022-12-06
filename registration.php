<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Sign up Page
    </title>
    <link rel="stylesheet" type="text/css" href="reg.css">
</head>

<center>
<body>
    <!------navigation-bar------------->
  <ul>
    <li><a href="index.php">🏪Home</a></li>
    <li><a href="about.php">👥About</a></li>
    <li><a href="contact.php">☎️Contact Us</a></li>
    <li><a href="login.php">LOGIN</a></li>
  </ul>

<div>
    <?php
    if(isset($_POST['create'])){
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $phonenumber= $_POST['phonenumber'];
        $password   = $_POST['password'];

        $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES(?,?,?,?,?)";
        $stminsert = $db->prepare($sql);
        $names=array($firstname, $lastname, $email, $phonenumber, $password);
        $result = $stminsert->execute($names);


        if($result){
            echo 'Sign up was successfully saved! Please proceed to LOGIN!';
        }else{
            echo 'There were errors while saving the data.';
        }
    }
    ?>
</div>


<div class="loginbox">
<img src="index-images\signin-avatar.png" class="avatar"><br>


    <form action="registration.php"  method="POST">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Fill up the page with correct values.</p>
            <hr class="mb-3">
            <label for="firstname"><b>First Name</b></label>
            <input type="text" id="firstname" name="firstname" placeholder="firstname" required>

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" id="lastname" name="lastname" placeholder="lastname" required><br>

            <label for="email"><b>Email Address</b></label>
            <input type="email" id="email" name="email" placeholder="abc@gmail.com" required>

            <label for="phonenumber"><b>Phone Number</b></label>
            <input type="text" id="phonenumber" name="phonenumber" placeholder="phonenumber" required><br>

            <label for="password"><b>Password</b></label>
            <input type="password" id="password" name="password" placeholder="enter password" required><br>
           
            <input type="submit" class="btn" name="create" value="Sign Up"/><br>
        </div>

    
    <a href="login.php">Already a member ?</a>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e){
            
            var valid = this.form.checkValidity();


            if(valid){

            var firstname   = $('#firstname').val();
            var lastname    = $('#lastname').val();
            var email       = $('#email').val();
            var phonenumber = $('#phonenumber').val();
            var password    = $('#password').val();

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'regprocess.php',
                    data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
                    success: function(data){
                        swal.fire({
                        'title': 'Successful!',
                        'text' : data,
                        'type' : 'Success.'
                        })
                    },
                    error: function(data){
                        swal.fire({
                        'title': 'Failed',
                        'text' : 'There were errors while saving the data.',
                        'type' : 'Error.'
                        })
                    }
                });

                
            }else{
                
            }

            
        });
       
        alert('Hello👋! Welcome to E-GIFT SHOPPER! Please proceed for Logging in!!');
        
        
    });
</script>
</body>
</center>
</html>

