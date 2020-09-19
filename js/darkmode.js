var checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function() {
    if (this.checked) {
        trans();
        document.documentElement.setAttribute('data-theme', 'dark');
        document.cookie = 'data-theme=' == 'dark' ? 'light' : 'dark';
        setDataTheme();
        console.log('Cookies are now: ' + document.cookie);
    } else {
        trans();
        document.documentElement.setAttribute('data-theme', 'light');
        document.cookie = 'data-theme=' == 'light' ? 'dark' : 'light';
        console.log('Cookies are now: ' + document.cookie);
    }
})

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}