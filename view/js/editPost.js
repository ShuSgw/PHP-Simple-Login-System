var editProfBtn = document.getElementById("editProfBtn");
editProfBtn.addEventListener("click", () => {
    var title = document.getElementById("title");
    var users_id = document.getElementById("users_id");
    var message = document.getElementById("message");

    var fd = new FormData();
    fd.append("title", title.value);
    fd.append("users_id", users_id.value);
    fd.append("message", message.value);
    fd.append("id", id);
    fd.append("table", "editPost");

    fetch('../server/insert.php', {
        method: 'post',
        credentials: 'same-origin',
        body: fd
    })
        .then(resp => resp.text())
        .then(text => {
            console.log(text);
            location.href = 'index.php?p=post_display';
        })
})