import './bootstrap';
import 'bootstrap'
import { Autoplay, Navigation, Pagination } from "swiper";
import Swiper from 'swiper';
Swiper.use([Autoplay, Navigation, Pagination]);


/*
let darkMode = false;

document.addEventListener('DOMContentLoaded', function (e) {
    document.querySelector('#theme-toggle').addEventListener('click', function (e) {
        darkMode = !darkMode;
        let body = document.querySelector('body');
        darkMode ? body.classList.add('dark') : body.classList.remove('dark');
    })
})
*/

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


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

/*
const videoId = '722209050';
const apiUrl = `https://api.vimeo.com/videos/${videoId}`;

const xhr = new XMLHttpRequest();
xhr.open('GET', apiUrl, true);
xhr.setRequestHeader('Authorization', '6PEoGfyOe/AOZQkmwG4dcVjyt77A/unC53VeqwTBDqayEj53J0uWMPQIlo+r3TDaXMHv/mQtuZbqCq+Jw/nW34qX+KGa3WRblRmK1kxUF3dmMjhY+PyyuiUdZTD+NqMg');
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        const videoData = JSON.parse(xhr.responseText);
        console.log(videoData);
    }
};
xhr.send();


const imageElements = document.querySelectorAll('.video-image');
imageElements.forEach(function(image) {
    let videoUrl = image.dataset.videoUrl; // отримуємо посилання на відео з атрибута data-video-url картинки
    image.addEventListener('click', function() {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', videoUrl, true);
        xhr.responseType = 'blob';
        xhr.onload = function() {
            let urlCreator = window.URL || window.webkitURL;
            let videoUrl = urlCreator.createObjectURL(this.response);
            let tag = document.createElement('a');
            tag.href = videoUrl;
            tag.download = 'video.mp4';
            document.body.appendChild(tag);
            tag.click();
            document.body.removeChild(tag);
        };
        xhr.send();
    });
});
*/

/*
$(document).ready(function() {
    $('#video-image').click(function() {
        var videoUrl = 'https://vimeo.com/790407773'; // посилання на відео на сторонньому ресурсі
        var downloadLink = document.createElement('a'); // створюємо елемент <a>
        downloadLink.href = videoUrl; // встановлюємо посилання на відео як атрибут href елементу <a>
        downloadLink.setAttribute('target', '_blank');
        downloadLink.download = 'video.mp4'; // встановлюємо назву файлу для завантаження
        document.body.appendChild(downloadLink); // додаємо елемент <a> до DOM
        downloadLink.click(); // клікаємо на посилання для початку завантаження
        document.body.removeChild(downloadLink); // видаляємо елемент <a> з DOM
    });
});
*/


$(document).ready(function() {
    $('.video-link').click(function() {
        var videoUrl = $(this).data('video');
        var downloadLink = document.createElement('a');
        downloadLink.setAttribute('target', '_blank');
        downloadLink.href = videoUrl;
        downloadLink.download = 'video.mp4';
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
    });
});


/*
$(document).ready(function() {
    $('.video-thumbnail').click(function() {
        var videoUrl = $(this).data('video-url');
        var videoPlayer = $('<video controls></video>').attr('src', videoUrl);
        $(this).replaceWith(videoPlayer);
        videoPlayer[0].play();
    });
});
*/
