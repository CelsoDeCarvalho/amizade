const btn_cadastrar = document.getElementById("btn-cadastrar");
const form_cadastro = document.getElementById("form-cadastro");
const erros = document.getElementById("caixa-erros");

form_cadastro.onsubmit = (e) => {
    e.preventDefault();
}

btn_cadastrar.onclick = () => {
    var ajax= new XMLHttpRequest();
    ajax.open("POST","./amizade/controller/UserController.php",true);

    ajax.onload = () => {
        if(ajax.readyState == XMLHttpRequest.DONE){
            if(ajax.status == 200){
               let response=ajax.response;
               if(response=="Sucesso"){
                   location.href = "../amizade/pages/profile.php";
               }else{
                   erros.textContent=response;
                   erros.style.display="flex";
                   erros.style.justifyContent="center";
               }
            }
        }
    }

    let formulario=new FormData(form_cadastro);
    ajax.send(formulario);
}

