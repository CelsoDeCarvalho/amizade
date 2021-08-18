const btn_logar = document.getElementById("btn-logar");
const form_login = document.getElementById("form-login");
const erros_login = document.getElementById("caixa-erros-login");


form_login.onsubmit = (e) => {
    e.preventDefault();
}

btn_logar.onclick = () => {
    var ajax= new XMLHttpRequest();
    ajax.open("POST","../amizade-php/controller/LoginController.php",true);

    ajax.onload = () => {
        if(ajax.readyState == XMLHttpRequest.DONE){
            if(ajax.status == 200){
                let response=ajax.response;
                if(response=="Sucesso"){
                    location.href="../amizade/pages/profile.php";
                }else{
                    erros_login.textContent=response;
                    erros_login.style.display="flex";
                    erros_login.style.justifyContent="center";
                }
            }
        }
    }

    let formulario=new FormData(form_login);
    ajax.send(formulario);
}