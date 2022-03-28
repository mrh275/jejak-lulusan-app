@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Dashboard</h1>

        <div class="header">
            <div class="card post">
                <div class="card-body">
                    <span class="count-number">{{ count($alumni) }}</span>
                    <h2 class="header-title">Alumni</h2>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="card-footer">
                    <a href="{{ url('admin/datatable-biodata') }}" class="header-readMore">
                        <span>See more</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
            <div class="card comment">
                <div class="card-body">
                    <span class="count-number">{{ $alumni->where('status_lulusan', 1)->count() + $alumni->where('status_lulusan', 3)->count() }}</span>
                    <h2 class="header-title">Kuliah</h2>
                    <i class='bx bxs-graduation' ></i>
                </div>
                <div class="card-footer">
                    <a href="{{ url('admin/datatable-kuliah') }}" class="header-readMore">
                        <span>See more</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
            <div class="card visitor">
                <div class="card-body">
                    <span class="count-number">{{ $alumni->where('status_lulusan', 2)->count() + $alumni->where('status_lulusan', 3)->count() }}</span>
                    <h2 class="header-title">Kerja</h2>
                    <i class='bx bxs-briefcase'></i>
                </div>
                <div class="card-footer">
                    <a href="{{ url('admin/datatable-pekerjaan') }}" class="header-readMore">
                        <span>See more</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
            <div class="card user">
                <div class="card-body">
                    <span class="count-number">
                        {{ $angkatan }}
                    </span>
                    <h2 class="header-title">Angkatan</h2>
                    <i class='bx bxs-coin-stack'></i>
                </div>
                <div class="card-footer">
                    <a href="../page/list-post.html" class="header-readMore">
                        <span>See more</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="first-container">
            <div class="popular-post-wrapper stat-card">
                <div class="popular-post-head">
                    <h3 class="popular-post-title">Update Aktifitas</h3>
                </div>
                <div class="popular-post-body">

                </div>
            </div>
            <div class="visitor-chart stat-card">
                <div class="visitor-chart-header">
                    <h4 class="visitor-title">Statistik Alumni</h4>
                </div>
                <div class="visitor-chart-body">
                    <h3 class="total-visitor">{{ $alumni->count() }} alumni</h3>
                    <canvas id="alumni-chart"></canvas>
                </div>
            </div>
        </div>

        {{-- <div class="second-container">
            <div class="stat-card">

            </div>
            <div class="stat-card">

            </div>
        </div> --}}

    </div>
@endsection

@push('scripts')
    <script>
        const labels = [
            2019,
            2020,
            2021,
            2022
        ];

        const data = {
            labels: labels,
            datasets: [
                {
                label: "{{ $alumni->where('status_lulusan', 1)->count() }} Kuliah",
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                data: [
                            {{ $alumni->where('tahun_lulus', 2019)->where('status_lulusan', 1)->count() }},
                            {{ $alumni->where('tahun_lulus', 2020)->where('status_lulusan', 1)->count() }},
                            {{ $alumni->where('tahun_lulus', 2021)->where('status_lulusan', 1)->count() }},
                            {{ $alumni->where('tahun_lulus', 2022)->where('status_lulusan', 1)->count() }},
                        ],
                },
                {
                label: "{{ $alumni->where('status_lulusan', 2)->count() }} Kerja",
                backgroundColor: 'rgba(00, 99, 255, 0.5)',
                borderColor: 'rgba(00, 99, 255, 1)',
                data: [
                        {{ $alumni->where('tahun_lulus', 2019)->where('status_lulusan', 2)->count() }},
                        {{ $alumni->where('tahun_lulus', 2020)->where('status_lulusan', 2)->count() }},
                        {{ $alumni->where('tahun_lulus', 2021)->where('status_lulusan', 2)->count() }},
                        {{ $alumni->where('tahun_lulus', 2022)->where('status_lulusan', 2)->count() }},
                    ],
                },
                {
                label: "{{ $alumni->where('status_lulusan', 3)->count() }} Kuliah dan Kerja",
                backgroundColor: 'rgba(245,158,11,0.5)',
                borderColor: 'rgba(245,158,11,1)',
                data: [
                        {{ $alumni->where('tahun_lulus', 2019)->where('status_lulusan', 3)->count() }},
                        {{ $alumni->where('tahun_lulus', 2020)->where('status_lulusan', 3)->count() }},
                        {{ $alumni->where('tahun_lulus', 2021)->where('status_lulusan', 3)->count() }},
                        {{ $alumni->where('tahun_lulus', 2022)->where('status_lulusan', 3)->count() }},
                    ],
                },
            ]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('alumni-chart'),
            config
        );
    </script>
@endpush    
