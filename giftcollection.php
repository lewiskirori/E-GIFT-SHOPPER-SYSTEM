<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=" logo-images\e-letter-gift-shop-creative-lettering-sign-logo-design-template_657888-125.jpg "> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <title>Gift Collection</title>

</head>
<body>
   <!-----------------main section---------------->
   <section class="main">

    <!-------logo----------->
    <div class="logo"><a href="giftcollection.php"><font>Gift </font>Collection​​🎁​</a></div>
  

  <!------navigation-bar------------->
  <ul>
    <li><a href="home.php">🏪Home</a></li>
    <li><a href="about.php">👥About</a></li>
    <li><a href="contact.php">☎️Contact Us</a></li>
    <!----Cart------------------------------------------------------------------------------------->
<li class="cart">
    <a href="cart.php">
        <i class='fas fa-gift' style='font-size:18px'>🛒Proceed to Cart ~ <span>0</span></i>
    </a>
</li>
  </ul>
    
 <!----------------------------------functional-search-box---------------------------------------->
 <input type="search" value="" class="search-bar" id="search" placeholder="Search Bar" onchange="openPage()">
        <div id="navigation"></div>
        <script>
            function openPage(){
                var x = document.getElementById("search").value;

                if (x === "navigation"){
                    window.location.href="#navigation";
                }
           //giftcollection
           if (x === "collection"){
                                                window.location.href="#collection";
                                            }
                                                if (x === "gold"){
                                                    window.location.href="#pb30";
                                                }
                                                if (x === "unique"){
                                                    window.location.href="#pb31";
                                                }
                                                if (x === "whiskey"){
                                                    window.location.href="#pb32";
                                                }
                                                if (x === "exclusive"){
                                                    window.location.href="#pb33";
                                                }
                                                if (x === "silver"){
                                                    window.location.href="#pb34";
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
        <li><a href="cakes&chocolate.php">Cakes & Chocolate</a></li>


    </ul>
</footer>
</section>
</section>
 




    <!-------------------------------------------------Gift-Collection----------------------------------->

<!-----product--------->
<section class="product">
    <!------heading-------->
    <div class="p-heading" id="collection">
    <h2>Gift Collection</h2>
    </div>
    
    <!-------product-box-container-------->
    <div class="prodct-box-container">
    
        <!-----box-1------->
    <div class="p-box" id="pb30">
    <!-----img------->
    <img src="index-images\product-59.jpg" alt=""/>
    <!------details----->
    <p>
        Jesou Female Golden Watch And Bracelet.
    </p>
    <!-----price-------->
    <a herf="#price" class="price">$70.30</a>
    <!------buy btn------>
    <a href="#" class="buy-btn cart30">Add To Cart</a>
    </div>
    
    
    <!-----box-2------->
    <div class="p-box" id="pb31">
        <!-----img------->
        <img src=" index-images\product-60.jpg" alt=""/>
        <!------details----->
        <p>
            Jesou Female Unique Package (Watch),(Bracelet) & (Necklace)
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$83.50</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart31">Add To Cart</a>
        </div>
    
        
    <!-----box-3------->
    <div class="p-box" id="pb32">
        <!-----img------->
        <img src="index-images\product-61.jpg" alt=""/>
        <!------details----->
        <p>
                Whiskey Tasting Alcohol Pack.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$250.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart32">Add To Cart</a>
        </div>
    
        
        <!-----box-4------->
    <div class="p-box" id="pb33">
        <!-----img------->
        <img src="index-images\product-63.png" alt=""/>
        <!------details----->
        <p>
            Gottlieber Exclusive Pack (Whiskey + Cigarettes).
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$300.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart33">Add To Cart</a>
        </div>
    
        
        <!-----box-5------->
    <div class="p-box" id="pb34">
        <!-----img------->
        <img src="index-images\product-65.jpg" alt=""/>
        <!------details----->
        <p>
            Packer Silver Gift Pack (Pen + Keyholder).
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$9.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart34">Add To Cart</a>
        </div>

        
    <!--------------------------------------------subscribe-------------------------------------------->
    <section class="subscribe-container" id="giftsubscribe">
        <!-----heading-------->
        <h3>Subscribe For New Gift Notification</h3>
        <!------input------->
        <form action="giftcollection.php" method="POST">
            <?php
            $userEmail = ""; 
                if(isset($_POST['subscribe'])){//if subscribe btn is clicked
                    $userEmail = $_POST['email']; //getting user email
                    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){//validating user input email
                        $subject = "Thanks for subscribing us - E-Gift Shopper";
                        $message    = "Thanks for subscrbing to our gift shop. You'll always receive latest gift updates from us!";
                        $sender  = "From: coldcode703@gmail.com"; //email from config xamppp
                            if(mail($userEmail, $subject, $message, $sender)){//php function to send email
                                ?>
                                <!--show a success message if email is  sent successfully-->
                                <div class="alert success">Cheers!Your Subscription was successful! </div>
                                <?php
                                $userEmail = "";//once mail is sent
                            }else{
                                    ?>
                                    <!--show an error message if somehow mail cannot be sent-->
                                    <div class="alert error">Failed somehow while sending your email! Plaese Try again later.</div>
                                    <?php
                                    }
                    }else{
                        ?>
                        <!--show an error message if user email is  not correct-->
                        <div class="alert error"><?php echo $userEmail ?> is not a correct email! Please try again.</div>
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


     <!--------------------------------------our-brand----------------------------------->
     <section class="our-brand">
        <!----text------->
        <div class="brand-text">
            <h3>Our Brand</h3>
            <h4>E-Gift shopper 2022 </h4>
            <p>We Manage online gift purchases. This allows shoppers to search for and book gifts in their comfort zone areas. Shipping cost is also payable. We help you order the gift you want at a convenient time.
            </p>
        </div>
        <!---img------>
        <div class="brand-img">
        <img src="brand\ourbrand-img.jpg">
        
        </div>
        </section>

    <!-----copyright------------------------->
    <a href="#copyright" class="copyright">©️Copyright 2022. E-Gift Shopper</a>
    
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="giftcollection.js"></script>
    

</body>
</html>