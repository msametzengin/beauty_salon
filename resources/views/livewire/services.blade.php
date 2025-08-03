
<div class="bg-white/50">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Hizmetlerimiz</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Uzman kadromuz ve modern teknolojimiz ile size özel güzellik hizmetleri sunuyoruz
            </p>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12">
            {{-- Kategori Kartları --}}
            @php
                $categories = [
                    [
                        'title' => 'Cilt Bakımı',
                        'description' => 'Profesyonel cilt analizi ve bakım hizmetleri ile cildinizi yenileyin',
                        'image' => 'images/ciltbakimi.jpg',
                        'services' => [
                            ['name' => 'Hydrafacial', 'description' => 'Özel serum ve vakum teknolojisi ile...'],
                            ['name' => 'Kimyasal Peeling', 'description' => 'Doğal asitler kullanarak cildin üst tabakasını...'],
                            ['name' => 'Mikrodermabrazyon', 'description' => 'Kristal parçacıklarla cildin üst tabakasını...'],
                            ['name' => 'LED Işık Terapisi', 'description' => 'LED ışıklarla cildin doğal yenilenme süreci...'],
                        ]
                    ],
                    [
                        'title' => 'Saç Bakımı',
                        'description' => 'Uzman stilistlerimiz ile saçlarınızı yeniden şekillendirin',
                        'image' => 'images/sacbakimi.jpg',
                        'services' => [
                            ['name' => 'Saç Kesimi', 'description' => 'Yüz şeklinize ve saç tipinize uygun kesim...'],
                            ['name' => 'Saç Boyama', 'description' => 'Kaliteli boyalar ile canlı renkler elde edilir...'],
                            ['name' => 'Keratin Bakımı', 'description' => 'Keratin ile saçınızı besleyip parlatır...'],
                            ['name' => 'Saç Şekillendirme', 'description' => 'Profesyonel föhn, maşa gibi işlemler...'],
                        ]
                    ],
                    [
                        'title' => 'Makyaj Hizmetleri',
                        'description' => 'Özel günleriniz için profesyonel makyaj hizmetleri',
                        'image' => 'images/makyaj.jpg',
                        'services' => [
                            ['name' => 'Günlük Makyaj', 'description' => 'Hafif ve doğal görünümlü günlük makyaj...'],
                            ['name' => 'Gece Makyajı', 'description' => 'Çarpıcı ve etkileyici gece makyajı...'],
                            ['name' => 'Gelin Makyajı', 'description' => 'Fotoğraf dostu, özel tasarım makyaj...'],
                            ['name' => 'Kaş Şekillendirme', 'description' => 'Kaş tasarımı ve şekillendirme işlemleri...'],
                        ]
                    ],
                    [
                        'title' => 'Vücut Bakımı',
                        'description' => 'Bölgesel incelme, selülit tedavisi ve sıkılaşma uygulamaları ile vücudunuzu şekillendirin',
                        'image' => 'images/vucut.jpg',
                        'services' => [
                            ['name' => 'Bölgesel İncelme', 'description' => 'Radyofrekans ve vakum teknolojisi ile yağ dokularını hedef alarak incelme sağlar.'],
                            ['name' => 'Selülit Tedavisi', 'description' => 'Cilt altı dolaşımını hızlandırarak portakal kabuğu görünümünü azaltır.'],
                            ['name' => 'Lenf Drenaj Masajı', 'description' => 'Vücut detoksunu destekleyerek ödem ve toksin atımına yardımcı olur.'],
                        ]
                    ],
                    [
                        'title' => 'Tırnak Bakımı',
                        'description' => 'Hijyenik ortamda estetik ve sağlıklı el-ayak bakımları',
                        'image' => 'images/tirnak.jpg',
                        'services' => [
                            ['name' => 'Manikür', 'description' => 'Tırnak şekillendirme, kütikül temizliği ve oje uygulaması ile elleriniz zarafet kazanır.'],
                            ['name' => 'Pedikür', 'description' => 'Topuk bakımı ve tırnak bakımı ile ayak sağlığınızı destekler.'],
                            ['name' => 'Jel Tırnak', 'description' => 'Uzun süre kalıcı ve estetik tırnak tasarımları.'],
                        ]
                    ],
                    [
                        'title' => 'Lazer Epilasyon',
                        'description' => 'Kalıcı ve güvenli tüy azaltma yöntemleri ile pürüzsüz bir cilt',
                        'image' => 'images/lazer.jpg',
                        'services' => [
                            ['name' => 'Buz Başlıklı Lazer', 'description' => 'Ağrısız ve konforlu lazer epilasyon ile etkili sonuçlar.'],
                            ['name' => 'Tüm Vücut Paketleri', 'description' => 'Ekonomik fiyatlarla kapsamlı lazer epilasyon uygulamaları.'],
                            ['name' => 'Seans Takibi', 'description' => 'Her cilt tipine uygun kişisel seans planlaması yapılır.'],
                        ]
                    ],
                
                ];
            @endphp

            @foreach ($categories as $category)
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-cyan-100">
                    <img src="{{ $category['image'] }}" alt="{{ $category['title'] }}" class="w-full h-100 object-cover">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $category['title'] }}</h3>
                        <p class="text-gray-600 mb-6">{{ $category['description'] }}</p>

                        <div class="space-y-6">
                            @foreach ($category['services'] as $service)
                                <div class="p-6 bg-gradient-to-br from-cyan-50/50 to-teal-50/50 rounded-lg border border-cyan-100/50 hover:shadow-md transition-shadow duration-200">
                                    <h4 class="font-semibold text-gray-900 text-lg mb-3">{{ $service['name'] }}</h4>
                                    <p class="text-gray-600 leading-relaxed">{{ $service['description'] }}</p>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <a href="/randevu" class="w-full bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-6 py-3 rounded-full hover:from-cyan-600 hover:to-teal-600 transition-all duration-200 font-semibold inline-block text-center">
                                Randevu Al →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="py-20 bg-gradient-to-br from-white/60 to-cyan-50/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Neden Hizmetlerimizi Tercih Etmelisiniz?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-16">
                Kaliteli hizmet anlayışımız ve uzman kadromuzla farkı hissedin
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $features = [
                        ['title' => 'Uzman Kadro', 'desc' => 'Alanında deneyimli ve sertifikalı uzmanlarımızla güvenle hizmet alın', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['title' => 'Modern Teknoloji', 'desc' => 'En son teknoloji cihazlar ve yöntemlerle etkili sonuçlar', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                        ['title' => 'Kişisel Yaklaşım', 'desc' => 'Her müşterimize özel çözümler ve bireysel bakım planları', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                    ];
                @endphp

                @foreach ($features as $feature)
                    <div class="text-center p-8 bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-cyan-100">
                        <div class="bg-gradient-to-r from-cyan-500 to-teal-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ $feature['title'] }}</h3>
                        <p class="text-gray-600">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-gradient-to-r from-cyan-600 to-teal-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Güzellik Yolculuğunuza Başlayın</h2>
            <p class="text-xl text-cyan-100 mb-8 max-w-3xl mx-auto">
                Uzman kadromuz ile randevunuzu alın ve kendinizi özel hissedin
            </p>
            <a href="/randevu" class="bg-white text-cyan-600 px-8 py-4 rounded-full hover:bg-gray-100 transition-colors duration-200 font-semibold inline-block">
                Hemen Randevu Al →
            </a>
        </div>
    </section>
</div>

