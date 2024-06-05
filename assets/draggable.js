// assets/vendor/draggable.js
import Sortable from 'sortable.js'

document.addEventListener('DOMContentLoaded', function() {
    const list = document.getElementById('articles-list');
    new Sortable(list, {
        animation: 150,
        onEnd: function(evt) {
            const items = list.querySelectorAll('li');
            const positions = {};
            items.forEach(function(item, index) {
                positions[index] = item.getAttribute('data-id');
            });

            fetch('/articles/update-positions', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ positions: positions })
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error(error));
        }
    });
});
