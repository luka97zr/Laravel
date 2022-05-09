const categoryBtn = document.querySelector('.category__btn');
const categoryMenu = document.querySelector('.category__menu');
const registerMsg = document.querySelector('.js-register-msg');

categoryBtn.addEventListener('click',()=>{
    categoryMenu.classList.toggle('active')
})

if(registerMsg) setTimeout(() => {
    registerMsg.remove()
}, 2500);