let carts = document.querySelectorAll('.btn-addToCart');
let productsname = document.querySelectorAll('.product-name');
let productsPrice = document.querySelectorAll('.product-price');
let productsImage = document.querySelectorAll('.productImage');


let products = []

for (let i = 0; i < productsname.length; i++) {
    products.push(
        {
            name: productsname[i].textContent,
            price: parseInt(productsPrice[i].textContent),
            tag: productsImage[i].getElementsByTagName('img').item('src').src,
            inCart: 0
        }
    )
}

console.log(products);

for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('#savat span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('#savat span').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems != null) {
        if (cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }

        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
}

console.log(products.tag);

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('#savat span').textContent = productNumbers;
    }
}

function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');

    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem('totalCost', cartCost + product.price);
    } else {
        localStorage.setItem('totalCost', product.price);
    }
}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    let cartCost = localStorage.getItem('totalCost')
    cartItems = JSON.parse(cartItems);
    let productsContainer = document.querySelector(".products2");


    if (cartItems && productsContainer) {
        productsContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productsContainer.innerHTML += `
                <div class="product">
                    <img src=${item.tag}>
                    <span>${item.name}</span>
                </div>
                <div class="price2">${item.price}</div>
                <div class="quantity2">
                    <span>${item.inCart}</span>
                </div>
                <div class="total2">${item.inCart * item.price}</div>
            `;
        });

        productsContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">
                    Umumiy narxi
                </h4>
                <h4 class="basketTotal">
                    ${cartCost}
                </h4>
            </div>`;
    }
}


onLoadCartNumbers();
displayCart();