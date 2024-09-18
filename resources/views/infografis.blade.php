@extends('layouts.app')

@section('content')
<main class="container mx-auto py-8 px-4">
    <section class="py-16 bg-white text-gray-700">
        <div class="flex flex-col justify-center items-center min-h-screen">
            <div class="text-center mx-auto mb-12">
                <h2 class="text-4xl font-bold text-[#018577] mb-4">Infografis</h2>
                <p class="text-lg font-medium text-gray-600">Informasi tentang stunting di Desa Sukamulya</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8 mx-auto">
                @if($grafikPerTahun->isNotEmpty())
                    @foreach ($grafikPerTahun as $grafik)
                        @if($grafik && isset($grafik->tahun))
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col p-6">
                                <h2 class="text-xl font-bold text-[#018577] mb-6 mx-auto">
                                    <a href="{{ route('infografis-post', $grafik->tahun) }}" class="hover:underline">
                                        Infografis Data Stunting pada Tahun {{ $grafik->tahun }}
                                    </a>
                                </h2>
                            </div>
                        @endif
                    @endforeach
                @else
                    <p>Tidak ada data infografis yang tersedia.</p>
                @endif
            </div>
        </div>
    </section>
</main>
@endsection
