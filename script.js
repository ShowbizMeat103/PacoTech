let listProductHTML = document.querySelector('.container-items');
let listCartHTML = document.querySelector('.listCart');
let iconCart = document.querySelector('.icon-cart');
let iconCartSpan = document.querySelector('.icon-cart span');
let body = document.querySelector('body');
let closeCart = document.querySelector('.close');
let cart = [];
let products = [];

// Abrir/cerrar carrito
iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
});
closeCart.addEventListener('click', () => {
    body.classList.remove('showCart');
});

// Obtener productos del DOM estático
const loadProductsFromDOM = () => {
    const productElements = document.querySelectorAll('.container-items .item');
    productElements.forEach((element, index) => {
        const name = element.querySelector('h2').innerText;
        const price = parseFloat(element.querySelector('.price').innerText.replace('$', ''));
        const image = element.querySelector('img').getAttribute('src');
        const id = index + 1;

        // Agregamos ID como dataset al HTML
        element.setAttribute('data-id', id);

        products.push({
            id,
            name,
            price,
            image
        });
    });
};

// Delegación de evento para agregar al carrito
listProductHTML.addEventListener('click', (event) => {
    if (event.target.classList.contains('addToCart')) {
        const item = event.target.closest('.item');
        const id_product = item.dataset.id;
        addToCart(id_product);
    }
});

const addToCart = (product_id) => {
    const positionThisProductInCart = cart.findIndex(value => value.product_id == product_id);
    if (cart.length <= 0) {
        cart = [{ product_id, quantity: 1 }];
    } else if (positionThisProductInCart < 0) {
        cart.push({ product_id, quantity: 1 });
    } else {
        cart[positionThisProductInCart].quantity += 1;
    }
    addCartToHTML();
    addCartToMemory();
};

const addCartToMemory = () => {
    localStorage.setItem('cart', JSON.stringify(cart));
};

const addCartToHTML = () => {
    listCartHTML.innerHTML = '';
    let totalQuantity = 0;
    cart.forEach(item => {
        const product = products.find(prod => prod.id == item.product_id);
        totalQuantity += item.quantity;

        const newItem = document.createElement('div');
        newItem.classList.add('item');
        newItem.dataset.id = item.product_id;

        newItem.innerHTML = `
            <div class="image">
                <img src="${product.image}" alt="${product.name}">
            </div>
            <div class="name">${product.name}</div>
            <div class="totalPrice">$${product.price * item.quantity}</div>
            <div class="quantity">
                <span class="minus"><</span>
                <span>${item.quantity}</span>
                <span class="plus">></span>
            </div>
        `;

        listCartHTML.appendChild(newItem);
    });

    iconCartSpan.innerText = totalQuantity;
};

listCartHTML.addEventListener('click', (event) => {
    const target = event.target;
    if (target.classList.contains('minus') || target.classList.contains('plus')) {
        const product_id = target.closest('.item').dataset.id;
        const type = target.classList.contains('plus') ? 'plus' : 'minus';
        changeQuantityCart(product_id, type);
    }
});

const changeQuantityCart = (product_id, type) => {
    const position = cart.findIndex(item => item.product_id == product_id);
    if (position >= 0) {
        const current = cart[position];
        if (type === 'plus') {
            current.quantity += 1;
        } else {
            current.quantity -= 1;
            if (current.quantity <= 0) {
                cart.splice(position, 1);
            }
        }
    }
    addCartToHTML();
    addCartToMemory();
};

// Inicializar app sin fetch
const initApp = () => {
    loadProductsFromDOM();

    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
    }

    addCartToHTML();
};

initApp();
