<div class="bg-white/50 min-h-screen">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Randevu Al</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Güzellik yolculuğunuz için randevunuzu alın, uzman kadromuz size en iyi hizmeti sunmaya hazır
            </p>
        </div>
    </section>

    {{-- Form / Onay --}}
    @if (!$isSubmitted)
        {{-- Form Section --}}
        <section class="py-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl border border-cyan-100 overflow-hidden">

                    {{-- Form Başlığı --}}
                    <div class="bg-gradient-to-r from-cyan-500 to-teal-500 px-8 py-6">
                        <h2 class="text-2xl font-bold text-white flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10m-11 8h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Randevu Formu
                        </h2>
                    </div>

                    <form wire:submit.prevent="submit" class="p-8 space-y-8">
                        @if (session()->has('message'))
                            <div class="p-4 text-sm text-green-800 bg-green-100 rounded-lg border border-green-300">
                                {{ session('message') }}
                            </div>
                        @endif

                        {{-- Kişisel Bilgiler --}}
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="h-5 w-5 text-cyan-600 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Kişisel Bilgiler
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Ad *</label>
                                    <input type="text" wire:model.defer="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70" placeholder="Adınız" />
                                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Soyad *</label>
                                    <input type="text" wire:model.defer="surname" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70" placeholder="Soyadınız" />
                                    @error('surname') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">TC Kimlik No *</label>
                                    <input type="text" wire:model.defer="tc_id" maxlength="11" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70" placeholder="11 Haneli TCKN" />
                                    @error('tc_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Doğum Tarihi *</label>
                                    <input type="date" wire:model.defer="birth_date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70" />
                                    @error('birth_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        {{-- İletişim Bilgileri --}}
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="h-5 w-5 text-cyan-600 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1007 13.359L15.5719 12.8272H15.5719L16.1007 13.359ZM16.5562 12.9062L17.085 13.438H17.085L16.5562 12.9062ZM18.9728 12.5894L18.6146 13.2483L18.9728 12.5894ZM20.8833 13.628L20.5251 14.2869L20.8833 13.628ZM21.4217 16.883L21.9505 17.4148L21.4217 16.883ZM20.0011 18.2954L19.4723 17.7636L20.0011 18.2954ZM18.6763 18.9651L18.7459 19.7119H18.7459L18.6763 18.9651ZM8.81536 14.7266L9.34418 14.1947L8.81536 14.7266ZM4.00289 5.74561L3.2541 5.78816L3.2541 5.78816L4.00289 5.74561ZM10.4775 7.19738L11.0063 7.72922H11.0063L10.4775 7.19738ZM10.6342 4.54348L11.2346 4.09401L10.6342 4.54348ZM9.37326 2.85908L8.77286 3.30855V3.30855L9.37326 2.85908ZM6.26145 2.57483L6.79027 3.10667H6.79027L6.26145 2.57483ZM4.69185 4.13552L4.16303 3.60368H4.16303L4.69185 4.13552ZM12.0631 11.4972L12.5919 10.9654L12.0631 11.4972ZM16.6295 13.8909L17.085 13.438L16.0273 12.3743L15.5719 12.8272L16.6295 13.8909ZM18.6146 13.2483L20.5251 14.2869L21.2415 12.9691L19.331 11.9305L18.6146 13.2483ZM20.8929 16.3511L19.4723 17.7636L20.5299 18.8273L21.9505 17.4148L20.8929 16.3511ZM18.6067 18.2184C17.1568 18.3535 13.4056 18.2331 9.34418 14.1947L8.28654 15.2584C12.7186 19.6653 16.9369 19.8805 18.7459 19.7119L18.6067 18.2184ZM9.34418 14.1947C5.4728 10.3453 4.83151 7.10765 4.75168 5.70305L3.2541 5.78816C3.35456 7.55599 4.14863 11.144 8.28654 15.2584L9.34418 14.1947ZM10.7195 8.01441L11.0063 7.72922L9.9487 6.66555L9.66189 6.95073L10.7195 8.01441ZM11.2346 4.09401L9.97365 2.40961L8.77286 3.30855L10.0338 4.99296L11.2346 4.09401ZM5.73263 2.04299L4.16303 3.60368L5.22067 4.66736L6.79027 3.10667L5.73263 2.04299ZM10.1907 7.48257C9.66189 6.95073 9.66117 6.95144 9.66045 6.95216C9.66021 6.9524 9.65949 6.95313 9.659 6.95362C9.65802 6.95461 9.65702 6.95561 9.65601 6.95664C9.65398 6.95871 9.65188 6.96086 9.64972 6.9631C9.64539 6.96759 9.64081 6.97245 9.63599 6.97769C9.62634 6.98816 9.61575 7.00014 9.60441 7.01367C9.58174 7.04072 9.55605 7.07403 9.52905 7.11388C9.47492 7.19377 9.41594 7.2994 9.36589 7.43224C9.26376 7.70329 9.20901 8.0606 9.27765 8.50305C9.41189 9.36833 10.0078 10.5113 11.5343 12.0291L12.5919 10.9654C11.1634 9.54499 10.8231 8.68059 10.7599 8.27309C10.7298 8.07916 10.761 7.98371 10.7696 7.96111C10.7748 7.94713 10.7773 7.9457 10.7709 7.95525C10.7677 7.95992 10.7624 7.96723 10.7541 7.97708C10.75 7.98201 10.7451 7.98759 10.7394 7.99381C10.7365 7.99692 10.7335 8.00019 10.7301 8.00362C10.7285 8.00534 10.7268 8.00709 10.725 8.00889C10.7241 8.00979 10.7232 8.0107 10.7223 8.01162C10.7219 8.01208 10.7212 8.01278 10.7209 8.01301C10.7202 8.01371 10.7195 8.01441 10.1907 7.48257ZM11.5343 12.0291C13.0613 13.5474 14.2096 14.1383 15.0763 14.2713C15.5192 14.3392 15.8763 14.285 16.1472 14.1841C16.28 14.1346 16.3858 14.0763 16.4658 14.0227C16.5058 13.9959 16.5392 13.9704 16.5663 13.9479C16.5799 13.9367 16.5919 13.9262 16.6024 13.9166C16.6077 13.9118 16.6126 13.9073 16.6171 13.903C16.6194 13.9008 16.6215 13.8987 16.6236 13.8967C16.6246 13.8957 16.6256 13.8947 16.6266 13.8937C16.6271 13.8932 16.6279 13.8925 16.6281 13.8923C16.6288 13.8916 16.6295 13.8909 16.1007 13.359C15.5719 12.8272 15.5726 12.8265 15.5733 12.8258C15.5735 12.8256 15.5742 12.8249 15.5747 12.8244C15.5756 12.8235 15.5765 12.8226 15.5774 12.8217C15.5793 12.82 15.581 12.8183 15.5827 12.8166C15.5862 12.8133 15.5895 12.8103 15.5926 12.8074C15.5988 12.8018 15.6044 12.7969 15.6094 12.7929C15.6192 12.7847 15.6265 12.7795 15.631 12.7764C15.6403 12.7702 15.6384 12.773 15.6236 12.7785C15.5991 12.7876 15.501 12.8189 15.3038 12.7886C14.8905 12.7253 14.02 12.3853 12.5919 10.9654L11.5343 12.0291ZM9.97365 2.40961C8.95434 1.04802 6.94996 0.83257 5.73263 2.04299L6.79027 3.10667C7.32195 2.578 8.26623 2.63181 8.77286 3.30855L9.97365 2.40961ZM4.75168 5.70305C4.73201 5.35694 4.89075 4.9954 5.22067 4.66736L4.16303 3.60368C3.62571 4.13795 3.20329 4.89425 3.2541 5.78816L4.75168 5.70305ZM19.4723 17.7636C19.1975 18.0369 18.9029 18.1908 18.6067 18.2184L18.7459 19.7119C19.4805 19.6434 20.0824 19.2723 20.5299 18.8273L19.4723 17.7636ZM11.0063 7.72922C11.9908 6.7503 12.064 5.2019 11.2346 4.09401L10.0338 4.99295C10.4373 5.53193 10.3773 6.23938 9.9487 6.66555L11.0063 7.72922ZM20.5251 14.2869C21.3429 14.7315 21.4703 15.7769 20.8929 16.3511L21.9505 17.4148C23.2908 16.0821 22.8775 13.8584 21.2415 12.9691L20.5251 14.2869ZM17.085 13.438C17.469 13.0562 18.0871 12.9616 18.6146 13.2483L19.331 11.9305C18.2474 11.3414 16.9026 11.5041 16.0273 12.3743L17.085 13.438Z" fill="currentcolor"/>
                                </svg>
                                İletişim Bilgileri
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">E-posta *</label>
                                    <input type="email" wire:model.defer="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70" placeholder="e-posta adresiniz" />
                                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Telefon *</label>
                                    <input type="text" wire:model.defer="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70" placeholder="5XX XXX XXXX"/>
                                    @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Randevu Detayları --}}
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="h-5 w-5 text-cyan-600 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 10H21M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Randevu Detayları
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Doktor Seçin *</label>
                                    <select wire:model.defer="doctor_id" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70">
                                        <option value="">Seçiniz</option>
                                        @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">Dr. {{ $doctor->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('doctor_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">İşlem Seçin *</label>
                                    <select wire:model.defer="traitment_id" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70">
                                        <option value="">Seçiniz</option>
                                        @foreach ($traitments as $traitment)
                                            <option value="{{ $traitment->id }}">{{ $traitment->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('traitment_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Randevu Tarihi *</label>
                                    <input type="datetime-local" wire:model.defer="date" min="{{ now()->format('Y-m-d\TH:i') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 bg-white/70" />
                                    @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="text-center">
                            <button type="submit" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-12 py-4 rounded-full hover:from-cyan-600 hover:to-teal-600 transition-all duration-200 font-semibold text-lg">
                                Randevu Al
                            </button>
                        </div>

                        {{-- Info Box --}}
                        <div class="mt-8 p-6 bg-gradient-to-br from-cyan-50 to-teal-50 rounded-xl border border-cyan-100">
                            <h4 class="font-semibold text-gray-900 mb-3">📋 Randevu Bilgileri</h4>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li>• Randevunuzdan 1 gün önce size hatırlatma araması yapılacaktır</li>
                                <li>• Randevu iptal işlemleri en az 24 saat öncesinden yapılmalıdır</li>
                                <li>• Randevu saatinizden 15 dakika önce salonumuzda bulunmanızı rica ederiz</li>
                                <li>• Randevu onayı e-posta ve SMS ile tarafınıza iletilecektir</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @else
        {{-- Onay ekranı --}}
        <section class="py-20">
            <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl border border-cyan-100 p-8 text-center">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-500 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Randevunuz Başarıyla Alındı!</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Sayın <span class="font-semibold text-cyan-600">{{ $name }} {{ $surname }}</span>, randevunuz başarıyla kaydedildi.
                    </p>

                    <div class="bg-gradient-to-br from-cyan-50 to-teal-50 rounded-xl p-6 mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
                            <div>
                                <p class="text-sm text-gray-500">Randevu Tarihi</p>
                                <p class="font-semibold text-gray-900">
                                    {{ \Carbon\Carbon::parse($date)->locale('tr')->translatedFormat('d F Y') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mt-2">Saat</p>
                                <p class="font-semibold text-gray-900">
                                    {{ \Carbon\Carbon::parse($date)->format('H:i') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">İşlem</p>
                                <p class="font-semibold text-gray-900">{{ optional($traitments->find($traitment_id))->name }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Uzman</p>
                                <p class="font-semibold text-gray-900">Dr. {{ optional($doctors->find($doctor_id))->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3 text-sm text-gray-600">
                        <p>📞 Randevunuzdan 1 gün önce size hatırlatma araması yapılacaktır.</p>
                        <p>📧 Randevu detayları e-posta adresinize gönderilmiştir.</p>
                        <p>⏰ Randevunuzdan en az 24 saat önce iptal edebilirsiniz.</p>
                    </div>

                    <div class="mt-8">
                        <button wire:click="newAppointment" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-3 rounded-full hover:from-cyan-600 hover:to-teal-600 transition-all duration-200 font-semibold">
                            Yeni Randevu Al
                        </button>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
