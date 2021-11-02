const form = document.querySelector(".register form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");
form.onsubmit = (e) => {
    e.preventDefault();
}
continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "server/phpControllers/register.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "dashboard.php";
                } else {
                    errorText.innerHTML = data;
                    errorText.style.display = "block";
                }
                //console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}