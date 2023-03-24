import './bootstrap';
import 'bootstrap'
import { Autoplay, Navigation, Pagination } from "swiper";
import Swiper from 'swiper';
Swiper.use([Autoplay, Navigation, Pagination]);


let darkMode = false;

document.addEventListener('DOMContentLoaded', function (e) {
    document.querySelector('#theme-toggle').addEventListener('click', function (e) {
        darkMode = !darkMode;
        let body = document.querySelector('body');
        darkMode ? body.classList.add('dark') : body.classList.remove('dark');
    })
})


const swiper = new Swiper('.swiper', {

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

