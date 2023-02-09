<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Sign up - E-Gift Shopper
    </title>
    <link rel="stylesheet" type="text/css" href="reg.css">
     <link rel="shortcut icon" href=" logo-images/EGSS-LoGo.png">
     
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
        
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>
</head>

<center>
<body>
    <!------navigation-bar------------->
  <ul>
    <li><a href="https://e-gift-shopper.000webhostapp.com/"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
    <li><a href="contact.shtm"><i class="fas fa-phone"></i> Contact Us</a></li>
    <li><a href="login.php"><i class="fas fa-power-off"></i> LOGIN</a></li>
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
            echo "<script type='text/javascript'> 
                alert('Yaay:) Sign up was successful! Please proceed to LOGIN!'); 
            </script>"; 
            'Yaay! Sign up was successful! Please proceed to LOGIN!';
        }else{
            echo 'Error occurred while saving data.';
        }
    }
    ?>
</div>


<div class="loginbox" text-center>
<img src="index-images\signin-avatar.png" class="avatar"><br>


    <form action="registration.php"  method="POST">
        <div class="container" text-center>
            <style>
      .loginbox{
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        border-radius: 4px;
            }
            </style>
            <hr class="mb-3">
            <label for="firstname"><b>First Name</b></label>
            <input type="text" id="firstname" name="firstname" placeholder="firstname" required>

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" id="lastname" name="lastname" placeholder="lastname" required><br>

            <label for="email"><b>Email Address</b></label>
            <input type="email" id="email" name="email" placeholder="abc@example.com" required>

            <label for="phonenumber"><b>Phone Number</b></label>
            <input type="text" id="phonenumber" name="phonenumber" placeholder="phonenumber" required><br>

            <label for="password"><b>Password</b></label>
            <input type="password" id="password" name="password" placeholder="enter password" required><br>
           
            <button type="submit" class="btn">Sign Up <i class="fas fa-sign-in-alt"></i></button>

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
       
        // snackbar alert
            const showSnackbar = () => {
              const snackbar = document.createElement('div');
              snackbar.innerHTML = 'Welcome to E-GIFT SHOPPER! Please proceed for Logging in!';
              snackbar.style.backgroundColor = 'rgba(144, 238, 144, 0.5)';
              snackbar.style.position = 'fixed';
              snackbar.style.top = '8%';
              snackbar.style.left = '50%';
              snackbar.style.transform = 'translate(-50%, 0%)';
              snackbar.style.padding = '10px 20px';
              snackbar.style.borderRadius = '5px';
              snackbar.style.cursor = 'pointer';
              snackbar.style.userSelect = 'none';
            
              document.body.appendChild(snackbar);
            
              setTimeout(() => {
                snackbar.style.display = 'none';
              }, 5000);
            
              snackbar.addEventListener('click', () => {
                snackbar.style.display = 'none';
              });
            };
            
            showSnackbar();


        
    });
</script>
</body>
</center>
</html>

