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
    <link rel="shortcut icon" href="logo-images/EGSS-LoGo.png">
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
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <title>Home | E-Gift Shopper</title>
           <style>
                  #snackbar {
                    visibility: hidden;
                    min-width: 250px;
                    background-color: rgba(0, 128, 0, 0.6);
                    color: #fff;
                    text-align: center;
                    border-radius: 2px;
                    padding: 16px;
                    position: fixed;
                    z-index: 1;
                    bottom: 30px;
                    font-size: 17px;
                    cursor: pointer;
                    left: 50%;
                    transform: translate(-50%, 0);
                  }
                
                  #snackbar.show {
                    visibility: visible;
                    animation: fadein 0.5s, fadeout 0.5s 2.5s;
                  }
                
                  @keyframes fadein {
                    from {
                      bottom: 0;
                      opacity: 0;
                    }
                    to {
                      bottom: 30px;
                      opacity: 1;
                    }
                  }
                
                  @keyframes fadeout {
                    from {
                      bottom: 30px;
                      opacity: 1;
                    }
                    to {
                      bottom: 0;
                      opacity: 0;
                    }
                  }
                
                  #snackbar i {
                    margin-right: 10px;
                  }
                </style>
</head>
<body>
    <div id="snackbar">
      <i class="fa fa-check-circle" aria-hidden="true">
      </i> YAY! Success!
    </div>
        <script>
          if (performance.navigation.type == 1) {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function () {
              x.className = x.className.replace("show", "");
            }, 5000);
            document.getElementById("snackbar").addEventListener("click", function() {
            this.className = this.className.replace("show", "");
          });
          }
        </script>

  <!-------logout------------------------->
    <a href="logout process.php"><div style="float:right"><button><i class="fa fa-power-off" aria-hidden="true"></i>LogOut</button></div></a>

    <h1>
    <?php  /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    date_default_timezone_set('Africa/Nairobi');
    
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "Good Morning";
    } else
    /* If the time is greater than or equal to 1200 hours, but less than 1600 hours, so good afternoon */
    if ($time >= "12" && $time < "16") {
        echo "Good Afternoon";
    } else
    /* Should the time be between or equal to 1600 and 2000 hours, show good evening */
    if ($time >= "16" && $time < "20") {
        echo "Good Evening";
    } else
    /* Finally, show good night if the time is greater than or equal to 2000 hours */
    if ($time >= "20") {
        echo "Shouldn't you be in bed? Good Night";
    }
    ?> <div><a><font> <span style="text-transform:uppercase;"><?php echo $_SESSION["username"]; ?></span> </font></a></div>
    </span></a><span>
    <span></h1>
    
   <!-----------------main section---------------->
   <section class="main">

    <!-------logo----------->
    <div class="logo"><a href="home.php"><font>HO</font>ME </a></div>
  
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
        <input type="search" value="" class="search-bar" id="search" placeholder="Search Gift, Category ..." onchange="openPage()">
        <div id="navigation"></div>
        <script>
            function openPage(){
                var x = document.getElementById("search").value;

                if (x === "navigation"){
                    window.location.href="#navigation";
                }
                //trendy
                    if (x === "trendy"){
                        window.location.href="#trendy";
                    }
                        if (x === "black"){
                            window.location.href="#pb1";
                        }
                        if (x === "audemars"){
                            window.location.href="#pb2";
                        }
                        if (x === "suit"){
                            window.location.href="#pb3";
                        }
                        if (x === "boquet"){
                            window.location.href="#pb4";
                        }
                        if (x === "furniture"){
                            window.location.href="#pb5";
                        }
                        if (x === "mens collection"){
                            window.location.href="#pb6";
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
                    //flowers
                        if (x === "flowers"){
                                        window.location.href="#flowers";
                                    }
                                        if (x === "rose"){
                                            window.location.href="#pb22";
                                        }
                                        if (x === "wine"){
                                            window.location.href="#pb23";
                                        }
                                        if (x === "wrapped"){
                                            window.location.href="#pb24";
                                        }
                                        if (x === "combo"){
                                            window.location.href="#pb25";
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
        <li><a href="giftcollection.php">Gift Collection</a></li>


    </ul>
</footer>
</section>
</section>
 
<!-----product--------->
<section class="product">
<!------heading-------->
<div class="p-heading" id="trendy">
<h2>Trendy</h2>
</div>

<!-------product-box-container-------->
<div class="prodct-box-container">
<!-----box-1------->
<div class="p-box" id="pb1">
<!-----img------->
<img src="index-images\product-1.jpg" alt=""/>
<!------details----->
<p>
    Black Chanel Leather Bag.
</p>
<!-----price-------->
<a herf="#price" class="price">$47.00</a>
<!------buy btn------>
<a href="#" class="buy-btn cart1">Add To Cart</a>
</div>


<!-----box-2------->
<div class="p-box" id="pb2">
    <!-----img------->
    <img src="index-images\product-16.jpg " alt=""/>
    <!------details----->
    <p>
        Audemars Piguet Classic Watch.
    </p>
    <!-----price-------->
    <a herf="#price" class="price">$60.00</a>
    <!------buy btn------>
    <a href="#" class="buy-btn cart2">Add To Cart</a>
    </div>

    
<!-----box-3------->
<div class="p-box" id="pb3">
    <!-----img------->
    <img src="index-images\product-15.jpg" alt=""/>
    <!------details----->
    <p>
        Modern Black Navy Strip Blue Full Suit.
    </p>
    <!-----price-------->
    <a herf="#price" class="price">$72.00</a>
    <!------buy btn------>
    <a href="#" class="buy-btn cart3">Add To Cart</a>
    </div>

    
    <!-----box-4------->
<div class="p-box" id="pb4">
    <!-----img------->
    <img src="index-images\product-34.jpg" alt=""/>
    <!------details----->
    <p>
        Ferrero Rocher Boquet Gift.
    </p>
    <!-----price-------->
    <a herf="#price" class="price">$112.00</a>
    <!------buy btn------>
    <a href="#" class="buy-btn cart4">Add To Cart</a>
    </div>

    
    <!-----box-5------->
<div class="p-box" id="pb5">
    <!-----img------->
    <img src="index-images\product-31.jpg" alt=""/>
    <!------details----->
    <p>
        Home & Living Fabric Gift Furniture.
    </p>
    <!-----price-------->
    <a herf="#price" class="price">$930.00</a>
    <!------buy btn------>
    <a href="#" class="buy-btn cart5">Add To Cart</a>
    </div>

    
    <!-----box-6------->
<div class="p-box" id="pb6">
    <!-----img------->
    <img src="index-images\product-62.jpg" alt=""/>
    <!------details----->
    <p>
        Jesou Mens Collection Gift Pack.
    </p>
    <!-----price-------->
    <a herf="#price" class="price">$370.00</a>
    <!------buy btn------>
    <a href="#" class="buy-btn cart6">Add To Cart</a>
    </div>





</div>

</section>



    <!---------------------------------------------Fashion-&-Designers---------------------------------->

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

        <!-------------------------------------Home-And-Living----------------------------------------->
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
    
        <!-------------------------------------------Electronics---------------------------------------->
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

<!------------------------------------------------------Flowers----------------------------------------->
   <!-----product--------->
   <section class="product">
    <!------heading-------->
    <div class="p-heading" id="flowers">
    <h2>Flowers</h2>
    </div>
    <!-------product-box-container-------->
    <div class="prodct-box-container">
            
        
        <!-----box-1------->
    <div class="p-box" id="pb22">
        <!-----img------->
        <img src="index-images\product-35.webp" alt=""/>
        <!------details----->
        <p>
            Rose Fontana Boquet + (Wine).
        </p>
        <!-----price-------->
        <a herf="#price" class="price">$120.00</a>
        <!------buy btn------>
        <a href="#" class="buy-btn cart22">Add To Cart</a>
        </div>
        
        
        <!-----box-2------->
        <div class="p-box" id="pb23">
            <!-----img------->
            <img src="index-images\product-36.jpg" alt=""/>
            <!------details----->
            <p>
                Red And White ROSE + (Wine).
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$150.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart23">Add To Cart</a>
            </div>
        
            
        <!-----box-3------->
        <div class="p-box" id="pb24">
            <!-----img------->
            <img src="index-images\product-39.jpg" alt=""/>
            <!------details----->
            <p>
                    Wrapped Single Piece Rose Flowers.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$25.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart24">Add To Cart</a>
            </div>
        
            
            <!-----box-4------->
        <div class="p-box" id="pb25">
            <!-----img------->
            <img src="index-images\product-40.jpg" alt=""/>
            <!------details----->
            <p>
               Love Rose Combo Boquet.
            </p>
            <!-----price-------->
            <a herf="#price" class="price">$170.00</a>
            <!------buy btn------>
            <a href="#" class="buy-btn cart25">Add To Cart</a>
            </div>
        
        <!----------------------------------------Cakes-&-Chocolate-------------------------------------->

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
        
            <!---------------------------------------Gift-Collection----------------------------------->

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
        
        <!--------------------scroll to top------------------------>
            <div class="scroll-top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>

     <!--------------------------------------------subscribe-------------------------------------------->
     <section class="subscribe-container" id="giftsubscribe">
        <!-----heading-------->
        <h3>Subscribe For New Gift Notification | Home</h3>
        <!------input------->
        <form action="home.php" method="POST">
            <?php
            $userEmail = ""; 
                if(isset($_POST['subscribe'])){//if subscribe btn is clicked
                    $userEmail = $_POST['email']; //getting user email
                    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){//validating user input email
                        $subject = "E-Gift Shopper | Home 🎁";
                        $message    = "Dear SHOPPER, Thank YOU for subscrbing to our gift shop. You will receive latest gift updates on your shopping Home Page! 
                        
                     Regards, ACC^.";
                        $sender  = "From: coldcode703@gmail.com"; //email from company/administrator 
                            if(mail($userEmail, $subject, $message, $sender)){//php function to send email
                                ?>
                         <!--show a success message if email is  sent successfully-->
                                <script>
                                    swal({
                                  title: "Subscribed!",
                                  text: "You will receive latest gift updates on your shopper home page!",
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
        <input type="submit" name="subscribe"value="Subscribe" required="required" class="subscribe-btn">
            </div>
    </section>


     <!------------------------------------------------our-brand------------------------------------------------>
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
    <a href="#copyright" class="copyright">&copy 2021 - <?php echo date ('Y'); ?> E-Gift Shopper | All Rights Reserved.</a>
    
    <script nomodule src="://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="main.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/scripts.js"></script>
    

</body>
</html>
