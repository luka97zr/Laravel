const categoryBtn = document.querySelector('.category__btn');
const categoryMenu = document.querySelector('.category__menu');
const registerMsg = document.querySelector('.js-register-msg');
const subscribeBtn = document.getElementById('subscribe-header');
const subscribeSection = document.getElementById('subscribe');

categoryBtn.addEventListener('click',()=>{
    categoryMenu.classList.toggle('active')
})

if(registerMsg) setTimeout(() => {
    registerMsg.remove()
}, 2500);

// subscribeBtn.addEventListener('click',(e)=>{
//     e.preventDefault();
//     subscribeSection.scrollIntoView({behavior:'smooth'})
// })