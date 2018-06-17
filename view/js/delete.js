var fd = new FormData();
fd.append("id", id);
fetch('../server/deletePost.php', {
    method: 'post',
    credentials: 'same-origin',
    body: fd
})
    .then(resp => resp.text())
    .then(text => {
        location.href = 'index.php?p=post_display';
    })
