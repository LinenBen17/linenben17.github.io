let progressbar = document.querySelector('.progressbar');
function ScrollProgressbar(){
    let scrollTop = document.documentElement.scrollTop;//es lo que avanza el scroll
    let scrollHeight = document.documentElement.scrollHeight;//es el Alto Total
    let clientHeight = document.documentElement.clientHeight;//es lo que se ve en este Momento

    let windowHeihgt = scrollHeight - clientHeight; //lo restante de la ventana
    let porcentaje = scrollTop / windowHeihgt * 100;

    progressbar.style.width = porcentaje + '%';
}

window.addEventListener('scroll', ScrollProgressbar );
