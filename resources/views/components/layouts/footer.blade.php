<footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            {{-- Logo ve Açıklama --}}
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-teal-400 bg-clip-text text-transparent mb-4">
                    Güzellik Salonu
                </h3>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Profesyonel güzellik hizmetleri ile kendinizi özel hissedin. Uzman kadromuz ve modern teknolojimizle size
                    en iyi hizmeti sunuyoruz.
                </p>
                <div class="flex space-x-4">
                    {{-- Facebook Icon --}}
                    <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-cyan-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    {{-- Instagram Icon --}}
                    <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-cyan-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.5" y1="6.5" y2="6.5" />
                        </svg>
                    </a>
                    {{-- Twitter Icon --}}
                    <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-cyan-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" class="text-white">
                            <path d="M24 4.557a9.83 9.83 0 01-2.828.775 
                                    4.932 4.932 0 002.165-2.724c-.951.555-2.005.959-3.127 
                                    1.184a4.916 4.916 0 00-8.384 
                                    4.482C7.691 8.095 4.066 6.13 
                                    1.64 3.161a4.822 4.822 0 00-.666 
                                    2.475c0 1.708.869 3.213 
                                    2.188 4.096a4.904 4.904 0 01-2.229-.616c-.054 
                                    1.997 1.388 3.868 3.444 
                                    4.29a4.935 4.935 0 01-2.224.084 
                                    4.923 4.923 0 004.6 3.419A9.867 
                                    9.867 0 010 19.54a13.94 13.94 0 
                                    007.548 2.212c9.142 0 
                                    14.307-7.721 13.995-14.646A9.935 
                                    9.935 0 0024 4.557z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Hızlı Linkler --}}
            <div>
                <h4 class="text-lg font-semibold mb-4 text-cyan-400">Hızlı Linkler</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-cyan-400 transition-colors">Anasayfa</a></li>
                    <li><a href="{{ route('hakkimizda') }}" class="text-gray-300 hover:text-cyan-400 transition-colors">Hakkımızda</a></li>
                    <li><a href="{{ route('hizmetler') }}" class="text-gray-300 hover:text-cyan-400 transition-colors">Hizmetler</a></li>
                    <li><a href="{{ route('iletisim') }}" class="text-gray-300 hover:text-cyan-400 transition-colors">İletişim</a></li>
                </ul>
            </div>

            {{-- İletişim Bilgileri --}}
            <div>
                <h4 class="text-lg font-semibold mb-4 text-cyan-400">İletişim</h4>
                <div class="space-y-3 text-sm text-gray-300">
                    <div class="flex items-center space-x-3">
                        {{-- MapPin --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path d="M12 21c-4.8-4.8-8-8.3-8-11.5a8 8 0 0 1 16 0c0 3.2-3.2 6.7-8 11.5z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span>Atatürk Cad. No:123 Kadıköy/İstanbul</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        {{-- Phone --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.1 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.05 12.05 0 0 0 .56 2.57 2 2 0 0 1-.45 2.11L9 11a16 16 0 0 0 6 6l1.6-1.6a2 2 0 0 1 2.11-.45 12.05 12.05 0 0 0 2.57.56A2 2 0 0 1 22 16.92z" />
                        </svg>
                        <span>+90 212 555 0123</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        {{-- Mail --}}
                        <svg class="h-5 w-5 text-cyan-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 8L8.44992 11.6333C9.73295 12.4886 10.3745 12.9163 11.0678 13.0825C11.6806 13.2293 12.3194 13.2293 12.9322 13.0825C13.6255 12.9163 14.2671 12.4886 15.5501 11.6333L21 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>info@guzelliksalonu.com</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        {{-- Clock --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                        <span>09:00 - 19:00</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
            <p class="text-gray-400 text-sm">© 2025 Güzellik Salonu. Tüm hakları saklıdır.</p>
        </div>
    </div>
</footer>
