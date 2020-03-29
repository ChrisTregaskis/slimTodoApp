//sortable and savable to db
Sortable.create(todoContainer, {
    animation: 150,
    group: "localStorage",
    store: {
        /**
         * Save the order of elements. Called onEnd (when the item is dropped) and updates DB
         *
         * @param {Sortable}  sortable
         * @returns - calls the position update route to update DB
         */
        set: function (sortable) {

            let sortableContainer = sortable.toArray();
            //make sure to trim the non-sortable items at the top of
            // list-group out of array to send back to db
            let sortableItem = sortableContainer.slice(4);

            sortableItem.forEach((itemId) => {

                let position = sortableItem.indexOf(itemId) + 1;
                let id = itemId;

                fetch('/todos/{id}/position', {
                    method: 'PUT',
                    body: JSON.stringify({"id": id, "position": position}),
                    headers: {
                        "Content-Type": "application/json"
                    }

                });

            });

        }

    }
});

//just sortable, does not save to db
Sortable.create(todoneContainer, {
    animation: 150
});