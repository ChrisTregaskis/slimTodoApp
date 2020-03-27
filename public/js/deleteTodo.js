let deleteBtns = document.querySelectorAll('.delete-item-btn');

deleteBtns.forEach((btn ) => {

    btn.addEventListener('click', (el) => {

        let id = el.target.dataset.id;

        fetch('/todos', {
            method: 'DELETE',
            body: JSON.stringify({"id": id}),
            headers: {
                "Content-Type": "application/json"
            }
        });

        window.location.href = "http://localhost:8080/todos";
    })

});