const categoryBtn = document.querySelector('.category__btn');
const categoryMenu = document.querySelector('.category__menu');
const registerMsg = document.querySelector('.js-register-msg');
const subscribeBtn = document.getElementById('subscribe-header');
const subscribeSection = document.getElementById('subscribe');
const postTitle = document.querySelector('.js-title');
const postSLug = document.querySelector('.js-slug');
const register = document.getElementById('register');

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

const createPost = async function(e) {
    try {
        const dataArr = [...new FormData(e.currentTarget)];
        const data = Object.fromEntries(dataArr);
       const resp = await fetch('/admin/posts',{
            method : 'POST',
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": e.currentTarget.querySelector('input[name=_token]').value
              },
            body : JSON.stringify(data)
       })
       const dataApi = await resp.json();
       console.log(dataApi)

    } catch(err) {
        console.log(err);
    }
}
register.addEventListener('submit',(e)=>{
    e.preventDefault();
    createPost(e)
})