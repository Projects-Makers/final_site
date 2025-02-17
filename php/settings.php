<main class="settings">
        
<aside class="sidebar-settings">
            <a href="#account">Ustawienia konta</a>
            <a href="#privacy">Prywatność</a>
            <a href="#notifications">Powiadomienia</a>
        </aside>
<div class="container-settings">
        
        
        <section class="content">
            <div id="account" class="section">
                <h2>Ustawienia konta</h2>
                <label>Numer telefonu:</label>
                <input type="text" placeholder="Dodaj numer telefonu">
                <button>Zapisz</button>
                
                <label>Adres e-mail:</label>
                <input type="email" placeholder="Dodaj adres e-mail">
                <button>Zapisz</button>
                
                <h2>Personalizacja</h2>
                <label>Motyw:</label>
                <select id="theme-selector">
                    <option value="bright">🌞 Jasny</option>
                    <option value="dark">🌙 Ciemny</option>
                </select>
                
                <label>Język:</label>
                <select>
                    <option>🇬🇧 English</option>
                    <option>🇵🇱 Polski</option>
                    <option>🇩🇪 Deutsch</option>
                    <option>🇫🇷 Français</option>
                    <option>🇪🇸 Español</option>
                    <option>🇯🇵 日本語</option>
                </select>
            </div>
            
            <div id="privacy" class="section">
                <h2>Prywatność</h2>
                <p>Opcje prywatności </p>
            </div>
            
            <div id="notifications" class="section">
                <h2>Powiadomienia</h2>
                <div class="toggle"></div>
                    <label for="email">Powiadomienia e-mail</label>
                    <input type="checkbox" id="email">
                </div>
        <div class="toggle">
            <label for="sms">Powiadomienia SMS</label>
            <input type="checkbox" id="sms">
        </div>

            </div>
        </section>
    </div>
    </main>