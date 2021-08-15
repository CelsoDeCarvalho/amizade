const btn_logar = document.getElementById("btn-logar");
const form_login = document.getElementById("form-login");

form_login.onsubmit = (e) => {
    e.preventDefault();
}

btn_logar,onclick = () => {
    var ajax= new XMLHttpRequest();
    ajax.open("POST","../amizade/controller/UserController.php",true);

    ajax.onload = () => {
        if(ajax.readyState == XMLHttpRequest.DONE){
            if(ajax.status == 200){
                let response=ajax.response;
            }
        }
    }

    let formulario=new FormData(form_login);
    ajax.send(formulario);
}