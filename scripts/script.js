let hamburger = document.querySelector('.nav__hamburger');
let menu = document.querySelector('.nav__inner');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('nav__inner--open');
});

let loginBtn = document.getElementById('login-btn');
let loginModal = document.getElementById('login-modal');
let registerBtn = document.getElementById('register-btn');
let registerModal = document.getElementById('register-modal');
let closeModal = document.querySelectorAll('.close-modal');
loginBtn.addEventListener('click', ()=> {
    loginModal.style.display = 'block';
    document.body.style.overflow = 'hidden';
});
registerBtn.addEventListener('click', ()=> {
    registerModal.style.display = 'block';
    document.body.style.overflow = 'hidden';
});
for (let i = 0; i < closeModal.length; i++) {
    closeModal[i].addEventListener('click', ()=> {
        loginModal.style.display = 'none';
        registerModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }) 
}
