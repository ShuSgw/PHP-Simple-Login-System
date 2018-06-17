var password = document.getElementById("password");
var email = document.getElementById("email");
var regBt = document.getElementById("register");

regBt.addEventListener("click", () => {
    if (password.value == "" || email.value == "" || password.value > 5 || email.value > 5) {
        alert("Type both email and password more than 5 letters");
    } else {
        var fd = new FormData();
        fd.append("email", email.value);
        fd.append("password", password.value);
        fd.append("table", "users");

        fetch('../server/insert.php', {
            method: 'post',
            credentials: 'same-origin',
            body: fd
        })
            .then(resp => resp.text())
            .then(text => {
                console.log(text);
                if (text == "success") {
                    location.reload();
                }
            })
    }
})