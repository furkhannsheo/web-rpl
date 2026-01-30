<x-appDashboard>
    <div class="col-md-12">
        <div class="card shadow-sm border-0">
            <div class="card-header d-flex justify-content-between align-items-center bg-white border-bottom">
                <h4 class="card-title mb-0 fw-semibold">📰 Detail Berita</h4>
                <a href="{{ route('berita.index') }}" class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>

            <div class="card-body p-4">
                <h2 class="fw-bold mb-3" style="font-size: 2rem; line-height:1.3;">
                    {{ $berita->judul }}
                </h2>

                <div class="d-flex align-items-center text-muted mb-4" style="font-size: 0.9rem;">
                    <span><i class="fas fa-tag me-1"></i> <span
                            class="fw-semibold">{{ $berita->kategori->nama }}</span></span>
                    <span class="ms-4"><i class="fas fa-calendar-alt me-1"></i>
                        {{ $berita->created_at->translatedFormat('d F Y') }}</span>
                </div>

                <div class="mb-4">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita"
                        class="img-fluid rounded shadow-sm w-100" style="max-height: 450px; object-fit: cover;">
                </div>

                <div class="content-berita" style="line-height: 1.8; font-size: 1rem; color: #333;">
                    {!! nl2br(e($berita->isi)) !!}
                </div>
            </div>
        </div>
    </div>
</x-appDashboard>
