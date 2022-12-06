<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=" logo-images\gift-shop-logo-design-vector-34887709.jpg "> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="cart.css"/>
    <title>Cart</title>

</head>
<body>
   <!-----------------main section---------------->
   <section class="main">

    <!-------logo----------->
        <div class="logo"><a href="cart.php"><font>Shopping </font>Cart💲🛒</a></div></div>
  

  <!------navigation-bar------------->
  <ul>
    <li ><a href="home.php">🔙Go Back</a></li>
    <li id="home"><a href="index.php">🏪Home</a></li>
    <li><a href="contact.php">☎️Contact Us</a></li>
    <li class="cart"><a href="cart.php"><i class='fas fa-gift' style='font-size:18px'>🛒Your Cart ~ <span>0</span></i></a>
        
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
                //cartpage
                    if (x === "home"){
                            window.location.href="#home";
                        }
                            if (x === "gift"){
                                window.location.href="#gift";
                            }
                            if (x === "total"){
                                window.location.href="#total";
                            }
                            if (x === "price"){
                                window.location.href="#price";
                            }

            }
        </script>
        

    <div class="products-container">
        <div class="product-header">
            <h4 class="product-title" id="gift">GIFT </h4>
            <h5 class="price" id="price">PRICE</h5>
            <h5 class="quantity">QUANTITY</h5>
            <h5 class="total" id="total">TOTAL</h5>
        </div>
        <div class="products">
            
        </div>
    </div>
<script src="main.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</section>
</body>
</html>