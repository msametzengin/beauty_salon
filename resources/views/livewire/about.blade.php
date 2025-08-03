<div class="bg-white">
    @php
        $achievements = [
            '1000+ Mutlu Müşteri',
            '15+ Yıl Deneyim',
            '50+ Farklı Hizmet',
            '24/7 Destek',
        ];

        $values = [
            [
                'icon_svg' => '<svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>',
                'title' => 'Müşteri Memnuniyeti',
                'description' => 'Müşterilerimizin memnuniyeti bizim için en önemli önceliktir.',
            ],
            [
                'icon_svg' => '<svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12Z" stroke="currentcolor" stroke-width="2"/>
                                <path d="M16 9L11 15L8 12.2727" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>',
                'title' => 'Kalite',
                'description' => 'En yüksek kalite standartlarında hizmet sunmayı hedefliyoruz.',
            ],
            [
                'icon_svg' => '<svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.5 20H5C3.89543 20 3 19.1046 3 18V4C3 2.89543 3.89543 2 5 2H19C20.1046 2 21 2.89543 21 4V18C21 19.1046 20.1046 20 19 20H17.5M12 19C13.6569 19 15 17.6569 15 16C15 14.3431 13.6569 13 12 13C10.3431 13 9 14.3431 9 16C9 17.6569 10.3431 19 12 19ZM12 19L12.0214 18.9998L8.82867 22.1926L6.00024 19.3641L9.01965 16.3447M12 19L15.1928 22.1926L18.0212 19.3641L15.0018 16.3447M9 6H15M7 9.5H17" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>',
                'title' => 'Profesyonellik',
                'description' => 'Alanında uzman kadromuzla profesyonel hizmet veriyoruz.',
            ],
        ];

        $team = [
            [
                'name' => 'Dr. Ayşe Yılmaz',
                'image' => 'images/doktorayse.jpg',
                'experience' => '15 yıl deneyim',
            ],
            [
                'name' => 'Dr. Mehmet Kaya',
                'image' => 'images/doktormehmet.jpg',
                'experience' => '12 yıl deneyim',
            ],
            [
                'name' => 'Dr. Zeynep Demir',
                'image' => 'images/doktorzeynep.jpg',
                'experience' => '10 yıl deneyim',
            ],
        ];
    @endphp

    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Hakkımızda</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Güzellik sektöründe yılların deneyimi ile size en iyi hizmeti sunmak için buradayız
                </p>
            </div>
        </div>
    </section>

    {{-- Story Section --}}
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Hikayemiz</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        2010 yılında kurulan güzellik salonumuz, müşterilerimize en kaliteli hizmeti sunma vizyonu ile yola çıktı.
                        Yıllar içinde büyüyen ekibimiz ve gelişen teknolojimiz ile sektörde öncü konuma geldik.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Bugün, binlerce mutlu müşterimiz ile gurur duyuyor ve her geçen gün kendimizi geliştirmeye devam ediyoruz.
                        Amacımız, her müşterimizin kendini özel hissetmesini sağlamak.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        @foreach($achievements as $achievement)
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 font-medium">{{ $achievement }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="relative">
                    <img src="images/salon.jpg" alt="Salon İçi" class="rounded-2xl shadow-2xl" style="width: 515px !important; height: 350px !important;" />
                </div>
            </div>
        </div>
    </section>

    {{-- Values Section --}}
    <section class="py-20 bg-gradient-to-br from-gray-50 to-cyan-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Değerlerimiz</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Çalışma prensiplerimiz ve değerlerimiz</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($values as $value)
                    <div class="text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-gradient-to-r from-cyan-500 to-teal-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            {!! $value['icon_svg'] !!}
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ $value['title'] }}</h3>
                        <p class="text-gray-600">{{ $value['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Uzman Kadromuz</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Alanında uzman profesyonel ekibimiz ile tanışın</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($team as $member)
                    <div class="text-center bg-gradient-to-br from-cyan-50 to-teal-50 p-8 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ $member['image'] ?? '/placeholder.svg' }}" alt="{{ $member['name'] }}" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover shadow-lg" />
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $member['name'] }}</h3>
                        <p class="text-gray-600">{{ $member['experience'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mission Section --}}
    <section class="py-20 bg-gradient-to-r from-cyan-600 to-teal-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Misyonumuz</h2>
            <p class="text-xl text-cyan-100 mb-8 max-w-4xl mx-auto leading-relaxed">
                Her müşterimizin kendini özel ve güzel hissetmesini sağlamak, en son teknoloji ve yöntemlerle kaliteli hizmet sunmak, güzellik sektöründe öncü olmaya devam etmek.
            </p>
        </div>
    </section>
</div>
