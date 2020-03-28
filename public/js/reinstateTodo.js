let reinstateBtns = document.querySelectorAll('.reinstate-item-btn');

reinstateBtns.forEach((btn) => {

    btn.addEventListener('click', (el) => {

        console.log('hello');

        let id = el.target.dataset.id;
        let item = el.target.dataset.item;

        console.log(`btn id: ${id} clicked`);

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