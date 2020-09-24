// Tema Escuro e Tema Claro preferências:
var checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function() {
    if (this.checked) {
        trans();
        document.documentElement.setAttribute('data-theme', 'dark');
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

// Transições de preferências:
let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}

// Identificar, guardar: Tema Escuro e Tema Claro
var checked = JSON.parse(localStorage.getItem('switch'));
document.getElementById("switch").checked = checked;

let darkMode = localStorage.getItem('data-theme', 'switch', 'inputheme', 'labeltheme');

const darkModeToggle = document.querySelector('input[name=theme]');

darkMode = localStorage.getItem('data-theme', 'switch', 'inputheme', 'labeltheme');

// Se o usuário já visitou e habilitou o tema escuro
// - Startar o serviço se já:
if (darkMode === 'enabled') {
    document.documentElement.setAttribute('data-theme', 'dark');
}

// Quando clica no botão
darkModeToggle.addEventListener('click', () => {
    // - Vai herdar as preferências de Tema Escuro:
    darkMode = localStorage.getItem('data-theme', 'dark')

    // - Se ainda não habilitado, forçar funcionamento:
    if (darkMode !== 'enabled') {
        document.documentElement.setAttribute('data-theme', 'dark');

        // - Se não habilitado voltar para Tema Claro:
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
});


// const prefersColorScheme = window.matchMedia('(prefers-color-scheme: dark)');

// // Altera o tema
// function changeTheme(event) {
//     if (event.matches) {
//         document.documentElement.setAttribute('data-theme', 'dark');
//         document.documentElement.setAttribute('switch', 'checked');
//         var checked = JSON.parse(localStorage.getItem('switch'));
//         document.getElementById("switch").checked = checked;
//     } else {
//         document.documentElement.setAttribute('data-theme', 'light');
//         var checked = JSON.parse(localStorage.getItem('switch'));
//         document.getElementById("switch").checked = checked;
//     }
// }

// // Escuta a mudança de tema no sistema
// prefersColorScheme.addListener(changeTheme);

// // Altera o tema conforme o tema do usuário
// changeTheme(prefersColorScheme);