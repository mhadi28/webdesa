@extends('layouts.app')

@section('content')
<main class="container mx-auto py-8 px-4">
    <section id="infografis" class="py-16 bg-white text-gray-700">
        <div class="text-center mx-auto mb-12">
            <h2 class="text-4xl font-bold text-[#018577] mb-4">Infografis Data Stunting pada Tahun {{ $singleInfografis->tahun }}</h2>

        </div>
        <div id="chart" class="flex flex-grid h-screen">
            <canvas id="myChart" class="flex-grow w-full mx-auto px-4 sm:px-6 lg:px-8"></canvas>
        </div>

    </section>
</main>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');

    // Data dinamis dari controller
    let labels = @json($allInfografis->pluck('bulan'));
    let dataJumlah = @json($allInfografis->pluck('sum_stunting'));

    // Daftar bulan dalam urutan yang benar
    const bulanUrutan = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    // Mengurutkan data berdasarkan urutan bulan
    let sortedData = labels.map((label, index) => ({
        bulan: label,
        jumlah: dataJumlah[index]
    })).sort((a, b) => bulanUrutan.indexOf(a.bulan) - bulanUrutan.indexOf(b.bulan));

    // Memisahkan kembali labels dan dataJumlah yang sudah diurutkan
    labels = sortedData.map(item => item.bulan);
    dataJumlah = sortedData.map(item => item.jumlah);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels, // Nama bulan yang sudah diurutkan
            datasets: [{
                label: 'Data Anak yang Mengalami Stunting',
                data: dataJumlah, // Jumlah stunting di setiap bulan yang sudah diurutkan
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush
