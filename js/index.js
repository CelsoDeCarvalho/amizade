const reg_btn = document.getElementById('registar-se');
const modal_login =document.getElementById('staticBackdrop-login');

const fechar_modal = () => {
    modal_login.classList.remove('show');
}

reg_btn.addEventListener("click",fechar_modal);