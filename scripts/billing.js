let creditBtn = document.querySelector('.credit');
let paypalBtn = document.querySelector('.paypal');
let idealBtn = document.querySelector('.ideal');
let creditDetails = document.querySelector('.credit-details');
let paypalDetails = document.querySelector('.paypal-details');
let idealDetails = document.querySelector('.ideal-details');
let subBtn = document.querySelector('.billing-details__button');

creditBtn.addEventListener('click', () => {
    idealBtn.style.borderColor = 'var(--clr-grey)';
    paypalBtn.style.borderColor = 'var(--clr-grey)';
    creditBtn.style.borderColor = 'var(--clr-main)';
    paypalDetails.style.display = 'none';
    idealDetails.style.display = 'none';
    subBtn.style.display = 'block';
    creditDetails.style.display = 'block';
})

paypalBtn.addEventListener('click', () => {
    idealBtn.style.borderColor = 'var(--clr-grey)';
    creditBtn.style.borderColor = 'var(--clr-grey)';
    paypalBtn.style.borderColor = 'var(--clr-main)';
    creditDetails.style.display = 'none';
    idealDetails.style.display = 'none';
    subBtn.style.display = 'block';
    paypalDetails.style.display = 'block';
})

idealBtn.addEventListener('click', () => {
    paypalBtn.style.borderColor = 'var(--clr-grey)';
    creditBtn.style.borderColor = 'var(--clr-grey)';
    idealBtn.style.borderColor = 'var(--clr-main)';
    creditDetails.style.display = 'none';
    paypalDetails.style.display = 'none';
    subBtn.style.display = 'block';
    idealDetails.style.display = 'block';
})