const send_btn = document.getElementById("send-btn");
const form = document.getElementById("message-form");
const field = document.getElementById("text-message");
const chats = document.getElementById("chat-box");

form.onsubmit = (e) => {
    e.preventDefault();
}

send_btn.onclick = () => {
    var ajax= new XMLHttpRequest();
    ajax.open("POST","/amizade/controller/ChatAddController.php",true);

    ajax.onload = () => {
        if(ajax.readyState == XMLHttpRequest.DONE){
            if(ajax.status == 200){
                let response=ajax.response;
                field.value="";
                scrollToBotton()
            }
        }
    };
    let formulario = new FormData(form);
    ajax.send(formulario);
}

setInterval(()=>{
    var ajax= new XMLHttpRequest();
    ajax.open("POST","/amizade/controller/ChatReader.php",true);

    ajax.onload = () => {
        if(ajax.readyState == XMLHttpRequest.DONE){
            if(ajax.status == 200){
                let response=ajax.response;
                chats.innerHTML=response;
                if(!chats.classList.contains('active')){
                    scrollToBotton()
                }
            }
        }
    };
    let formulario = new FormData(form);
    ajax.send(formulario);
},500);

function scrollToBotton() {
    chats.scrollTop = chats.scrollHeight;
}

chats.onmouseenter = () => {
    chats.classList.add('active');
}

chats.onmouseleave = () => {
    chats.classList.remove('active');
}