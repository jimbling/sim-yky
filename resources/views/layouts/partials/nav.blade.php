<nav class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-40 transition-all duration-300" id="navbar">
    <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <div class="bg-primary p-2 rounded-lg mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-primary">Sinau<span class="text-secondary">CMS</span></span>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="nav-link text-gray-600 hover:text-primary font-medium">Home</a>
                <a href="/pages/artikel" class="nav-link text-gray-600 hover:text-primary font-medium">Artikel</a>
                <a href="/tutorial" class="nav-link text-gray-600 hover:text-primary font-medium">Tutorial</a>
                <a href="/pages/faq" class="nav-link text-gray-600 hover:text-primary font-medium">FAQ</a>

            </div>

            <div class="flex items-center space-x-4">
                <a href="#demo"
                    class="hidden md:block px-5 py-2 bg-gradient-to-r from-primary to-purple-600 text-white rounded-lg font-medium hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    Request Demo
                </a>
                <button id="hamburger-menu" class="md:hidden text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu"
    class="fixed inset-y-0 right-0 w-64 bg-white shadow-lg transform translate-x-full md:hidden transition-transform duration-300 ease-in-out z-50">
    <div class="flex flex-col h-full p-6">
        <div class="flex justify-between items-center mb-8">
            <a href="#" class="flex items-center">
                <div class="bg-primary p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-primary">Sinau<span class="text-secondary">CMS</span></span>
            </a>
            <button id="close-menu" class="text-gray-500">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="flex-1">
            <a href="#fitur" class="block py-3 px-4 rounded-lg hover:bg-gray-100 text-gray-700 font-medium">Fitur</a>
            <a href="#layanan"
                class="block py-3 px-4 rounded-lg hover:bg-gray-100 text-gray-700 font-medium">Layanan</a>
            <a href="#siesde" class="block py-3 px-4 rounded-lg hover:bg-gray-100 text-gray-700 font-medium">SIESDE</a>
            <a href="#harga" class="block py-3 px-4 rounded-lg hover:bg-gray-100 text-gray-700 font-medium">Harga</a>
            <a href="#artikel"
                class="block py-3 px-4 rounded-lg hover:bg-gray-100 text-gray-700 font-medium">Artikel</a>

        </nav>

        <div class="pt-4 border-t border-gray-200">
            <a href="#demo"
                class="block w-full text-center px-5 py-2 bg-gradient-to-r from-primary to-purple-600 text-white rounded-lg font-medium hover:shadow-lg transition-all duration-300">
                Request Demo
            </a>
        </div>
    </div>
</div>
