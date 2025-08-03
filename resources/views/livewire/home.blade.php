<div class="bg-white">
  {{-- Hero Section --}}
  <section class="relative bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
            Güzelliğinizi
            <span class="bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent">
              Keşfedin
            </span>
          </h1>
          <p class="text-xl text-gray-600 mb-8 leading-relaxed">
            Profesyonel güzellik hizmetleri ile kendinizi özel hissedin. Uzman kadromuz ve modern teknolojimizle size en iyi hizmeti sunuyoruz.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ url('/randevu') }}" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-4 rounded-full hover:from-cyan-600 hover:to-teal-600 transition-all duration-200 font-semibold text-center inline-flex items-center justify-center">
              Randevu Al
              <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
              </svg>
            </a>
            <a href="{{ url('/hizmetler') }}" class="border-2 border-cyan-500 text-cyan-600 px-8 py-4 rounded-full hover:bg-cyan-500 hover:text-white transition-all duration-200 font-semibold text-center">
              Hizmetlerimizi İncele
            </a>
          </div>
        </div>
        <div class="relative">
          <img src="{{ asset('images/giris.jpg') }}" alt="Güzellik Salonu" class="rounded-2xl shadow-2xl" />
          <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-lg">
            <div class="flex items-center space-x-2">
              {{-- Star Icon --}}
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
              </svg>
              <span class="font-semibold text-gray-900">4.9/5</span>
            </div>
            <p class="text-gray-600 text-sm">1000+ Mutlu Müşteri</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Features Section --}}
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden Bizi Tercih Etmelisiniz?</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Yılların deneyimi ve modern teknoloji ile size en iyi hizmeti sunuyoruz
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @php
          $features = [
            ['icon' => 'users', 'title' => 'Uzman Kadro', 'description' => 'Alanında uzman profesyonel ekip'],
            ['icon' => 'award', 'title' => 'Kaliteli Hizmet', 'description' => 'Yüksek kalite standartları'],
            ['icon' => 'clock', 'title' => 'Esnek Saatler', 'description' => '7 gün 24 saat randevu imkanı'],
          ];
        @endphp

        @foreach ($features as $feature)
          <div class="text-center p-8 rounded-2xl bg-gradient-to-br from-cyan-50 to-teal-50 hover:shadow-lg transition-shadow duration-300">
            <div class="bg-gradient-to-r from-cyan-500 to-teal-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
              {{-- Icon --}}
              @if($feature['icon'] === 'users')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M7 21v-2a4 4 0 0 1 3-3.87"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              @elseif($feature['icon'] === 'award')
                <svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              @elseif($feature['icon'] === 'clock')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
              @endif
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ $feature['title'] }}</h3>
            <p class="text-gray-600">{{ $feature['description'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Services Section --}}
  <section class="py-20 bg-gradient-to-br from-gray-50 to-cyan-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Hizmetlerimiz</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Geniş hizmet yelpazemiz ile tüm güzellik ihtiyaçlarınızı karşılıyoruz
        </p>
      </div>

      @php
        $services = [
          [
            'title' => 'Cilt Bakımı',
            'description' => 'Profesyonel cilt analizi ve bakım hizmetleri',
            'image' => asset('images/ciltbakimi.jpg'),
          ],
          [
            'title' => 'Saç Bakımı',
            'description' => 'Kesim, boyama ve bakım hizmetleri',
            'image' => asset('images/sacbakimi.jpg'),
          ],
          [
            'title' => 'Makyaj',
            'description' => 'Özel gün ve günlük makyaj hizmetleri',
            'image' => asset('images/makyaj.jpg'),
          ],
          [
            'title' => 'Vücut Bakımı',
            'description' => 'Özel gün ve günlük makyaj hizmetleri',
            'image' => asset('images/vucut.jpg'),
          ],
          [
            'title' => 'Tırnak Bakımı',
            'description' => 'Özel gün ve günlük makyaj hizmetleri',
            'image' => asset('images/tirnak.jpg'),
          ],
          [
            'title' => 'Lazer Epilasyon',
            'description' => 'Özel gün ve günlük makyaj hizmetleri',
            'image' => asset('images/lazer.jpg'),
          ],
        ];
      @endphp

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($services as $service)
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-48 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $service['title'] }}</h3>
              <p class="text-gray-600 mb-4">{{ $service['description'] }}</p>
              <a href="{{ url('/hizmetler') }}" class="text-cyan-600 hover:text-cyan-700 font-medium inline-flex items-center">
                Detayları Gör
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- CTA Section --}}
  <section class="py-20 bg-gradient-to-r from-cyan-600 to-teal-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Güzellik Yolculuğunuza Başlayın</h2>
      <p class="text-xl text-cyan-100 mb-8 max-w-3xl mx-auto">
        Profesyonel ekibimiz ile randevunuzu alın ve kendinizi özel hissedin
      </p>
      <a href="{{ url('/randevu') }}" class="bg-white text-cyan-600 px-8 py-4 rounded-full hover:bg-gray-100 transition-colors duration-200 font-semibold inline-flex items-center">
        Hemen Randevu Al
        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </section>
</div>
