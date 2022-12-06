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
    <title>Electronics</title>

</head>
<body>
   <!-----------------main section---------------->
   <section class="main">

    <!-------logo----------->
    <div class="logo"><a href="electronics.php"><font>Elec</font>tronics💻</a></div>
  

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
                //electronics
                if (x === "electronics"){
                                    window.location.href="#electronics";
                                }
                                    if (x === "smart watch"){
                                        window.location.href="#pb17";
                                    }
                                    if (x === "earbud"){
                                        window.location.href="#pb18";
                                    }
                                    if (x === "headphone"){
                                        window.location.href="#pb19";
                                    }
                                    if (x === "smart screen"){
                                        window.location.href="#pb20";
                                    }
                                    if (x === "iphone"){
                                        window.location.href="#pb21";
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
        <li><a href="cakes&chocolate.php">Cakes & Chocolate</a></li>
        <li><a href="giftcollection.php">Gift Collection</a></li>


    </ul>
</footer>
</section>
</section>
 




    <!-------Electronics---------------------------------------->
        <!-----product--------->
<section class="product">
    <!------heading-------->
    <div class="p-heading" id="electronics">
    <h2>Electronics</h2>
    </div>
    <!-------product-box-container-------->
    <div class="prodct-box-container">
            
        
        <!-----box-1------->
    <div class="p-box" id="pb17">
        <!-----img------->
        <img src="index-images\product-42.jpg" alt=""/>
        <!------details----->
        <p>
            Smart Modern Watch.
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$600.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart17">Add To Cart</a>
        </div>
        
        
        <!-----box-2------->
        <div class="p-box" id="pb18">
            <!-----img------->
            <img src="index-images\product-44.jpg " alt=""/>
            <!------details----->
            <p>
                Magic Green Bass-boosted Earbuds.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$56.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart18">Add To Cart</a>
            </div>
        
            
        <!-----box-3------->
        <div class="p-box" id="pb19">
            <!-----img------->
            <img src="index-images\product-41.jpg" alt=""/>
            <!------details----->
            <p>
                    Blue Extra Bass-Boosted Headphones.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$110.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart19">Add To Cart</a>
            </div>
        
            
            <!-----box-4------->
        <div class="p-box" id="pb20">
            <!-----img------->
            <img src="index-images\product-46.jpg" alt=""/>
            <!------details----->
            <p>
               Smart-LED Screen.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$500.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart20">Add To Cart</a>
            </div>
        
            
            <!-----box-5------->
        <div class="p-box" id="pb21">
            <!-----img------->
            <img src="index-images\product-49.jpg" alt=""/>
            <!------details----->
            <p>
                Iphone 13-pro max.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$1700.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart21">Add To Cart</a>
            </div>

        
   <!--------------------------------------------subscribe-------------------------------------------->
   <section class="subscribe-container" id="giftsubscribe">
        <!-----heading-------->
        <h3>Subscribe For New Gift Notification</h3>
        <!------input------->
        <form action="electronics.php" method="POST">
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


     <!-------------------------------------------our-brand----------------------------------------->
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
    <script src="electronics.js"></script>
    

</body>
</html>