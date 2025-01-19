<div class="settings-container">
    <h2>Ustawienia motywu</h2>
    <div class="theme-switcher">
        <button class="theme-button" id="light-theme" onclick="setTheme('light')">Jasny</button>
        <button class="theme-button" id="dark-theme" onclick="setTheme('dark')">Ciemny</button>
    </div>
    <script>
        function setTheme(theme) {
            document.cookie = "theme=" + theme + "; expires=Fri, 31 Dec 9999 23:59:59 GMT";
            document.body.classList.remove('theme-light', 'theme-dark');
            document.body.classList.add('theme-' + theme);
        }
    </script>
</div>