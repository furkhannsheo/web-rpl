<x-appDashboard>
    <div class="col-md-12">
        <div class="card shadow-sm border-0">
            <div class="card-header d-flex justify-content-between align-items-center bg-white border-bottom">
                <h4 class="card-title mb-0 fw-semibold">📩 Detail Saran</h4>
                <a href="{{ route('pesan.index') }}" class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>

            <div class="card-body p-4">
                <h2 class="fw-bold mb-3" style="font-size: 1.5rem; line-height:1.3;">
                    {{ $pesan->subjek }}
                </h2>

                <div class="d-flex flex-column text-muted mb-4" style="font-size: 0.9rem;">
                    <span><i class="fas fa-user me-1"></i> {{ $pesan->nama_lengkap }}</span>
                    <span><i class="fas fa-envelope me-1"></i> {{ $pesan->email }}</span>
                    <span><i class="fas fa-calendar-alt me-1"></i>
                        {{ $pesan->created_at->translatedFormat('d F Y H:i') }}</span>
                </div>

                <div class="content-pesan" style="line-height: 1.8; font-size: 1rem; color: #333;">
                    {!! nl2br(e($pesan->pesan)) !!}
                </div>
            </div>
        </div>
    </div>
</x-appDashboard>
