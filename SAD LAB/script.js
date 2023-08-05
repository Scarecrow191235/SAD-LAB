const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
registerLink.addEventlistener('click',()=>{
    wrapper.classList.add('active');
});

loginLink.addEventlistener('click',()=>{
    wrapper.classList.remove('active');
});