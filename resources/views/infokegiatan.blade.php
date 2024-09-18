@extends('layouts.app')

@section('content')
            <!-- Main Content -->
            <main id="main-content" class="container mx-auto py-8 px-4">
                <!-- Artikel Section -->
                <section id="artikel" class="py-16 bg-white text-gray-700" data-aos="fade-up">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center mb-12">
                            <h2 class="text-4xl font-bold text-[#018577] mb-4">Info Kegiatan</h2>
                            <p class="text-lg font-medium text-gray-600">Baca kegiatan terbaru tentang Desa Sukamulya dan topik terkait.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach ($kegiatan as $item)
                            <!-- Artikel Item -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                                @if ($item->gambar)
                                <img src="{{ asset('uploads/' . $item->gambar) }}" alt="Artikel" class="w-full h-64 object-cover object-center">
                                @endif
                                <hr>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-[#018577] mb-6">
                                    <a href="{{ route('kegiatan-post', $item->id) }}" class="hover:underline">{{ $item->judul}}</a>
                                </h3>
                                </div>
                            </div>
                            @endforeach
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