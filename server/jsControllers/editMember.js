const form = document.querySelector(".register form"),
continueBtn = form.querySelector(".button input"),
successText = form.querySelector(".success-text"),
errorText = form.querySelector(".error-text");
form.onsubmit = (e) => {
    e.preventDefault();
}
continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "server/phpControllers/editMember.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "Updated successfuly!") {
                    successText.textContent = data;
                    successText.style.display = "block";
                    errorText.textContent = data;
                    errorText.style.display = "none";
                    // location.href = "dashboard.php";
                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                    successText.textContent = data;
                    successText.style.display = "none";
                }
                //console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}