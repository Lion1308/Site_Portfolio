import './bootstrap';
import 'bootstrap'

let darkMode = false;

document.addEventListener('DOMContentLoaded', function (e) {
    document.querySelector('#theme-toggle').addEventListener('click', function (e) {
        darkMode = !darkMode;
        let body = document.querySelector('body');
        darkMode ? body.classList.add('dark') : body.classList.remove('dark');
    })
})
