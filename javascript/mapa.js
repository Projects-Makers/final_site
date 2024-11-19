   document.addEventListener('DOMContentLoaded', function () {
        const image = document.getElementById('clickable-image');
        const redObject = document.getElementById('red-object');

        image.addEventListener('click', function () {
            redObject.classList.toggle('active');
        });
    });
