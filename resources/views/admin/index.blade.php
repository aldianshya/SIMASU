@extends('layout.app')
@section('main')
    <div class="main-content flex-grow-1 p-4" style="background: #f8f9fa;">
        <h3 class="mb-4" style="color:#0b3c91; font-weight: 600;">Dashboard</h3>

        <div class="row gx-4 gy-4 mb-5">
            <div class="col-md-3">
                <div class="card shadow-sm p-3" style="border-radius: 12px; background: #fff;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div style="font-size: 14px; font-weight: 600; color:#0b3c91;">Total Surat Keluar</div>
                            <div style="font-size: 28px; font-weight: 700; color:#0b3c91;">10293</div>
                        </div>
                        <div style="background:#ffd4bf; border-radius: 50%; padding: 12px;">
                            <i class="bi bi-stack" style="font-size: 20px; color:#ff7a41;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-3" style="border-radius: 12px; background: #fff;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div style="font-size: 14px; font-weight: 600; color:#0b3c91;">Jumlah Template</div>
                            <div style="font-size: 28px; font-weight: 700; color:#0b3c91;">89,000</div>
                        </div>
                        <div style="background:#d2f8e6; border-radius: 50%; padding: 12px;">
                            <i class="bi bi-file-earmark-text" style="font-size: 20px; color:#35d49a;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik -->
        <div class="card p-4 shadow-sm" style="border-radius: 12px; background: #fff;">
            <h5 class="mb-3" style="color:#0b3c91; font-weight: 600;">Statistik surat masuk dan keluar tahun 2025</h5>
            <canvas id="suratChart" height="300"></canvas>
            <div class="mt-2 d-flex justify-content-center gap-4" style="font-size: 14px; color:#0b3c91;">
                <div><span style="background: #ff7a41; display:inline-block; width:14px; height:14px; border-radius:4px; margin-right:6px;"></span>masuk</div>
                <div><span style="background: #c199ff; display:inline-block; width:14px; height:14px; border-radius:4px; margin-right:6px;"></span>Keluar</div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('suratChart').getContext('2d');

        const gradientMasuk = ctx.createLinearGradient(0, 0, 0, 200);
        gradientMasuk.addColorStop(0, 'rgba(255, 122, 65, 0.7)');
        gradientMasuk.addColorStop(1, 'rgba(255, 122, 65, 0.2)');

        const gradientKeluar = ctx.createLinearGradient(0, 0, 0, 200);
        gradientKeluar.addColorStop(0, 'rgba(193, 153, 255, 0.7)');
        gradientKeluar.addColorStop(1, 'rgba(193, 153, 255, 0.2)');

        const suratChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    '5k', '10k', '15k', '20k', '25k', '30k', '35k', '40k', '45k', '50k', '55k', '60k'
                ],
                datasets: [
                    {
                        label: 'masuk',
                        data: [20, 35, 10, 5, 55, 80, 95, 30, 45, 65, 60, 20],
                        backgroundColor: gradientMasuk,
                        borderColor: 'rgba(255, 122, 65, 1)',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 0,
                    },
                    {
                        label: 'Keluar',
                        data: [75, 40, 25, 60, 45, 20, 10, 55, 20, 10, 90, 95],
                        backgroundColor: gradientKeluar,
                        borderColor: 'rgba(193, 153, 255, 1)',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 0,
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: { color: '#0b3c91' }
                    },
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: { color: '#0b3c91' },
                        grid: {
                            color: '#eaeaea'
                        }
                    }
                }
            }
        });
    </script>

    <!-- Optional: load Bootstrap Icons CDN for icons used -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection
