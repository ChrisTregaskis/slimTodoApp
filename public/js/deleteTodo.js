let deleteBtns = document.querySelectorAll('.delete-item-btn');

deleteBtns.forEach((btn ) => {

    btn.addEventListener('click', (el) => {

        let id = el.target.dataset.id;
        let item = el.target.dataset.item;

        fetch('/todos', {
            method: 'DELETE',
            body: JSON.stringify({"id": id}),
            headers: {
                "Content-Type": "application/json"
            }
        });

        alert(item + ' has successfully been deleted');
        window.location.href = "http://localhost:8080/todos";
    })

});