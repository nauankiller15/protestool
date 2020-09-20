var checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function() {
    if (this.checked) {
        trans();
        document.documentElement.setAttribute('data-theme', 'dark');
        document.getElementById("switch").checked = true;
        localStorage.setItem('data-theme', 'enabled');
        localStorage.setItem('switch', checkbox.checked);
        toastr.success("Tema alterado para Modo Escuro.");
    } else {
        trans();
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('data-theme', null);
        localStorage.setItem('switch', null);
        toastr.success("Tema alterado para Modo Claro.");
    }
})

var checked = JSON.parse(localStorage.getItem('switch'));
document.getElementById("switch").checked = checked;

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}

let darkMode = localStorage.getItem('data-theme', 'switch', 'inputheme', 'labeltheme');

const darkModeToggle = document.querySelector('input[name=theme]');

darkMode = localStorage.getItem('data-theme', 'switch', 'inputheme', 'labeltheme');

// If the user already visited and enabled darkMode
// start things off with it on
if (darkMode === 'enabled') {
    document.documentElement.setAttribute('data-theme', 'dark');
}

// When someone clicks the button
darkModeToggle.addEventListener('click', () => {
    // get their darkMode setting
    darkMode = localStorage.getItem('data-theme', 'dark')

    // if it not current enabled, enable it
    if (darkMode !== 'enabled') {
        document.documentElement.setAttribute('data-theme', 'dark');
        // if it has been enabled, turn it off  
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
});