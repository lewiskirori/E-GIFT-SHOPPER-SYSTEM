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
    <title>Fashion & Designers</title>

</head>
<body>
   <!-----------------main section---------------->
   <section class="main">

    <!-------logo----------->
    <div class="logo"><a href="fashion&desingers.php"><font>Fashion & </font>Designers🛍</a></div>
  

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

        
  <!--------------------------------------------subscribe-------------------------------------------->
  <section class="subscribe-container" id="giftsubscribe">
        <!-----heading-------->
        <h3>Subscribe For New Gift Notification</h3>
        <!------input------->
        <form action="fashion&desingers.php" method="POST">
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
                                    <div class="alert error">Failed somehow while sending your email! Please Try again later.</div>
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


     <!----our-brand--------->
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
    <script src="fashion.js"></script>
    

</body>
</html>