let carts = document.querySelectorAll('.buy-btn');

let products = [
///Trendy
    //box-1
    {
        Name: "Black Chanel Leather Bag.",
        price: 47,
        inCart: 0
    },
    //box-2
    {
        Name: "Audemars Piguet Classic Watch.",
        price: 60,
        inCart: 0
    },
    //box-3
    {
        Name: "Modern Black Navy Strip Blue Full Suit.",
        price: 72,
        inCart: 0
    },
    //box-4
    {
        Name: "Ferrero Rocher Boquet Gift.",
        price: 112,
        inCart: 0
    },
    //box-5
    {
        Name: "Home & Living Fabric Gift Furniture.",
        price: 930,
        inCart: 0
    },
    //box-6
    {
        Name: "Jesou Mens Collection Gift Pack.",
        price: 370,
        inCart: 0
    },

///Fashion-&-Designers
    //box-1
    {
        Name: "Blue Designer Womens Leather Bag.",
        price: 49,
        inCart: 0
    },
    //box-2
    {
        Name: "BENYAR Classic Mens Watch.",
        price: 30,
        inCart: 0
    },
    //box-3
    {
        Name: "Designer White Dress Ladies.",
        price: 120,
        inCart: 0
    },
    //box-4
    {
        Name: 'Modern Mens Flower Shirt.',
        price: 50,
        inCart: 0
    },
    //box-5
    {
        Name: "Designer Gift Humper Ladies Shoe Collection.",
        price: 52,
        inCart: 0
    },
    //box-6
    {
        Name: "Street Modern Colorless Glasses.",
        price: 35,
        inCart: 0
    },
///Home-And-Living
    //box-1
    {
        Name: "Modernized Home Decor(Wine Glasses).",
        price: 490,
        inCart: 0
    },
    //box-2
    {
        Name: "TV Decor Wall Frame.",
        price: 86,
        inCart: 0
    },
    //box-3
    {
        Name: "Front Desk Luxurious Home Decor.",
        price: 1500,
        inCart: 0
    },
    //box-4
    {
        Name: "Home Luxurious Cushions.",
        price: 75,
        inCart: 0
    },
///Electronics
    //box-1
    {
        Name: "Smart Modern Watch.",
        price: 600,
        inCart: 0
    },
    //box-2
    {
        Name: "Magic Green Bass-boosted Earbuds.",
        price: 56,
        inCart: 0
    },
    //box-3
    {
        Name: "Blue Extra Bass-Boosted Headphones.",
        price: 110,
        inCart: 0
    },
    //box-4
    {
        Name: "Smart-LED Screen.",
        price: 500,
        inCart: 0
    },
    //box-5
    {
        Name: "Iphone 13-pro max.",
        price: 1700,
        inCart: 0
    },
///Flowers
    //box-1
    {
        Name: "Rose Fontana Boquet + (Wine).",
        price: 120,
        inCart: 0
    },
    //box-2
    {
        Name: "Red And White ROSE + (Wine).",
        price: 150,
        inCart: 0
    },
    //box-3
    {
        Name: "Wrapped Single Piece Rose Flowers.",
        price: 25,
        inCart: 0
    },
    //box-4
    {
        Name: "Love Rose Combo Boquet.",
        price: 170,
        inCart: 0
    },
///Cakes-&-Chocolate
    //box-1
    {
        Name: "Chocolate Biscuit Cake.",
        price: 160,
        inCart: 0
    },
    //box-2
    {
        Name: "Mixed Strawberry and Chcolate Cake.",
        price: 150,
        inCart: 0
    },
    //box-3
    {
        Name: "Ferrero Rocher Chcolate Balls.",
        price: 20,
        inCart: 0
    },
    //box-4
    {
        Name: "Delight Chocolate Gift Pack.",
        price: 4,
        inCart: 0
    },
///Gift-Collection
    //box-1
    {
        Name: "Jesou Female Golden Watch And Bracelet.",
        price: 70,
        inCart: 0
    },
    //box-2
    {
        Name: "Jesou Female Unique Package (Watch),(Bracelet) & (Necklace",
        price: 83,
        inCart: 0
    },
    //box-3
    {
        Name: "Whiskey Tasting Alcohol Pack.",
        price: 250,
        inCart: 0
    },
    //box-4
    {
        Name: "Gottlieber Exclusive Pack (Whiskey + Cigarettes).",
        price: 300,
        inCart: 0
    },
    //box-5
    {
        Name: "Packer Silver Gift Pack (Pen + Keyholder).",
        price: 9,
        inCart: 0
    }
]

for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(product){
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    
    if(productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }
    setItems(product);
}
   function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems); 

    if(cartItems != null){
        if(cartItems[product.Name] == undefined){
            cartItems = {
                ...cartItems,
                [product.Name]: product
            }
        }
        cartItems[product.Name].inCart += 1;
    } else {
    product.inCart = 1;
    cartItems = {
        [product.Name]: product
    }
}
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
   }

   function totalCost(product){
    let cartCost = localStorage.getItem('totalCost' );

    console.log("My cartCost is", cartCost);
    console.log(typeof cartCost );
 
    localStorage.setItem("totalCost" , product.price);
  
    if(cartCost != null) {
        cartCost = parseInt(cartCost );
        localStorage.setItem("totalCost" , cartCost + product.price );
    } else {
        localStorage.setItem("totalCost" , product.price );
    }

   }

   function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector
    (".products");
    let cartCost = localStorage.getItem('totalCost' );

    console.log(cartItems);
    if( cartItems && productContainer ) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <ion-icon name="close-circle"></ion-icon>

                <img src="./images/${item.Name}.jpeg">
                <img src="index-images\product-1.jpg" alt=""/>

                <span>${item.Name}</span>
            </div>
            <div class="price">${item.price},00</div>
            <div class="quantity">
            <ion-icon name="arrow-dropdown-circle"></ion-icon>
            <span>${item.inCart}</span>
            <ion-icon name="arrow-dropup-circle"></ion-icon>
            </div>    
            <div class="total">
                $${item.inCart * item.price}.00
            </div>
            `;
        });
        
        productContainer.innerHTML += `
        <div class="basketTotalContainer">
        <h4 class="basketTotalTitle">
            Basket Total
        </h4>
        <h4 class="basketTotal">
            $${cartCost}.00
        </h4>
        `;
    }
   }
    onLoadCartNumbers();
    displayCart();