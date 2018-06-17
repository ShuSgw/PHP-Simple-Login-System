var email = document.getElementById("email");
var password = document.getElementById("password");
var logBt = document.getElementById("login");

logBt.addEventListener("click", () => {
    var fd = new FormData();
    fd.append("email", email.value);
    fd.append("password", password.value);
    fd.append("table", "users");

    fetch('../server/login.php', {
        method: 'post',
        credentials: 'same-origin',
        body: fd
    })
        .then(resp => resp.text())
        .then(text => {
            console.log(text);
            location.reload();
        })
})