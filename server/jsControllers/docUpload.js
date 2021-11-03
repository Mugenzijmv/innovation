const form = document.querySelector(".docUpload form"),
continueBtn = form.querySelector(".button input"),
successText = form.querySelector(".success-text"),
errorText = form.querySelector(".error-text");
form.onsubmit = (e) => {
    e.preventDefault();
}
continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "server/phpControllers/docUpload.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    successText.innerHTML = data;
                    successText.style.display = "block";
                    errorText.innerHTML = data;
                    errorText.style.display = "none";
                } else {
                    errorText.innerHTML = data;
                    errorText.style.display = "block";
                    successText.innerHTML = data;
                    successText.style.display = "none";
                }
                //console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}