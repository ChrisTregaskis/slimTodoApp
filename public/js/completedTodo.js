let doneBtns = document.querySelectorAll('.done-item-btn');

doneBtns.forEach((btn) => {

    btn.addEventListener('click', (el) => {

        let id = el.target.dataset.id;
        let item = el.target.dataset.item;

        fetch('/todos/{id}/complete', {
            method: 'PUT',
            body: JSON.stringify({"id": id}),
            headers: {
                "Content-Type": "application/json"
            }
        });

        window.location.href = "http://localhost:8080/todos";

    })
});