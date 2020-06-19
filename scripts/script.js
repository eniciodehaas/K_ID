let hamburger = document.querySelector('.nav__hamburger');
let menu = document.querySelector('.nav__inner');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('nav__inner--open');
});

let loginBtn = document.getElementById('login-btn');
let loginModal = document.getElementById('login-modal');
let registerBtn = document.getElementById('register-btn');
let registerModal = document.getElementById('register-modal');
let cartBtn = document.getElementById('cart-btn');
let cartModal = document.getElementById('shopping-cart-modal');
let closeModal = document.querySelectorAll('.close-modal');
loginBtn.addEventListener('click', ()=> {
    loginModal.style.display = 'block';
    document.body.style.overflow = 'hidden';
});
registerBtn.addEventListener('click', ()=> {
    registerModal.style.display = 'block';
    document.body.style.overflow = 'hidden';
});
cartBtn.addEventListener('click', ()=> {
    cartModal.style.display = 'block';
    document.body.style.overflow = 'hidden';
});
for (let i = 0; i < closeModal.length; i++) {
    closeModal[i].addEventListener('click', ()=> {
        loginModal.style.display = 'none';
        registerModal.style.display = 'none';
        cartModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }) 
}
document.body.addEventListener('click', (e) => {
    if (!e) e = window.event;
    var targ = e.target || e.srcElement;
    if (targ.className == 'register-modal__sign-in') {
        registerModal.style.display = 'none';
        loginModal.style.display = 'block';
    }
})

if (document.getElementById('add-to-cart-btn')) {
    let addToCartBtn = document.getElementById('add-to-cart-btn');
    addToCartBtn.addEventListener('click', ()=> {
        window.location = 'home.php?cart=true';
    });
}

if (document.querySelector('.forgot-pass__form-button')) {
    let forgotBtn = document.querySelector('.forgot-pass__form-button');
    let forgotInput = document.querySelector('.forgot-pass__form-input');
    forgotBtn.addEventListener('click', () => {
        forgotInput.style.borderColor = 'var(--clr-invalid-red)';
    })
}

let footerBtn = document.querySelector('.footer__form-button');
let footerInput = document.querySelector('.footer__form-input');
footerBtn.addEventListener('click', () => {
        footerInput.style.borderColor = 'var(--clr-invalid-red)';
})