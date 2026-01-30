<x-appDashboard>
    <!-- Widget Sapaan -->
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card shadow-lg border-0 bg-gradient-primary"
                style="background: linear-gradient(135deg, #1e3c72, #2a5298);">
                <div
                    class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center text-white py-4 px-4">
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                        <div class="me-3">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div>
                            <h2 class="fw-bold mb-1">Selamat Datang, <span class="text-warning">{{ Auth::user()->name }}</span> </h2>
                            <p class="mb-0">Today is {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
                        </div>
                    </div>
                    <div class="text-md-end text-center">
                        <a href="{{ route('alumni.index') }}" class="btn btn-warning fw-bold">
                            Mulai Kelola <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Widget Statistik -->
    <div class="row">
        <!-- Alumni Aktif -->
        <div class="col-md-3 mt-3 ">
            <div class="card card-secondary bg-primary-gradient h-100">
                <div class="card-body skew-shadow d-flex flex-column justify-content-between">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3"><i class="fas fa-user-graduate fa-2x text-white"></i></div>
                        <h3 class="fw-bold mb-0 text-white">Alumni Aktif</h3>
                    </div>
                    <h2 class="mb-3 text-white">{{ $alumniAktif }}</h2>
                    <a href="{{ route('alumni.index') }}" class="text-small text-uppercase fw-bold op-8 text-white">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Guru -->
        <div class="col-md-3 mt-3 ">
            <div class="card card-secondary bg-warning-gradient h-100">
                <div class="card-body bubble-shadow d-flex flex-column justify-content-between">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3"><i class="fas fa-chalkboard-teacher fa-2x text-white"></i></div>
                        <h3 class="fw-bold mb-0 text-white">Guru</h3>
                    </div>
                    <h2 class="mb-3 text-white">{{ $jumlahGuru }}</h2>
                    <a href="{{ route('guru.index') }}" class="text-small text-uppercase fw-bold op-8 text-white">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Berita -->
        <div class="col-md-3 mt-3 ">
            <div class="card card-secondary bg-success-gradient h-100">
                <div class="card-body curves-shadow d-flex flex-column justify-content-between">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3"><i class="fas fa-newspaper fa-2x text-white"></i></div>
                        <h3 class="fw-bold mb-0 text-white">Berita</h3>
                    </div>
                    <h2 class="mb-3 text-white">{{ $jumlahBerita }}</h2>
                    <a href="{{ route('berita.index') }}" class="text-small text-uppercase fw-bold op-8 text-white">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Prestasi -->
        <div class="col-md-3 mt-3 ">
            <div class="card card-secondary bg-danger-gradient h-100">
                <div class="card-body skew-shadow d-flex flex-column justify-content-between">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3"><i class="fas fa-trophy fa-2x text-white"></i></div>
                        <h3 class="fw-bold mb-0 text-white">Prestasi</h3>
                    </div>
                    <h2 class="mb-3 text-white">{{ $jumlahPrestasi }}</h2>
                    <a href="{{ route('prestasi.index') }}" class="text-small text-uppercase fw-bold op-8 text-white">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-appDashboard>
