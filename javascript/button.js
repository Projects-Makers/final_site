document.getElementById('clickable-image').addEventListener('click', function () {
    document.getElementById('red-object').classList.add('active');
});

document.getElementById('close-button').addEventListener('click', function () {
    document.getElementById('red-object').classList.remove('active');
});
