<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:index.php');
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=" logo-images\e-letter-gift-shop-creative-lettering-sign-logo-design-template_657888-125.jpg ">
    
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
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <title>Home And Living</title>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>

</head>
<body>
   <!-----------------main section---------------->
   <section class="main">
       

    <!-------logo----------->
    <div class="logo"><a href="homeandliving.php"><font>Home & </font>Living</a></div>
    
    <!-------logout------------------------->
    <a href="logout process.php"><div style="float:right"><button><i class="fa fa-power-off" aria-hidden="true"></i>LogOut</button></div></a>

  <!------navigation-bar------------->
  <ul>
    <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
    <li><a href="contact.shtm"><i class="fas fa-phone"></i> Contact Us</a></li>
    <!----Cart------------------------------------------------------------------------------------->
<li class="cart">
    <a href="cart.php">
        <i class="fas fa-cart-arrow-down"></i> Proceed to Cart ~ <span>0</span>
    </a>
</li>
  </ul>
    

<!----------------------------------functional-search-box---------------------------------------->
<input type="search" value="" class="search-bar" id="search" placeholder="Search Gift, ..." onchange="openPage()">
        <div id="navigation"></div>
        <script>
            function openPage(){
                var x = document.getElementById("search").value;

                if (x === "navigation"){
                    window.location.href="#navigation";
                }
                //home&living
                if (x === "living"){
                                window.location.href="#living";
                            }
                                if (x === "decor"){
                                    window.location.href="#pb13";
                                }
                                if (x === "tvdecor"){
                                    window.location.href="#pb14";
                                }
                                if (x === "desk"){
                                    window.location.href="#pb15";
                                }
                                if (x === "cushion"){
                                    window.location.href="#pb16";
                                }
               
                                //giftsubcription
                                if (x === "subscribe"){
                                                    window.location.href="#giftsubscribe";
                                                }  

            }
        </script>
<!------main-section------->
<section class="main">
 <!----main-text-------->
 <div class="main-text"></div>



<!-----footer---------------->
<footer>
    <h2>Gift Category</h2>
    <!-------footer-menu------>
    <ul class="footer-menu">
        <li><a href="fashion&desingers.php">Fashion & Designers</a></li>
        <li><a href="flowers.php">Flowers</a></li>
        <li><a href="electronics.php">Electronics</a></li>
        <li><a href="cakes&chocolate.php">Cakes & Chocolate</a></li>
        <li><a href="giftcollection.php">Gift Collection</a></li>


    </ul>
</footer>
</section>
</section>
 




    <!----------------------------------------Home-And-Living----------------------------------------->
        <!-----product--------->
<section class="product">
    <!------heading-------->
    <div class="p-heading" id="living">
    <h2>Home And Living</h2>
    </div>
    <!-------product-box-container-------->
    <div class="prodct-box-container">

    <!-----box-1------->
    <div class="p-box" id="pb13">
    <!-----img------->
    <img src="index-images\product-33.jpg" alt=""/>
    <!------details----->
    <p>
        Modernized Home Decor(Wine Glasses).
    </p>
    <!-----price-------->
    <a herf="#price" class="price">$490.00</a>
    <!------buy btn------>
    <a href="#" class="buy-btn cart13">Add To Cart</a>
    </div>
    
    
    <!-----box-2------->
    <div class="p-box" id="pb14">
        <!-----img------->
        <img src=" index-images\product-32.jpg" alt=""/>
        <!------details----->
        <p>
             TV Decor Wall Frame.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$86.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart14">Add To Cart</a>
        </div>
    
        
    <!-----box-3------->
    <div class="p-box" id="pb15">
        <!-----img------->
        <img src="index-images\product-29.png" alt=""/>
        <!------details----->
        <p>
                Front Desk Luxurious Home Decor.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$1500.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart15">Add To Cart</a>
        </div>
    
        
        <!-----box-4------->
    <div class="p-box" id="pb16">
        <!-----img------->
        <img src="index-images\product-30.png" alt=""/>
        <!------details----->
        <p>
            Home Luxurious Cushions.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$75.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart16">Add To Cart</a>
        </div>

        
  <!--------------------------------------------subscribe-------------------------------------------->
  <section class="subscribe-container" id="giftsubscribe">
        <!-----heading-------->
        <h3>Subscribe For New Gift Notification</h3>
        <!------input------->
        <form action="homeandliving.php" method="POST">
            <?php
            $userEmail = ""; 
                if(isset($_POST['subscribe'])){//if subscribe btn is clicked
                    $userEmail = $_POST['email']; //getting user email
                    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){//validating user input email
                        $subject = "Thanks for subscribing us - Home & Living 🛋";
                        $message    = "Thanks for subscrbing to our gift shop. You will always receive latest gift updates on Home and Living from us! <br> Regards, Administrator. </br>";
                        $sender  = "From: coldcode703@gmail.com"; //email from config xamppp
                            if(mail($userEmail, $subject, $message, $sender)){//php function to send email
                                ?>
                                    <!--show a success message if email is  sent successfully-->
                                <script>
                                    swal({
                                  title: "Cheers!",
                                  text: "Your Subscription was successful!",
                                  icon: "success",
                                  button: "Aww yiss!",
                                  closeOnClickOutside: false,
                                });
                                </script>
                                <?php
                                $userEmail = "";//once mail is sent
                            }else{
                                    ?>
                                    <!--show an error message if somehow mail cannot be sent-->
                                    <script>
                                    swal("Please Try again later.", "Failed somehow while sending your email!", "success", {
                                        className: "boxstyle",
                                        buttons: {
                                            cancel: true,
                                            closeOnClickOutside: false,
                                  });
                                    </script>
                                    <?php
                                    }
                    }else{
                        ?>
                        <!--show an error message if user email is  not correct-->
                        <script>
                            swal("Please Try again.",
                                 "<?php echo $userEmail ?> is not a correct email!",
                                 "warning", {
                                dangerMode: true,
                                buttons: true,
                                closeOnClickOutside: false,
                            });
                        </script>
                        <?php
                    }
                }
            ?>
        <div class="subscribe-input">
        <div class= "field">
            <input type="email" name="email"class="subscribe-input" placeholder="example@gmail.com" required>
            </div>       
        <!------btn------->
        <input type="submit" name="subscribe"value="Subscribe" class="subscribe-btn">
            </div>

            
    </section>


     <!----our-brand--------->
     <section class="our-brand">
        <!----text------->
        <div class="brand-text">
            <h3>Our Brand</h3>
            <h4><?php echo date ('Y'); ?> | E-Gift Shopper  </h4>
            <p>We Manage online gift purchases. This allows shoppers to search for and book gifts in their comfort zone areas. Shipping cost is also payable. We help you order the gift you want at a convenient time.
            </p>
        </div>
        <!---img------>
        <div class="brand-img">
        <img src="brand\ourbrand-img.jpg">
        
        </div>
        </section>

    <!-----copyright------------------------->
    <a href="#copyright" class="copyright">&copy 2021-<?php echo date ('Y'); ?> E-Gift Shopper | All Rights Reserved.</a>
    
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="homeliving.js"></script>
    

</body>
</html>
