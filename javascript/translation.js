function loadTranslations(language) {
  
    fetch('translation.json')
        .then(response => response.json())
        .then(translations => {
            const langTranslations = translations[language];
            
            // Sidebar
            document.getElementById('home').innerHTML = `<img src="icons/home.png" alt="Home"> ${langTranslations.home}`;
            document.getElementById('map').innerHTML = `<img src="icons/map.png" alt="Map"> ${langTranslations.map}`;
            document.getElementById('shop').innerHTML = `<img src="icons/shop.png" alt="Map"> ${langTranslations.shop}`;
            document.getElementById('account').innerHTML = `<img src="icons/map.png" alt="Map"> ${langTranslations.account}`;
            document.getElementById('settings').innerHTML = `<img src="icons/cogwheel.png" alt="Map"> ${langTranslations.settings}`;



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