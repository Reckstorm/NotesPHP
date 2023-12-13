// console.log(document.getElementsByClassName('hidden')[0].value);
let forms = document.getElementsByTagName("form");
for (let item of forms){
    item.addEventListener('submit', (e) => {
        // e.preventDefault();
        const formData = new FormData(item);
        // console.log(Object.fromEntries(formData.entries()));
        fetch("NoteView.php", {
            method: 'POST',
            body: formData
        }).then(response => {
            // console.log(response);
            // document.location.reload();
            })
            .catch(error => {
                console.log(error);
            });
    });
}

function editNote(e){
    document.getElementById('title').value = e.previousElementSibling.children[1].innerText;
    document.getElementById('text').value = e.previousElementSibling.children[2].innerText;
    document.getElementById('date').value = e.previousElementSibling.children[3].innerText;
    document.getElementById('id').value = e.previousElementSibling.children[4].value;
}