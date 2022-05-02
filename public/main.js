const categoryBtn = document.querySelector('.category__btn');
const categoryMenu = document.querySelector('.category__menu');

categoryBtn.addEventListener('click',()=>{
    categoryMenu.classList.toggle('active')
})