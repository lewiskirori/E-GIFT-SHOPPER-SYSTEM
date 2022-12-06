const root = document.getElementById("root");

const menu = ["Home", "About Us", "Enquiries", "Contact Us", "Gifts", "Cart", "Login"];
const Gifts = [
  {
    id: 1,
    name: "Gift 1",
    price: 1500,
    description: "Description 1",
    featured: true,
    image: "shopper's-system-images\chocolate-dipped-strawberries-and-mixed-roses-flower-bouquet-and-4th-street-wine-3.jpg",
  },
];
function nav(menu) {
  const navBar = document.createElement("nav");
  for (let item in menu) {
    const a = document.createElement("a");
    a.innerHTML = menu[item];
    navBar.appendChild(a);
  }

  return navBar;
}

function hero() {
  let hero = document.createElement("div");
  hero.className = "hero";
  let h1 = document.createElement("h1");
  h1.innerHTML = "Welcome👋";
  hero.appendChild(h1);
  return hero;
}

function featuredGifts(gifts) {
  let featured = document.createElement("div");
  featured.className = "featured";
  let h2 = document.createElement("h2");
  h2.innerHTML = "featured gifts";
  featured.appendChild(h2);
  const giftContainer = document.createElement("div");
  giftContainer.className = "grid";
  gifts.forEach(function (gift) {
    const giftContainer = document.createElement("div");
    giftContainer.className = "gift";
    const giftImage = document.createElement("img");
    giftImage.src = gift.image;
    giftContainer. appendChild(giftImage);
    const giftName = document.createElement("h3");
    giftName.innerHTML = gift.name; 
    giftContainer.appendChild(giftName);
    const giftPrice = document.createElement("p");
    giftPrice.innerHTML = gift.price;
    giftContainer.appendChild(giftPrice);
    const giftDescription = document.createElement("p");
    giftDescription.innerHTML = gift.description;
    giftContainer.appendChild(giftDescription);
    giftContainer.appendChild(giftContainer);
  });
  
  featured.appendChild(giftContainer);
  return featured;
}

function footer() {
  let footer = document.createElement("footer");
  footer.className = "footer";
  let p = document.createElement("p");
  p.innerHTML = "E-Gift Shopper &copy; 2022";
  footer.appendChild(p);
  return footer;
}

root.appendChild(nav(menu));
root.appendChild(hero());
root.appendChild(featuredGifts());
root.appendChild(footer());
