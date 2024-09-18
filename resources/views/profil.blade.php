@extends('layouts.app')

@section('content')
        <!-- Main Content -->
        <main id="main-content" class="container mx-auto py-8 px-4 relative z-40">
            <!-- Profil Desa Section -->
            <section id="profil-desa" class="py-16 bg-white text-gray-700" data-aos="fade-up">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-[#018577] mb-4">Profil Desa Sukamulya</h2>
                        <p class="text-lg font-medium text-gray-600">Kenali lebih dekat tentang Desa Sukamulya, sejarah, dan potensinya.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/images/logodesa_ori.png') }}" alt="Desa Sukamulya" class="rounded-lg shadow-transparent max-w-full h-64" data-aos="zoom-in">
                        </div>
                        <div class="flex flex-col justify-center" data-aos="fade-left">
                            <h3 class="text-2xl font-bold text-[#018577] mb-4">Sejarah Desa Sukamulya</h3>
                            <p class="text-base leading-relaxed mb-4">Desa Sukamulya merupakan hasil pemekaran dari sebagian wilayah Kecamatan Balaraja dan Kecamatan Jayanti pada tahun 2006.</p>
                            <h3 class="text-2xl font-bold text-[#018577] mb-4">Potensi Desa</h3>
                            <p class="text-base leading-relaxed mb-4">Desa Sukamulya memiliki berbagai potensi di bidang pertanian, pariwisata, dan industri kreatif. Masyarakatnya yang ramah dan kreatif menjadi salah satu kekuatan desa ini.</p>
                            {{-- <a href="#struktur-organisasi" class="bg-green-700 hover:bg-green-900 text-white py-2 px-6 rounded-lg transition duration-300 self-start">Baca Selengkapnya</a> --}}
                        </div>
                    </div>
                    <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">
                        <div class="flex flex-col items-center" data-aos="fade-up">
                            <h4 class="text-xl font-bold text-[#018577] mb-2">
                                <i class="fa-solid fa-user fa-2x mb-2"></i>
                                <span>Populasi</span>
                            </h4>
                            <p class="text-lg text-gray-600">&plusmn; 9,200 Jiwa</p>
                        </div>
                        <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
                            <h4 class="text-xl font-bold text-[#018577] mb-2">
                                <i class="fa-solid fa-globe fa-2x mb-2"></i>
                                <span>Luas Desa</span>
                            </h4>
                            <p class="text-lg text-gray-600">&plusmn; 2,9 Km²</p>
                        </div>
                        <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                            <h4 class="text-xl font-bold text-[#018577] mb-2">
                                <i class="fa-solid fa-children fa-2x mb-2"></i>
                                <span>Jumlah Balita</span>
                            </h4>
                            <p class="text-lg text-gray-600">&plusmn; 350 Balita</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Struktur Organisasi Section -->
            <section id="struktur" class="flex justify-center items-center h-screen" data-aos="fade-up">
                <div class="bg-[#018577] p-6 rounded-lg shadow-lg w-full max-w-5xl relative">
                    <h1 class="text-white text-center text-2xl font-bold mb-4">
                        BAGAN STRUKTUR ORGANISASI DAN TATA KERJA PEMERINTAHAN DESA SUKAMULYA
                    </h1>
                    <h2 class="text-white text-center mb-4">KECAMATAN SUKAMULYA KABUPATEN TANGERANG</h2>
                    <div class="bg-white p-4 justify-center rounded-lg shadow-inner relative">
                        <img src="{{ asset('assets/images/struktur.jpg') }}" alt="desa sukamulya">
                    </div>
                </div>
        </section>
        </main>
@endsection
@push('scripts')
<script>
    AOS.init();
</script>
@endpush
