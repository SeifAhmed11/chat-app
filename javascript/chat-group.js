const form = document.querySelector(".typing-area"),
      inputField = document.querySelector(".input-field"),
      sendBtn = document.querySelector("button"),
      chatBox2 = document.querySelector(".chat-box2");

form.onsubmit = (e) => {
    e.preventDefault();
}
    
sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("post", "php/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState ===XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = "";
                scrollToBottom ();
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox2.onmouseenter = () => {
    chatBox2.classList.add("active");
}

chatBox2.onmouseleave = () => {
    chatBox2.classList.remove("active");
}

setInterval( () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("post", "php/group.php", true);
    xhr.onload = () => {
        if(xhr.readyState ===XMLHttpRequest.DONE){
            if(xhr.status === 200){
                console.log("dsv");
                let data = xhr.response;
                chatBox2.innerHTML = data;
                if(!chatBox2.classList.contains("active"))
                    scrollToBottom ();
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
},500 )


function scrollToBottom (){
    chatBox2.scrollTop = chatBox2.scrollHeight;
}