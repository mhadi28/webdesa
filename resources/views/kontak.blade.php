@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main id="main-content" class="container mx-auto py-8 px-4">

        <!-- Contact Us Section -->
        <section id="contact-us" class="py-16 bg-white text-gray-700" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-[#018577] mb-4">Hubungi Kami</h2>
                    <p class="text-lg font-medium text-gray-600">Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang Desa Sukamulya, jangan ragu untuk menghubungi kami.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col justify-center items-center" data-aos="fade-right">
                        <h3 class="text-2xl font-bold text-[#018577] mb-4">Alamat</h3>
                        <p class="text-base leading-relaxed mb-4">Jl. Raya Kresek Kec. Sukamulya, Kab. Tangerang, Banten</p>
                        <h3 class="text-2xl font-bold text-[#018577] mb-4">Kontak</h3>
                        <p class="text-base leading-relaxed mb-4">Email: info@desasukamulya.id</p>
                        <p class="text-base leading-relaxed mb-4">Telepon: (021) 123-4567</p>
                    </div>
                    <div class="flex justify-center items-center" data-aos="fade-left">
                        <form action="#" method="post" class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                                <input type="text" id="name" name="name" placeholder="Nama Anda" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-700" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email" id="email" name="email" placeholder="Email Anda" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-700" required>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan</label>
                                <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda..." class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-700" required></textarea>
                            </div>
                            <button type="submit" class="bg-green-700 hover:bg-green-900 text-white py-2 px-6 rounded-lg transition duration-300">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
                <!-- Peta -->
                <div id="map" class="h-96 mt-8"></div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
<script>
    AOS.init();

    // Inisialisasi peta Leaflet
    var map = L.map('map').setView([-6.165988, 106.42465], 13); // Koordinat dan zoom awal

    // Tambahkan tile layer untuk peta dasar menggunakan OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    // Tambahkan marker pada peta
    L.marker([-6.165988, 106.42465]).addTo(map)
        .bindPopup('<b>Desa Sukamulya</b><br>Jl. Raya Kresek Kec. Sukamulya, Kab. Tangerang, Banten')
        .openPopup();
</script>
@endpush