const showingProf = () => {
    fetch("../server/editProf.php", {
        credentials: "same-origin",
    })
        .then(resp => resp.text())
        .then(text => {
            document.getElementById("showprof").innerHTML = text;
        })
}
showingProf();

var submitBtn = document.getElementById("submitProf");

submitBtn.addEventListener("click", () => {
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var displayName = document.getElementById("displayName");
    var message = document.getElementById("message");
    var imageUrl = document.getElementById("avatar");
    var fd = new FormData();
    fd.append("email", email.value);
    fd.append("password", password.value);
    fd.append("displayName", displayName.value);
    fd.append("message", message.value);
    fd.append("avatar", imageUrl.value);
    fd.append("table", "editProf");

    fetch('../server/insert.php', {
        method: 'post',
        credentials: 'same-origin',
        body: fd
    })
        .then(resp => resp.text())
        .then(text => {
            console.log(text);
            // location.reload();
        })
})