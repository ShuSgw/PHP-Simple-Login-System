const showingSql = () => {
    fetch("../server/show.php")
        .then(resp => resp.text())
        .then(text => {
            document.getElementById("displayPosts").innerHTML = text;
        })
}
showingSql();