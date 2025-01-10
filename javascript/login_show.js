// Zmienna przechowująca referencje do formularza
const formContainer = document.querySelector('.form-container');
const kontoDiv = document.querySelector('.konto'); // Używamy querySelector, aby wybrać elementy po klasie

// Funkcja, która pokazuje formularz
function showForm() {
    formContainer.style.display = 'block'; // Pokazuje formularz
}

// Funkcja, która ukrywa formularz
function hideForm(event) {
    if (!formContainer.contains(event.target) && event.target !== kontoDiv) {
        formContainer.style.display = 'none'; // Ukrywa formularz, jeśli kliknięto poza nim
    }
}

// Dodanie nasłuchiwania kliknięcia na div konto (z klasą konto)
kontoDiv.addEventListener('click', function() {
    if (formContainer.style.display === 'block') {
        formContainer.style.display = 'none'; // Jeśli formularz jest widoczny, ukryj go
    } else {
        showForm(); // Jeśli formularz jest ukryty, pokaż go
    }
});

// Dodanie nasłuchiwania na kliknięcia w dokument
document.addEventListener('click', hideForm);
