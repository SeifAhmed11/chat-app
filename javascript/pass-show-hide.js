const pswrdField = document.querySelector(".form .field input[type='password']"),
    toggleBtn    = document.querySelector(".form .field i"),
    whenClick    = document.querySelector(".form .field .when-click");


toggleBtn.onclick = () => {
    if (pswrdField.type == "password") {
        pswrdField.type = "text";
        whenClick.classList.add("active");
    } else {
        pswrdField.type = "password";
        whenClick.classList.remove("active");
    }
}