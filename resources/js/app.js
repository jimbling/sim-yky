import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

 // Preloader logic
document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.querySelector('.preloader');
    const content = document.querySelector('.content');

    window.addEventListener('load', () => {
        if (preloader) preloader.classList.add('hidden');
        if (content) content.classList.remove('hidden');

        // Inisialisasi AOS setelah konten muncul
        AOS.init({
            duration: 1000,
            once: true,
        });
    });
});
