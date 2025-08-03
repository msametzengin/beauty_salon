<header class="bg-gradient-to-r from-cyan-50 to-teal-50 shadow-lg sticky top-0 z-50" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <div class="bg-gradient-to-r from-cyan-500 to-teal-500 p-2 rounded-full">
                    {{-- Sparkles Icon --}}
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-14 w-auto rounded-full shadow-md" />
                </div>
                <span class="text-2xl font-bold bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent">
                    Güzellik Salonu
                </span>
            </a>

            {{-- Masaüstü Menü --}}
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-cyan-600 font-medium transition-colors duration-200">Anasayfa</a>
                <a href="{{ route('hakkimizda') }}" class="text-gray-700 hover:text-cyan-600 font-medium transition-colors duration-200">Hakkımızda</a>
                <a href="{{ route('hizmetler') }}" class="text-gray-700 hover:text-cyan-600 font-medium transition-colors duration-200">Hizmetler</a>
                <a href="{{ route('iletisim') }}" class="text-gray-700 hover:text-cyan-600 font-medium transition-colors duration-200">İletişim</a>
                <a href="{{ route('randevu') }}"
                    class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-6 py-2 rounded-full hover:from-cyan-600 hover:to-teal-600 transition-all duration-200 font-medium">
                    Randevu Al
                </a>
                <a href="{{ url('/login') }}"
                    class="border-2 border-cyan-500 text-cyan-600 px-4 py-2 rounded-full hover:bg-cyan-500 hover:text-white transition-all duration-200 font-medium">
                    Doktor Girişi
                </a>
            </nav>

            {{-- Mobil Menü Butonu --}}
            <button @click="open = !open" class="md:hidden p-2 rounded-md text-gray-700 hover:text-cyan-600">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Mobil Menü --}}
        <div x-show="open" x-cloak class="md:hidden py-4 border-t border-gray-200">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-cyan-600 font-medium transition-colors duration-200">Anasayfa</a>
                <a href="{{ route('hakkimizda') }}" class="text-gray-700 hover:text-cyan-600 font-medium transition-colors duration-200">Hakkımızda</a>
                <a href="{{ route('hizmetler') }}" class="text-gray-700 hover:text-cyan-600 font-medium transition-colors duration-200">Hizmetler</a>
                <a href="{{ route('iletisim') }}" class="text-gray-700 hover:text-cyan-600 font-medium transition-colors duration-200">İletişim</a>
                <a href="{{ route('randevu') }}"
                    class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-6 py-2 rounded-full hover:from-cyan-600 hover:to-teal-600 transition-all duration-200 font-medium text-center">
                    Randevu Al
                </a>
                <a href="{{ url('/login') }}"
                    class="border-2 border-cyan-500 text-cyan-600 px-4 py-2 rounded-full hover:bg-cyan-500 hover:text-white transition-all duration-200 font-medium text-center">
                    Doktor Girişi
                </a>
            </div>
        </div>
    </div>
</header>
