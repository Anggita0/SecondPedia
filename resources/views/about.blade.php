<x-app-layout>
    <x-slot name="slot">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                <h1 class="text-3xl font-bold text-center text-gray-900">Tentang Kami</h1>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6 space-y-6">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-900 mb-3">Visi Kami</h5>
                            <p class="text-gray-600">
                                Menjadi platform terpercaya yang memberikan solusi terbaik untuk kebutuhan Anda.
                            </p>
                        </div>

                        <div>
                            <h5 class="text-xl font-semibold text-gray-900 mb-3">Misi Kami</h5>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Memberikan layanan berkualitas tinggi</li>
                                <li>Mengutamakan kepuasan pelanggan</li>
                                <li>Berinovasi secara berkelanjutan</li>
                                <li>Membangun hubungan jangka panjang dengan pelanggan</li>
                            </ul>
                        </div>

                        <div>
                            <h5 class="text-xl font-semibold text-gray-900 mb-3">Hubungi Kami</h5>
                            <div class="text-gray-600 space-y-1">
                                <p>Alamat: Jl. Jawa No 1, Jember</p>
                                <p>Email: natasya@gmail.com</p>
                                <p>Telepon: 082257388706</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section -->
        @include('components.footer')
    </x-slot>
</x-app-layout>
