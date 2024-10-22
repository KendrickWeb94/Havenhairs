
// Initialize cartCount and cartItems from localStorage if available
let cartCount = parseInt(localStorage.getItem('cartCount')) || 0;
let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

// Cart
let cartIcon = document.querySelector('#cart-icon');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close-cart');

cartIcon.onclick = () => {
    cart.classList.add("active");
};

closeCart.onclick = () => {
    cart.classList.remove("active");
};

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}


function ready() {
    var removeCartButtons = document.getElementsByClassName('cart-remove');
    for (var i = 0; i < removeCartButtons.length; i++) {
        var button = removeCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity');
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }

    var addCart = document.getElementsByClassName('add-to-cart');
    for (var i = 0; i < addCart.length; i++) {
        var button = addCart[i];
        button.addEventListener("click", addCartClicked);
    }

    document.getElementsByClassName('btn-buy')[0].addEventListener("click", buyButtonClicked);

    // Load cart items when the page loads
    loadCartItems();
    updatetotal();
}

function buyButtonClicked() {
    alert('Your Order is Placed');
    var cartContent = document.getElementsByClassName('cart-content')[0];
    while (cartContent.hasChildNodes()) {
        cartContent.removeChild(cartContent.firstChild);
    }
    updatetotal();
    updateCartCount();
    saveCartData();
}

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
    cartCount--; // Decrease cart count
    document.getElementById("cart-count").textContent = cartCount;
    updateCartItems();
}

function addCartClicked(event) {
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
    addProductToCart(title, price, productImg);
    updatetotal();
    updateCartCount();
    saveCartData();
}

function addProductToCart(title, price, productImg) {
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart-box");
    var cartItems = document.getElementsByClassName("cart-content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
    for (var i = 0; i < cartItemsNames.length; i++) {
        if (cartItemsNames[i].innerText === title) {
            alert("You have already added this item to Cart");
            return;
        }
    }

    var cartBoxContent = `
    <img src="${productImg}" alt="" class="cart-img">
    <div class="detail-box">
        <div class="cart-product-title">${title}</div>
        <div class="cart-price">${price}</div>
        <input type="number" value="1" class="cart-quantity">
    </div>
    <i class="bx bx-trash-alt cart-remove"></i>
    `;
    
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.appendChild(cartShopBox);
    cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
    cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged);

    updateCartItems();
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updatetotal();
    updateCartItems();
}

function updatetotal() {
    var cartContent = document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    var total = 0;

    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cart-price')[0];
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
        
        // Replace 'GH₵' and parse as a float
        var price = parseFloat(priceElement.innerText.replace("GH₵", "").trim());
        var quantity = quantityElement.value;

        if (!isNaN(price) && !isNaN(quantity)) {
            total += price * quantity;
        }
    }

    total = Math.round(total * 100) / 100; // Round to two decimal places
    document.getElementsByClassName('total-price')[0].innerText = "GH₵" + total;
}

function updateCartCount() {
    cartCount++;
    document.getElementById("cart-count").textContent = cartCount;
    saveCartData();
}

function saveCartData() {
    localStorage.setItem('cartCount', cartCount);
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

function updateCartItems() {
    var cartContent = document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    cartItems = [];

    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var title = cartBox.getElementsByClassName('cart-product-title')[0].innerText;
        var price = cartBox.getElementsByClassName('cart-price')[0].innerText;
        var quantity = cartBox.getElementsByClassName('cart-quantity')[0].value;
        var productImg = cartBox.getElementsByClassName('cart-img')[0].src;

        cartItems.push({
            title: title,
            price: price,
            quantity: quantity,
            productImg: productImg
        });
    }

    saveCartData();
}

function loadCartItems() {
    var cartContent = document.getElementsByClassName('cart-content')[0];
    cartContent.innerHTML = '';

    for (var i = 0; i < cartItems.length; i++) {
        var cartItem = cartItems[i];
        var cartShopBox = document.createElement("div");
        cartShopBox.classList.add("cart-box");
        var cartBoxContent = `
            <img src="${cartItem.productImg}" alt="" class="cart-img">
            <div class="detail-box">
                <div class="cart-product-title">${cartItem.title}</div>
                <div class="cart-price">${cartItem.price}</div>
                <input type="number" value="${cartItem.quantity}" class="cart-quantity">
            </div>
            <i class="bx bx-trash-alt cart-remove"></i>
        `;
        cartShopBox.innerHTML = cartBoxContent;
        cartContent.appendChild(cartShopBox);

        cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
        cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged);
    }
}
