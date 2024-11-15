

// Functie om de padding onder de navigatiebalk aan te passen op basis van de hoogte
function adjustContentPadding() {
    const navbar = document.querySelector('.navigatie');
    const mainContent = document.querySelector('.main'); 
    const navbarHeight = navbar.offsetHeight; 
    mainContent.style.paddingTop = navbarHeight + 'px'; 
}

// Voer de padding-aanpassing uit bij het laden van de pagina en bij het wijzigen van het vensterformaat
window.addEventListener('load', adjustContentPadding);
window.addEventListener('resize', adjustContentPadding);

// Toggle de zichtbaarheid van het themapaneel
function toggleThemePanel() {
    const themePanel = document.getElementById('theme-panel');
    themePanel.classList.toggle('show');
}

// Stel het thema in op basis van de gebruikersselectie en sla het op in localStorage
function setTheme(themeName) {
    document.documentElement.setAttribute('data-theme', themeName);
    localStorage.setItem('selectedTheme', themeName); // Sla de thema-voorkeur op
}

// Laad opgeslagen thema bij het laden van de pagina
window.addEventListener('load', () => {
    const savedTheme = localStorage.getItem('selectedTheme');
    if (savedTheme) {
        setTheme(savedTheme);
    }
});