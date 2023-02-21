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
    <link rel="shortcut icon" href=" logo-images/EGSS-LoGo.png ">
    
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href=" logo-images\e-letter-gift-shop-creative-lettering-sign-logo-design-template_657888-125.jpg "> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!--Inter UI font-->
        <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">
    
        <!--vendors styles-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <!-- Bootstrap CSS / Color Scheme -->
        <link rel="stylesheet" href="css/default.css" id="theme-color">
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
    <title>Cakes & Chocolate</title>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>


</head>
<body>
   <!-----------------main section---------------->
   <section class="main">

    <!-------logo----------->
    <div class="logo"><a href="cakes&chocolate.php"><font>Cakes & </font>Chocolate</a></div>
  
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
  <input type="search" value="" class="search-bar" id="search" placeholder="Search Gift ..." onchange="openPage()">
        <div id="navigation"></div>
        <script>
            function openPage(){
                var x = document.getElementById("search").value;

                if (x === "navigation"){
                    window.location.href="#navigation";
                }
                //cakes&chocolate
                if (x === "cake"){
                                            window.location.href="#cake";
                                        }
                                            if (x === "biscuit"){
                                                window.location.href="#pb26";
                                            }
                                            if (x === "strawberry"){
                                                window.location.href="#pb27";
                                            }
                                            if (x === "chocolate"){
                                                window.location.href="#pb28";
                                            }
                                            if (x === "delight"){
                                                window.location.href="#pb29";
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
        <li><a href="homeandliving.php">Home And Living</a></li>
        <li><a href="flowers.php">Flowers</a></li>
        <li><a href="electronics.php">Electronics</a></li>
        <li><a href="giftcollection.php">Gift Collection</a></li>


    </ul>
</footer>
</section>
</section>
 




    <!-------------------------------------------Cakes-&-Chocolate-------------------------------------->

      <!-----product--------->
   <section class="product">
    <!------heading-------->
    <div class="p-heading" id="cake">
    <h2>Cakes & Chocolate</h2>
    </div>
    <!-------product-box-container-------->
    <div class="prodct-box-container">
            
        
        <!-----box-1------->
    <div class="p-box" id="pb26">
        <!-----img------->
        <img src="index-images\product-52.webp" alt=""/>
        <!------details----->
        <p>
            Chocolate Biscuit Cake.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$160.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart26">Add To Cart</a>
        </div>
        
        
        <!-----box-2------->
        <div class="p-box" id="pb27">
            <!-----img------->
            <img src="index-images\product-54.webp" alt=""/>
            <!------details----->
            <p>
                Mixed Strawberry and Chcolate Cake.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$150.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart27">Add To Cart</a>
            </div>
        
            
        <!-----box-3------->
        <div class="p-box" id="pb28">
            <!-----img------->
            <img src="index-images\product-55.jpg" alt=""/>
            <!------details----->
            <p>
                    Ferrero Rocher Chcolate Balls.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$20.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart28">Add To Cart</a>
            </div>
        
            
            <!-----box-4------->
        <div class="p-box" id="pb29">
            <!-----img------->
            <img src="index-images\product-58.webp" alt=""/>
            <!------details----->
            <p>
               Delight Chocolate Gift Pack.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$4.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart29">Add To Cart</a>
            </div>
            
            <!----------------------scroll to top------------------------>
            <div class="scroll-top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>

        
  <!--------------------------------------------subscribe-------------------------------------------->
  <section class="subscribe-container" id="giftsubscribe">
        <!-----heading-------->
        <h3>Subscribe For New Gift Notification | Cakes</h3>
        <!------input------->
        <form action="cakes&chocolate.php" method="POST">
            <?php
            $userEmail = ""; 
                if(isset($_POST['subscribe'])){//if subscribe btn is clicked
                    $userEmail = $_POST['email']; //getting user email
                   if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){//validating user input email
                        $subject = "Cakes & Chocolate 🍫";
                        $message    = "Dear SHOPPER, Thank YOU for subscrbing to our gift shop. You will receive latest gift updates on Cakes and Chocolate! 
                        
                     Regards, ACC^.";
                        $sender  = "From: coldcode703@gmail.com"; //email from company/administrator 
                            if(mail($userEmail, $subject, $message, $sender)){//php function to send email
                                ?>
                            <!--show a success message if email is  sent successfully-->
                                <script>
                                    swal({
                                  title: "Subscribed!",
                                  text: "You will receive latest gift updates on cakes and chocolate!",
                                  icon: "success",
                                  button: "DONE",
                                  closeOnClickOutside: true,
                                });
                                </script>
                                <?php
                                $userEmail = "";//once mail is sent
                            }else{
                                    ?>
                                    <!--show an error message if somehow mail cannot be sent-->
                                    <script>
                                    swal("Please try again later.", "Failed somehow while sending your email!", "success", {
                                        className: "boxstyle",
                                        buttons: {
                                            cancel: true,
                                            closeOnClickOutside: true,
                                  });
                                    </script>
                                    <?php
                                    }
                    }else{
                        ?>
                        <!--show an error message if user email is  not correct-->
                        <script>
                            swal("Please try again.",
                                 "<?php echo $userEmail ?> is not a correct email!",
                                 "warning", {
                                dangerMode: true,
                                buttons: false,
                                closeOnClickOutside: true,
                            });
                        </script>
                        <?php
                    }
                }
            ?>
        <div class="subscribe-input">
        <div class= "field">
            <input type="email" name="email"class="subscribe-input" placeholder="abc@example.com" required>
            </div>       
        <!------btn------->
        <input type="submit" name="subscribe"value="Subscribe" class="subscribe-btn">
            </div>
    </section>
    </section>


     <!---------------------------------------our-brand------------------------------------------------>
     <section class="our-brand">
        <!----text------->
        <div class="brand-text">
            <h3>Our Brand</h3>
            <h4><?php echo date ('Y'); ?> | E-Gift Shopper </h4>
            <p>We Manage online gift purchases. This allows shoppers to search for and order gifts reliably there and then. Shipping cost is also payable. We help you order the gift you want at the best convenient time.
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
    <script src="cakes.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/scripts.js"></script>
    

</body>
</html>
