document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.querySelector('.wrapper');
    const registreLink = document.querySelector('.registre-link');
    const loginLink = document.querySelector('.login-link');
    
    console.log(wrapper, registreLink, loginLink); // Verifica se os elementos foram encontrados
    
    registreLink.onclick = () => {
        console.log('Registre link clicado'); // Verifica se a função de clique é atribuída corretamente
        wrapper.classList.add('active');
    }
    
    loginLink.onclick = () => {
        console.log('Login link clicado'); // Verifica se a função de clique é atribuída corretamente
        wrapper.classList.remove('active');
    }
});