@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="md: bg-cover bg-center h-screen mx-auto text-white" style="background-image: url('{{ asset('assets/images/desa.png') }}');">
    <div class="bg-black bg-opacity-50 h-screen flex flex-col justify-center items-center px-4">
        <h1 class="text-3xl md:text-5xl font-bold mb-4 text-center">Selamat Datang di Desa Sukamulya Kabupaten Tangerang</h1>
        <p class="text-base md:text-lg font-medium mb-6 text-center">Edukasi Kesehatan Masyarakat Berbasis Digital</p>
        <a href="/artikel" class="bg-[#018577] hover:bg-[#016956] text-white py-2 px-6 rounded-lg transition duration-300">Jelajahi Sekarang</a>
    </div>
</section>
@endsection