function loadTranslations(language) {
  
    fetch('translation.json')
        .then(response => response.json())
        .then(translations => {
            const langTranslations = translations[language];
            
            // Sidebar
            // document.getElementById('home').innerHTML = `<img src="assets/icons/home-white.png" alt="Home" class="icons-theme"> ${langTranslations.home}`;
            // document.getElementById('map').innerHTML = `<img src="assets/icons/settings-white.png" alt="Settings" class="icons-theme"> ${langTranslations.map}`;
            // document.getElementById('shop').innerHTML = `<img src="assets/icons/subscribe-white.png" alt="Subscriptions" class="icons-theme"> ${langTranslations.shop}`;
            // document.getElementById('account').innerHTML = `<img src="assets/icons/history-white.png" alt="History" class="icons-theme"> ${langTranslations.account}`;
            // document.getElementById('settings').innerHTML = `<img src="assets/icons/playlist-white.png" alt="Playlist" class="icons-theme"> ${langTranslations.settings}`;



            document.getElementById('aside-account-settings').innerText = langTranslations.aside_account_settings;
            document.getElementById('aside-privacy').innerText = langTranslations.aside_privacy;
            document.getElementById('aside-notification').innerText = langTranslations.aside_notification;



            // Pozostałe teksty
            document.getElementById('account-settings').innerText = langTranslations.account_settings;

            document.getElementById('phone-number').innerText = langTranslations.phone_number;
            document.getElementById('save-phone-number').innerText = langTranslations.save;

            document.getElementById('address-email').innerText = langTranslations.address_email;
            document.getElementById('save-address-email').innerText = langTranslations.save;
            

            document.getElementById('personalization').innerText = langTranslations.personalization;
            document.getElementById('theme').innerText = langTranslations.theme;   
            document.getElementById('bright').innerText = `🌞 ${langTranslations.bright}`;   
            document.getElementById('dark').innerText = `🌙 ${langTranslations.dark}`;   
            document.getElementById('language').innerText = langTranslations.language;
            
            
            document.getElementById('privacy').innerText = langTranslations.privacy;
            

            document.getElementById('notification').innerText = langTranslations.notification;
            document.getElementById('email-notification').innerText = langTranslations.email_notification;
            document.getElementById('SMS-notification').innerText = langTranslations.SMS_notification;



        });
}


document.addEventListener('DOMContentLoaded', () => {
    const languageSelector = document.getElementById('language-selector');
    const savedLanguage = localStorage.getItem('selectedLanguage') || 'en';
    languageSelector.value = savedLanguage;
    loadTranslations(savedLanguage);

    languageSelector.addEventListener('change', () => {
        const selectedLanguage = languageSelector.value;
        localStorage.setItem('selectedLanguage', selectedLanguage);
        loadTranslations(selectedLanguage);
    });
});