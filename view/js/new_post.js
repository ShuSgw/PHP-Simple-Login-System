var postBtn = document.getElementById("postBtn");
var title = document.getElementById("title");
var id = document.getElementById("users_id");
var message = document.getElementById("message");
console.log(message.value);
postBtn.addEventListener("click", () => {

    var fd = new FormData();
    fd.append("title", title.value);
    fd.append("id", id.value);
    fd.append("message", message.value);
    fd.append("table", "posts");

    fetch("../server/insert.php", {
        method: "post",
        credentials: "same-origin",
        body: fd
    })
        .then(resp => resp.text())
        .then(text => console.log(text))
})