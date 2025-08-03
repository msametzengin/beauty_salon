<div class="bg-white/50">
  {{-- Hero Section --}}
  <section class="relative bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">İletişim</h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Sorularınız için bize ulaşın, size yardımcı olmaktan mutluluk duyarız</p>
    </div>
  </section>

  {{-- Contact Info Section --}}
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
        {{-- Adres --}}
        <div class="text-center p-6 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-cyan-100">
          <div class="bg-gradient-to-r from-cyan-500 to-teal-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            {{-- map-pin svg --}}
            <svg class="text-white" width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Adres</h3>
          <div class="space-y-1">
            <p class="text-gray-600 text-sm">Atatürk Caddesi No:123</p>
            <p class="text-gray-600 text-sm">Kadıköy/İstanbul</p>
            <p class="text-gray-600 text-sm">34710</p>
          </div>
        </div>

        {{-- Telefon --}}
        <div class="text-center p-6 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-cyan-100">
          <div class="bg-gradient-to-r from-cyan-500 to-teal-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            {{-- phone svg --}}
            <svg class="text-white" width="32" height="32"    fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.73268 2.043C6.95002 0.832583 8.95439 1.04804 9.9737 2.40962L11.2347 4.09402C12.0641 5.20191 11.9909 6.75032 11.0064 7.72923L10.7676 7.96665C10.7572 7.99694 10.7319 8.09215 10.76 8.2731C10.8232 8.6806 11.1635 9.545 12.592 10.9654C14.02 12.3853 14.8905 12.7253 15.3038 12.7887C15.4911 12.8174 15.5891 12.7906 15.6194 12.78L16.0274 12.3743C16.9026 11.5041 18.2475 11.3414 19.3311 11.9305L21.2416 12.9691C22.8775 13.8584 23.2909 16.0821 21.9505 17.4148L20.53 18.8273C20.0824 19.2723 19.4805 19.6434 18.7459 19.7119C16.9369 19.8806 12.7187 19.6654 8.28659 15.2584C4.14868 11.144 3.35462 7.556 3.25415 5.78817L4.00294 5.74562L3.25415 5.78817C3.20335 4.89426 3.62576 4.13796 4.16308 3.60369L5.73268 2.043ZM8.77291 3.30856C8.26628 2.63182 7.322 2.57801 6.79032 3.10668L5.22072 4.66737C4.8908 4.99542 4.73206 5.35695 4.75173 5.70307C4.83156 7.10766 5.47286 10.3453 9.34423 14.1947C13.4057 18.2331 17.1569 18.3536 18.6067 18.2184C18.9029 18.1908 19.1975 18.0369 19.4724 17.7636L20.8929 16.3511C21.4704 15.777 21.343 14.7315 20.5252 14.2869L18.6147 13.2484C18.0871 12.9616 17.469 13.0562 17.085 13.438L16.6296 13.8909L16.1008 13.359C16.6296 13.8909 16.6289 13.8916 16.6282 13.8923L16.6267 13.8937L16.6236 13.8967L16.6171 13.903L16.6025 13.9166C16.592 13.9262 16.5799 13.9367 16.5664 13.948C16.5392 13.9705 16.5058 13.9959 16.4659 14.0227C16.3858 14.0763 16.2801 14.1347 16.1472 14.1841C15.8764 14.285 15.5192 14.3392 15.0764 14.2713C14.2096 14.1384 13.0614 13.5474 11.5344 12.0291C10.0079 10.5113 9.41194 9.36834 9.2777 8.50306C9.20906 8.06061 9.26381 7.70331 9.36594 7.43225C9.41599 7.29941 9.47497 7.19378 9.5291 7.11389C9.5561 7.07405 9.58179 7.04074 9.60446 7.01368C9.6158 7.00015 9.6264 6.98817 9.63604 6.9777L9.64977 6.96312L9.65606 6.95666L9.65905 6.95363L9.66051 6.95217C9.66122 6.95146 9.66194 6.95075 10.1908 7.48258L9.66194 6.95075L9.94875 6.66556C10.3774 6.23939 10.4374 5.53194 10.0339 4.99297L8.77291 3.30856Z" fill="currentColor"/>
            </svg>  
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Telefon</h3>
          <div class="space-y-1">
            <p class="text-gray-600 text-sm">+90 212 555 0123</p>
            <p class="text-gray-600 text-sm">+90 532 555 0123</p>
          </div>
        </div>

        {{-- E-posta --}}
        <div class="text-center p-6 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-cyan-100">
          <div class="bg-gradient-to-r from-cyan-500 to-teal-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            {{-- mail svg --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m0 8V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2h14a2 2 0 002-2z" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-3">E-posta</h3>
          <div class="space-y-1">
            <p class="text-gray-600 text-sm">info@guzelliksalonu.com</p>
            <p class="text-gray-600 text-sm">randevu@guzelliksalonu.com</p>
          </div>
        </div>

        {{-- Çalışma Saatleri --}}
        <div class="text-center p-6 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-cyan-100">
          <div class="bg-gradient-to-r from-cyan-500 to-teal-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            {{-- clock svg --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Çalışma Saatleri</h3>
          <div class="space-y-1">
            <p class="text-gray-600 text-sm">Pazartesi - Cumartesi: 09:00 - 19:00</p>
            <p class="text-gray-600 text-sm">Pazar: 10:00 - 17:00</p>
          </div>
        </div>
      </div>

      {{-- Social Media --}}
      <div class="mb-16">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Sosyal Medya</h2>
          <p class="text-xl text-gray-600">Bizi sosyal medyada takip edin</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

          {{-- Instagram --}}
          <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-cyan-100 group cursor-pointer">
            <div class="bg-gradient-to-r from-pink-500 to-purple-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg width="32" height="32" viewBox="0 0 3364.7 3364.7" xmlns="http://www.w3.org/2000/svg"><defs><radialGradient id="0" cx="217.76" cy="3290.99" r="4271.92" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#fa8f21"/><stop offset=".78" stop-color="#d82d7e"/></radialGradient><radialGradient id="1" cx="2330.61" cy="3182.95" r="3759.33" gradientUnits="userSpaceOnUse"><stop offset=".64" stop-color="#8c3aaa" stop-opacity="0"/><stop offset="1" stop-color="#8c3aaa"/></radialGradient></defs><path d="M853.2,3352.8c-200.1-9.1-308.8-42.4-381.1-70.6-95.8-37.3-164.1-81.7-236-153.5S119.7,2988.6,82.6,2892.8c-28.2-72.3-61.5-181-70.6-381.1C2,2295.4,0,2230.5,0,1682.5s2.2-612.8,11.9-829.3C21,653.1,54.5,544.6,82.5,472.1,119.8,376.3,164.3,308,236,236c71.8-71.8,140.1-116.4,236-153.5C544.3,54.3,653,21,853.1,11.9,1069.5,2,1134.5,0,1682.3,0c548,0,612.8,2.2,829.3,11.9,200.1,9.1,308.6,42.6,381.1,70.6,95.8,37.1,164.1,81.7,236,153.5s116.2,140.2,153.5,236c28.2,72.3,61.5,181,70.6,381.1,9.9,216.5,11.9,281.3,11.9,829.3,0,547.8-2,612.8-11.9,829.3-9.1,200.1-42.6,308.8-70.6,381.1-37.3,95.8-81.7,164.1-153.5,235.9s-140.2,116.2-236,153.5c-72.3,28.2-181,61.5-381.1,70.6-216.3,9.9-281.3,11.9-829.3,11.9-547.8,0-612.8-1.9-829.1-11.9" fill="url(#0)"/><path d="M853.2,3352.8c-200.1-9.1-308.8-42.4-381.1-70.6-95.8-37.3-164.1-81.7-236-153.5S119.7,2988.6,82.6,2892.8c-28.2-72.3-61.5-181-70.6-381.1C2,2295.4,0,2230.5,0,1682.5s2.2-612.8,11.9-829.3C21,653.1,54.5,544.6,82.5,472.1,119.8,376.3,164.3,308,236,236c71.8-71.8,140.1-116.4,236-153.5C544.3,54.3,653,21,853.1,11.9,1069.5,2,1134.5,0,1682.3,0c548,0,612.8,2.2,829.3,11.9,200.1,9.1,308.6,42.6,381.1,70.6,95.8,37.1,164.1,81.7,236,153.5s116.2,140.2,153.5,236c28.2,72.3,61.5,181,70.6,381.1,9.9,216.5,11.9,281.3,11.9,829.3,0,547.8-2,612.8-11.9,829.3-9.1,200.1-42.6,308.8-70.6,381.1-37.3,95.8-81.7,164.1-153.5,235.9s-140.2,116.2-236,153.5c-72.3,28.2-181,61.5-381.1,70.6-216.3,9.9-281.3,11.9-829.3,11.9-547.8,0-612.8-1.9-829.1-11.9" fill="url(#1)"/><path d="M1269.25,1689.52c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7-416.6-186.59-416.6-416.7m-225.26,0c0,354.5,287.36,641.86,641.86,641.86s641.86-287.36,641.86-641.86-287.36-641.86-641.86-641.86S1044,1335,1044,1689.52m1159.13-667.31a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M1180.85,2707c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27S2059.13,666,2191,672c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M1170.5,447.09c-133.07,6.06-224,27.16-303.41,58.06-82.19,31.91-151.86,74.72-221.43,144.18S533.39,788.47,501.48,870.76c-30.9,79.46-52,170.34-58.06,303.41-6.16,133.28-7.57,175.89-7.57,515.35s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43s139.14,112.18,221.43,144.18c79.56,30.9,170.34,52,303.41,58.06,133.35,6.06,175.89,7.57,515.35,7.57s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2586.8,537.06,2504.71,505.15c-79.56-30.9-170.44-52.1-303.41-58.06C2068,441,2025.41,439.52,1686,439.52s-382.1,1.41-515.45,7.57" fill="#ffffff"/></svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Instagram</h3>
            <p class="text-gray-600 mb-2">@guzelliksalonu</p>
            <p class="text-cyan-600 font-semibold">12.5K Takipçi</p>
          </div>

          {{-- Facebook --}}
          <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-cyan-100 group cursor-pointer">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24" class="text-white">
                <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.326v21.348C0 23.403.597 24 1.326 
                         24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 
                         4.659-4.788 1.325 0 2.466.099 
                         2.797.143v3.24l-1.918.001c-1.504 
                         0-1.796.716-1.796 1.765v2.317h3.587l-.467 
                         3.622h-3.12V24h6.116C23.403 
                         24 24 23.403 24 22.674V1.326C24 
                         .597 23.403 0 22.675 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Facebook</h3>
            <p class="text-gray-600 mb-2">Güzellik Salonu</p>
            <p class="text-cyan-600 font-semibold">8.2K Takipçi</p>
          </div>

          {{-- Twitter --}}
          <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-cyan-100 group cursor-pointer">
            <div class="bg-gradient-to-r from-sky-400 to-sky-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24" class="text-white">
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
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Twitter</h3>
            <p class="text-gray-600 mb-2">@guzelliksalonu</p>
            <p class="text-cyan-600 font-semibold">5.8K Takipçi</p>
          </div>

        </div>
      </div>

      {{-- Map Section --}}
      <div class="mb-16">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Konumumuz</h2>
          <p class="text-xl text-gray-600">Salonumuzu kolayca bulabilirsiniz</p>
        </div>
        <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg border border-cyan-100">
          <div class="rounded-xl overflow-hidden shadow-lg">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3012.022396127416!2d29.088507976551096!3d40.98099042110395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac7b56b0a30ff%3A0x676361ee1220b40c!2zMTkgTWF5xLFzLCBBdGF0w7xyayBDZC4gTm86MTIzLCAzNDczNiBLYWTEsWvDtnkvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1753832117864!5m2!1str!2str"
              width="100%" height="400" style="border:0" allowfullscreen loading="lazy"
              referrerpolicy="no-referrer-when-downgrade" title="Güzellik Salonu Konumu"></iframe>
          </div>
          <div class="mt-6 p-4 bg-gradient-to-r from-cyan-50 to-teal-50 rounded-lg">
            <div class="flex items-center space-x-3 from-cyan-500 to-teal-500 ">
              {{-- map-pin small svg --}}
            <svg class="text-white" width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="cyan" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="cyan " stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
              <div>
                <p class="font-medium text-gray-900">Atatürk Caddesi No:123</p>
                <p class="text-sm text-gray-600">Kadıköy/İstanbul 34710</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  {{-- FAQ Section --}}
  <section class="py-20 bg-gradient-to-br from-white/60 to-cyan-50/40">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Sıkça Sorulan Sorular</h2>
        <p class="text-xl text-gray-600">Merak ettiğiniz soruların cevapları</p>
      </div>
      <div class="space-y-6">

        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-lg shadow-lg border border-cyan-100">
          <h3 class="font-semibold text-gray-900 mb-2">Randevu nasıl alabilirim?</h3>
          <p class="text-gray-600">Telefon, WhatsApp veya web sitemiz üzerinden kolayca randevu alabilirsiniz. Randevu hattımız: +90 212 555 0123</p>
        </div>

        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-lg shadow-lg border border-cyan-100">
          <h3 class="font-semibold text-gray-900 mb-2">Randevumu iptal edebilir miyim?</h3>
          <p class="text-gray-600">Evet, randevunuzdan en az 24 saat önce haber vererek iptal edebilirsiniz.</p>
        </div>

        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-lg shadow-lg border border-cyan-100">
          <h3 class="font-semibold text-gray-900 mb-2">Hangi ödeme yöntemlerini kabul ediyorsunuz?</h3>
          <p class="text-gray-600">Nakit, kredi kartı, banka kartı ve havale ile ödeme yapabilirsiniz.</p>
        </div>

        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-lg shadow-lg border border-cyan-100">
          <h3 class="font-semibold text-gray-900 mb-2">İlk kez geliyorum, ne yapmalıyım?</h3>
          <p class="text-gray-600">Uzmanlarımız ücretsiz danışmanlık sunar ve size özel hizmet planı oluşturur.</p>
        </div>

      </div>
    </div>
  </section>

  {{-- CTA Section --}}
  <section class="py-20 bg-gradient-to-r from-cyan-600 to-teal-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Hemen Bize Ulaşın</h2>
      <p class="text-xl text-cyan-100 mb-8 max-w-3xl mx-auto">Sorularınız için bizi arayın veya salonumuza bekleriz</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">

        <a href="tel:+902125550123" class="bg-white text-cyan-600 px-8 py-4 rounded-full hover:bg-gray-100 transition-colors duration-200 font-semibold inline-flex items-center justify-center">
          {{-- phone svg --}}
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h2l3.6 7.59-1.35 2.44a11.042 11.042 0 005.06 5.06l2.44-1.35L19 19v2a2 2 0 01-2 2h-1C7.373 21 3 16.627 3 11V9a2 2 0 012-2z" />
          </svg>
          Hemen Ara
        </a>

        <a href="https://wa.me/905325550123" class="border-2 border-white text-white px-8 py-4 rounded-full hover:bg-white hover:text-cyan-600 transition-all duration-200 font-semibold inline-flex items-center justify-center">
          {{-- whatsapp svg --}}
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.52 3.48A11.81 11.81 0 0012 0C5.373 0 0 5.373 0 12a11.86 11.86 0 001.65 6L0 24l6-1.65A11.85 11.85 0 0012 24c6.627 0 12-5.373 12-12 0-3.19-1.243-6.19-3.48-8.52zM12 21.6a9.6 9.6 0 01-5.15-1.5l-.37-.22-3.6 1 1-3.6-.22-.37A9.6 9.6 0 012.4 12a9.6 9.6 0 0116.8-6.8 9.56 9.56 0 01-6.2 16.4zm5.3-6.1c-.3-.15-1.7-.83-1.95-.93-.25-.1-.43-.15-.6.15-.16.3-.63.93-.77 1.12-.14.2-.28.22-.52.08-.25-.15-1-0.37-1.9-1.18-.7-.62-1.17-1.38-1.3-1.63-.13-.25-.01-.38.11-.52.12-.13.25-.28.37-.43.12-.15.16-.25.25-.4.08-.14.04-.27-.02-.4-.06-.14-.6-1.44-.83-1.96-.22-.5-.45-.43-.6-.44-.15 0-.33-.02-.5-.02s-.4.06-.6.27c-.2.22-.77.75-.77 1.83 0 1.07.79 2.1.9 2.25.12.14 1.55 2.37 3.75 3.32.52.23.92.37 1.23.47.52.16 1 .13 1.37.08.42-.06 1.3-.53 1.48-1.04.18-.52.18-.96.12-1.04-.06-.07-.22-.11-.5-.22z"/>
          </svg>
          WhatsApp
        </a>

      </div>
    </div>
  </section>
</div>
