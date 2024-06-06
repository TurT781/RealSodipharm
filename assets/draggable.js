// assets/vendor/draggable.js

import Sortable from 'sortable.js'

document.addEventListener('DOMContentLoaded', function() {
    let initialX, initialY;

    const draggableItems = document.querySelectorAll('[draggable]');

    draggableItems.forEach(function(item) {
        item.addEventListener('dragstart', dragStart);
        item.addEventListener('dragend', dragEnd);
    });

    function dragStart(e) {
        e.dataTransfer.setData('text/plain', ''); 
        e.target.classList.add('dragging');
        initialX = e.clientX - e.target.getBoundingClientRect().left;
        initialY = e.clientY - e.target.getBoundingClientRect().top;
    }

    function dragEnd(e) {
        e.target.classList.remove('dragging');
    }

    const dropZones = document.querySelectorAll('.dropzone');

    dropZones.forEach(function(dropZone) {
        dropZone.addEventListener('dragover', dragOver);
        dropZone.addEventListener('dragenter', dragEnter);
        dropZone.addEventListener('dragleave', dragLeave);
        dropZone.addEventListener('drop', drop);
    });

    function dragOver(e) {
        e.preventDefault();
    }

    function dragEnter(e) {
        e.target.classList.add('dragover');
    }

    function dragLeave(e) {
        e.target.classList.remove('dragover');
    }

    function drop(e) {
        e.preventDefault();
        const draggedItem = document.querySelector('.dragging');
        const dropZone = e.target.closest('.dropzone');

        if (dropZone) {
            dropZone.appendChild(draggedItem);
            // Si l'élément est déposé dans une zone valide, réinitialisez sa position
            draggedItem.style.left = '0px';
            draggedItem.style.top = '0px';
        } else {
            // Si l'élément est déposé en dehors d'une zone valide, restaurez sa position initiale
            draggedItem.style.left = e.clientX - initialX + 'px';
            draggedItem.style.top = e.clientY - initialY + 'px';
        }
    }
});
