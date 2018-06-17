const showingSql = () => {
    var fd = new FormData();
    fd.append("table", "showAllUser");
    fetch("../server/show.php", {
        method: 'post',
        body: fd
    })
        .then(resp => resp.text())
        .then(text => {
            document.getElementById("displayUsers").innerHTML = text;
        })
}
showingSql();