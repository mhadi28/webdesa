@extends('layouts.app')

@section('content')
<main class="container bg-white mx-auto px-6 py-6 flex flex-grow">
    <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">
        <img class="w-full my-2 rounded-lg" src="" alt="">
        <h1 class="text-4xl font-bold text-left text-[#018577]">
            {{ $artikel->judul }}
        </h1>
        <div class="mt-2 flex justify-between items-center">
            <div class="flex py-5 text-base items-center">
                {{-- <img class="w-10 h-10 rounded-full mr-3" src="" alt="avatar"> --}}
                <span class="mr-1 font-semibold text-[#018577]">{!! $artikel->penulis !!}</span>
                <span class="font-sans text-black text-sm mr-1"> | {{$artikel ->created_at->diffForHumans()}}</span>
            </div>
            <div class="flex items-center">
                <!-- Additional content can be placed here -->
            </div>
        </div>

        <!-- Artikel Image -->
        @if ($artikel->gambar)
            <div class="py-3 text-lg text-justify text-gray-800 article-content">
                <img src="{{ asset('uploads/' . $artikel->gambar) }}" alt="Artikel Image" class="w-full h-max object-cover object-center">
            </div>
        @endif

        <div class="article-actions-bar my-6 flex text-sm items-center justify-between border-t border-b border-[#018577] py-4 px-2">
            <div class="flex items-center">
                <div class="article-content py-2 text-gray-800 text-lg text-justify">
                    {!! $artikel->isi !!}
                </div>
            </div>
        </div>

        <!-- Artikel Lainnya -->
        <div class="py-3 text-lg text-justify text-gray-800 article-content" data-aos="fade-up">
            <h3 class="text-xl font-bold text-[#018577] mb-2">Artikel Lainnya</h3>
            <div class="flex items-center space-x-4 mt-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($artikels as $otherArtikel)
                        <!-- Artikel Item -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            @if ($otherArtikel->gambar)
                                <img src="{{ asset('uploads/' . $otherArtikel->gambar) }}" alt="Artikel Image" class="overflow-hidden w-full h-32 object-fit object-center">
                            @endif
                            <div class="p-6">
                                <h3 class="text-base font-medium text-[#018577] mb-6">
                                    <a href="{{ route('artikel-post', $otherArtikel->id) }}"> {{ $otherArtikel->judul }}</a>
                                </h3>
                                <a href="{{ route('artikel-post', $otherArtikel->id) }}" class="bg-green-700 hover:bg-green-900 text-white py-2 px-8 my-4 rounded-lg transition duration-300">Baca Artikel</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </article>
</main>
@endsection

@push('scripts')
<script>
    AOS.init();
</script>
@endpush
