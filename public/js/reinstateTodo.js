let reinstateBtns = document.querySelectorAll('.reinstate-item-btn');

reinstateBtns.forEach((btn) => {

    btn.addEventListener('click', (el) => {

        let id = el.target.dataset.id;
        let item = el.target.dataset.item;

        fetch('/todos/{id}/reinstate', {
            method: 'PUT',
            body: JSON.stringify({"id": id}),
            headers: {
                "Content-Type": "application/json"
            }
        });

        window.location.href = "http://localhost:8080/todos";

    })
});