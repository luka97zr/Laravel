const categoryBtn = document.querySelector('.category__btn');
const categoryMenu = document.querySelector('.category__menu');
const registerMsg = document.querySelector('.js-register-msg');
const subscribeBtn = document.getElementById('subscribe-header');
const subscribeSection = document.getElementById('subscribe');
const postTitle = document.querySelector('.js-title');
const postSLug = document.querySelector('.js-slug');

if(categoryBtn) {
    categoryBtn.addEventListener('click',()=>{
        categoryMenu.classList.toggle('active')
    })
}

if(registerMsg) setTimeout(() => {
    registerMsg.remove()
}, 2500);


if (postTitle && postSLug) {
    postTitle.addEventListener('keyup',(e)=>{
        postSLug.value = e.target.value.toLowerCase().replaceAll(' ','-');
    })
}