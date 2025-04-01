<div class="profil-container-dodaj">
    <center>
        
        <div class="add" onclick="toggleVisibility('add-rozwin')">
            ADD
        </div>

        <div class="add-rozwin rozwin">
            <a href="index.php?strona=panel/dodaj-at"><div class="table">Atrakcje</div></a>
            <a href="index.php?strona=panel/dodaj-mi"><div class="table">Miasta</div></a>
            <a href="index.php?strona=panel/dodaj-rs"><div class="table">Restauracje</div></a>
        </div>

        <div class="edit" onclick="toggleVisibility('edit-rozwin')">
            EDIT
        </div>

        <div class="edit-rozwin rozwin">
            <a href="index.php?strona=panel/edit-at"><div class="table">Atrakcje</div></a>
            <a href="index.php?strona=panel/edit-mi"><div class="table">Miasta</div></a>
            <a href="index.php?strona=panel/edit-rs"><div class="table">Restauracje</div></a>
        </div>

        <div class="remove" onclick="toggleVisibility('remove-rozwin')">
            REMOVE
        </div>

        <div class="remove-rozwin rozwin">
            <a href="index.php?strona=panel/remove-at"><div class="table">Atrakcje</div></a>
            <a href="index.php?strona=panel/remove-mi"><div class="table">Miasta</div></a>
            <a href="index.php?strona=panel/remove-rs"><div class="table">Restauracje</div></a>
        </div>

    </center>
</div>

<script>
function toggleVisibility(className) {
    var allSections = document.querySelectorAll('.rozwin');
    allSections.forEach(function(section) {
        section.style.display = 'none';
    });
    
    const element = document.querySelector('.' + className);
    
    if (element.style.display === 'block') {
        element.style.display = 'none';
    } else {
        element.style.display = 'block';
    }
}


</script>