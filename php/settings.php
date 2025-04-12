<main class="settings">
        

<div class="container-settings">
        
        
        <section class="content">
            <div class="section">
                <h2 id="account-settings">Ustawienia konta</h2>
                <label id="phone-number">Numer telefonu:</label>
                <input type="text" placeholder="Dodaj numer telefonu">
                <button id="save-phone-number">Zapisz</button>
                
                <label id="address-email">Adres e-mail:</label>
                <input type="email" placeholder="Dodaj adres e-mail">
                <button id="save-address-email">Zapisz</button>
                
                <h2 id="personalization">Personalizacja</h2>
                <label id="theme">Motyw:</label>
                <select id="theme-selector">
                    <option value="bright" id="bright">🌞 Jasny</option>
                    <option value="dark" id="dark">🌙 Ciemny</option>
                </select>
                
                <label id="language">Język:</label>
                <select id="language-selector">
                    <option value="pl">🇵🇱 Polski</option>
                    <option value="en" selected>🇬🇧 English</option>
                    <option value="de">🇩🇪 Deutsch</option>
                    <option value="fr">🇫🇷 Français</option>
                    <option value="es">🇪🇸 Español</option>
                    <option value="ja">🇯🇵 日本語</option>
                </select>
            </div>
            
            <div class="section">
                <h2 id="privacy">Prywatność</h2>
                <p>Opcje prywatności </p>
            </div>
            
            <div class="section1">
                <h2 id="notification">Powiadomienia</h2>
                <div class="toggle1"></div>
                    <label for="email" id="email-notification">Powiadomienia e-mail</label>
                    <input type="checkbox" id="email">
                </div>
        <div class="toggle1">
            <label for="sms" id="SMS-notification">Powiadomienia SMS</label>
            <input type="checkbox" id="sms">
        </div>

            </div>
        </section>
    </div>
    </main>