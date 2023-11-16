const wrapper = document.querySelector('.wrapper');
const registreLink = document.querySelector('.registre-link');
const loginLink = document.querySelector('.login-link');

registreLink.onclick = () => {
    wrapper.classList.add('active');
}

loginLink.onclick = () => {
    wrapper.classList.remove('active');
}


