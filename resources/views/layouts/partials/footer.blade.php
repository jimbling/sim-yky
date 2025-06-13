<footer class="bg-dark text-white py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col items-center text-center">
            <div class="flex items-center mb-6">
                <div class="bg-primary p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <div class="text-2xl font-bold text-white">Sinau<span class="text-secondary">CMS</span>
                </div>
            </div>
            <p class="text-gray-400 mb-6 max-w-md">Platform digital untuk sekolah dasar dengan teknologi modern dan
                fitur lengkap.</p>
            <div class="flex space-x-4 mb-8">
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 mb-4 md:mb-0">© 2024 Sinau CMS. All rights reserved.</p>
            <div class="flex items-center space-x-2">
                <span class="text-gray-400">Dibuat dengan sepenuh <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 inline text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd" />
                    </svg> by</span>
                <a href="https://sinaucms.web.id" class="text-gray-400 hover:text-white transition">sinauCMS</a>
            </div>
        </div>
    </div>
</footer>
@push('scripts')
    <script>
        // Mobile menu toggle
        const hamburgerMenu = document.getElementById('hamburger-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');

        hamburgerMenu.addEventListener('click', function() {
            mobileMenu.classList.remove('translate-x-full');
            mobileMenu.classList.add('translate-x-0');
        });

        closeMenu.addEventListener('click', function() {
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('translate-x-full');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('#mobile-menu') && !event.target.closest('#hamburger-menu')) {
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('translate-x-full');
            }
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
                navbar.classList.add('py-2');
                navbar.classList.remove('py-3');
            } else {
                navbar.classList.remove('shadow-lg');
                navbar.classList.remove('py-2');
                navbar.classList.add('py-3');
            }
        });
    </script>
    <!-- AOS JS -->
@endpush
