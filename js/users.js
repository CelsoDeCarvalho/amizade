const user_list = document.getElementById('user-list');

setInterval(()=>{
    var ajax= new XMLHttpRequest();
    ajax.open("GET","/amizade/controller/UserReadController.php",true);

    ajax.onload = () => {
        if(ajax.readyState == XMLHttpRequest.DONE){
            if(ajax.status == 200){
                let response=ajax.response;
               user_list.innerHTML = response;
            }
        }
    };

    ajax.send();
},500);