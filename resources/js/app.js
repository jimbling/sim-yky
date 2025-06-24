// import './bootstrap';
// import AOS from 'aos';
// import 'aos/dist/aos.css';

// // Preloader logic
// document.addEventListener('DOMContentLoaded', () => {
//     const preloader = document.querySelector('.preloader');
//     const content = document.querySelector('.content');

//     window.addEventListener('load', () => {
//         if (preloader) preloader.classList.add('hidden');
//         if (content) content.classList.remove('hidden');

//         // Inisialisasi AOS dengan konfigurasi lebih lengkap
//         AOS.init({
//             duration: 800, // Lebih cepat dari 1000ms untuk UX lebih baik
//             once: true,
//             offset: 120, // Jarak trigger animasi dari atas viewport
//             easing: 'ease-out-quad', // Efek easing yang lebih smooth
//             mirror: false, // Pastikan animasi hanya sekali
//             anchorPlacement: 'top-bottom', // Posisi anchor optimal
//             initClassName: 'aos-init', // Class untuk inisialisasi
//             animatedClassName: 'aos-animate', // Class untuk animasi
//             disable: window.innerWidth < 768, // Nonaktifkan di mobile jika perlu
//         });

//         // Fix untuk layout setelah AOS diinisialisasi
//         setTimeout(() => {
//             document.documentElement.style.overflowX = 'hidden';
//             document.body.style.overflowX = 'hidden';
            
//             // Force reflow untuk beberapa browser
//             document.body.clientWidth;
//         }, 300);
//     });

//     // Tambahan untuk handle resize window
//     window.addEventListener('resize', () => {
//         AOS.refresh();
//         document.documentElement.style.overflowX = 'hidden';
//         document.body.style.overflowX = 'hidden';
//     });
// });

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
