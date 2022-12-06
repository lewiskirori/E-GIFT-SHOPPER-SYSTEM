let carts = document.querySelectorAll('.buy-btn');

let products = [
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
                $${item.inCart * item.price},00
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