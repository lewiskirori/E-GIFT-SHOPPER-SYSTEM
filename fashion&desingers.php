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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <title>Fashion & Designers</title>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>

</head>
<body>
   <!-----------------main section---------------->
   <section class="main">

    <!-------logo----------->
    <div class="logo"><a href="fashion&desingers.php"><font>Fashion & </font>Designers</a></div>
  
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
                //fashion&designers
                    if (x === "fashion"){
                            window.location.href="#fashion";
                        }
                            if (x === "blue leather bag"){
                                window.location.href="#pb7";
                            }
                            if (x === "benyar"){
                                window.location.href="#pb8";
                            }
                            if (x === "white dress"){
                                window.location.href="#pb9";
                            }
                            if (x === "flower shirt"){
                                window.location.href="#pb10";
                            }
                            if (x === "ladies humper"){
                                window.location.href="#pb11";
                            }
                            if (x === "colorless glasses"){
                                window.location.href="#pb12";
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
        <li><a href="homeandliving.php">Home And Living</a></li>
        <li><a href="flowers.php">Flowers</a></li>
        <li><a href="electronics.php">Electronics</a></li>
        <li><a href="cakes&chocolate.php">Cakes & Chocolate</a></li>
        <li><a href="giftcollection.php">Gift Collection</a></li>


    </ul>
</footer>
</section>
</section>
 




    <!--------------------------------------------Fashion-&-Designers---------------------------------->

    <!-----product--------->
    <section class="product">
    <!------heading-------->
    <div class="p-heading" id="fashion">
    <h2>Fashion & Designers</h2>
    </div>
    
    <!-------product-box-container-------->
    <div class="prodct-box-container">
    <!-----box-1------->
    <div class="p-box" id="pb7">
    <!-----img------->
    <img src="index-images\product-5.jpg" alt=""/>
    <!------details----->
    <p>
        Blue Designer Womens Leather Bag.
    </p>
    <!-----price-------->
    <a herf="#price" class="price">$49.00</a>
    <!------buy btn------>
    <a href="#" class="buy-btn cart7">Add To Cart</a>
    </div>
    
    
    <!-----box-2------->
    <div class="p-box" id="pb8">
        <!-----img------->
        <img src=" index-images\product-17.jpg" alt=""/>
        <!------details----->
        <p>
             BENYAR Classic Mens Watch.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$30.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart8">Add To Cart</a>
        </div>
    
        
    <!-----box-3------->
    <div class="p-box" id="pb9">
        <!-----img------->
        <img src="index-images\product-7.jpg" alt=""/>
        <!------details----->
        <p>
                Designer White Dress Ladies.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$120.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart9">Add To Cart</a>
        </div>
    
        
        <!-----box-4------->
    <div class="p-box" id="pb10">
        <!-----img------->
        <img src="index-images\product-10.webp" alt=""/>
        <!------details----->
        <p>
            Modern Mens Flower Shirt.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$50.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart10">Add To Cart</a>
        </div>
    
        
        <!-----box-5------->
    <div class="p-box" id="pb11">
        <!-----img------->
        <img src="index-images\product-27.jpg" alt=""/>
        <!------details----->
        <p>
            Designer Gift Humper Ladies Shoe Collection.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$52.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart11">Add To Cart</a>
        </div>
    
        
        <!-----box-6------->
    <div class="p-box" id="pb12">
        <!-----img------->
        <img src="index-images\product-21.jpg" alt=""/>
        <!------details----->
        <p>
            Street Modern Colorless Glasses.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$35.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart12">Add To Cart</a>
        </div>
        
         <!----------------------scroll to top------------------------>
            <div class="scroll-top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>

    
  <!--------------------------------------------subscribe-------------------------------------------->
  <section class="subscribe-container" id="giftsubscribe">
        <!-----heading-------->
        <h3>Subscribe For New Gift Notification | Fashion</h3>
        <!------input------->
        <form action="fashion&desingers.php" method="POST">
            <?php
            $userEmail = ""; 
                if(isset($_POST['subscribe'])){//if subscribe btn is clicked
                    $userEmail = $_POST['email']; //getting user email
                    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){//validating user input email
                        $subject = "Fashion & Designers 🛍";
                        $message    = "Dear SHOPPER, Thank YOU for subscrbing to our gift shop. You will receive latest gift updates on Fashion and Designers!
                        
                     Regards, ACC^.";
                        $sender  = "From: coldcode703@gmail.com"; //email from company/administrator 
                            if(mail($userEmail, $subject, $message, $sender)){//php function to send email
                                ?>
                                         <!--show a success message if email is  sent successfully-->
                                <script>
                                    swal({
                                  title: "Subscribed!",
                                  text: "You will receive latest gift updates on fashion and designers!",
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


     <!----our-brand--------->
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
    <script src="fashion.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/scripts.js"></script>
    

</body>
</html>
