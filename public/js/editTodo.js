let editBtns = document.querySelectorAll('.edit-item-btn');

editBtns.forEach((btn) => {

    btn.addEventListener('click', (el) => {

        el.preventDefault();
        let updateItemText;
        let id = el.target.dataset.id;
        let updateInputBox = $(`#item-input-${id}`);
        let cancelUpdate = $(`#cancel-edit-${id}`);
        let saveUpdate = $(`#submit-edit-${id}`);

        //Open onclick then close on save
        updateInputBox.css('height', 'auto');
        updateInputBox.css('transition', 'height 0.6s');
        updateInputBox.css('padding', '10px');
        updateInputBox.css('transition', 'padding 0.6s');
        cancelUpdate.click(() => {updateInputBox.css('height', '0')});
        cancelUpdate.click(() => {updateInputBox.css('transition', 'height 0.6s')});
        cancelUpdate.click(() => {updateInputBox.css('padding', '0')});
        cancelUpdate.click(() => {updateInputBox.css('transition', 'padding 0.6s')});

        //On save click, update DB
        saveUpdate.click(() =>{

            updateItemText = document.getElementById(`edit-item-${id}`).value;

            fetch('/todos/{id}', {
                method: 'PUT',
                body: JSON.stringify({"id": id, "item": updateItemText}),
                headers: {
                    "Content-Type": "application/json"
                }
            });

            window.location.href = "http://localhost:8080/todos";

        });
    })
});