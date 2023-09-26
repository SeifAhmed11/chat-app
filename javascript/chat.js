const form = document.querySelector(".typing-area"),
      inputField = document.querySelector(".input-field"),
      sendBtn = document.querySelector("button");

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("post", "php/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState ===XMLHttpRequest.DONE){
            if(xhr.status === 200){
                
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}