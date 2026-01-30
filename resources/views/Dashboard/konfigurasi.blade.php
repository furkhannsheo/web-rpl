<x-appDashboard>

    <h1 class="fw-bold text-dark" style="font-weight: 900;"> Konfigurasi Website </h1>
    <hr class="mb-4">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Edit Isi</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('konfigurasi.update', $konfigurasi->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Banner Website --}}
                    {{-- Banner Website --}}
                    <div class="form-group mb-3">
                        <label class="fw-semibold">Banner Website</label>

                        <div class="image-preview-container mb-2">
                            @if ($konfigurasi->banner_web)
                                <img class="gambar-preview img-thumbnail"
                                    src="{{ asset('storage/' . $konfigurasi->banner_web) }}"
                                    style="max-height:200px; display:block;">
                                <span class="placeholder-text hidden">
                                    Seret & lepas gambar di sini atau klik untuk memilih file
                                </span>
                            @else
                                <img class="gambar-preview img-thumbnail" style="display:none;">
                                <span class="placeholder-text">
                                    Seret & lepas gambar di sini atau klik untuk memilih file
                                </span>
                            @endif
                        </div>

                        <input type="file" name="banner_web"
                            class="gambar-input d-none @error('banner_web') is-invalid @enderror">

                        @error('banner_web')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    {{-- Gambar Sekolah --}}
                    {{-- Gambar Sekolah --}}
                    <div class="form-group mb-3">
                        <label class="fw-semibold">Gambar Sekolah</label>

                        <div class="image-preview-container mb-2">
                            @if ($konfigurasi->gambar_sekolah)
                                <img class="gambar-preview img-thumbnail"
                                    src="{{ asset('storage/' . $konfigurasi->gambar_sekolah) }}"
                                    style="max-height:200px; display:block;">
                                <span class="placeholder-text hidden">
                                    Seret & lepas gambar di sini atau klik untuk memilih file
                                </span>
                            @else
                                <img class="gambar-preview img-thumbnail" style="display:none;">
                                <span class="placeholder-text">
                                    Seret & lepas gambar di sini atau klik untuk memilih file
                                </span>
                            @endif
                        </div>

                        <input type="file" name="gambar_sekolah"
                            class="gambar-input d-none @error('gambar_sekolah') is-invalid @enderror">

                        @error('gambar_sekolah')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    {{-- Kata Sambutan --}}
                    <div class="form-group mb-3">
                        <label for="kata_sambutan" class="fw-semibold">Kata Sambutan</label>
                        <textarea id="kata_sambutan" name="kata_sambutan" class="form-control @error('kata_sambutan') is-invalid @enderror"
                            rows="4">{{ old('kata_sambutan', $konfigurasi->kata_sambutan) }}</textarea>
                        @error('kata_sambutan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Nama Kepala Sekolah --}}
                    <div class="form-group mb-3">
                        <label for="nama_kepala_sekolah" class="fw-semibold">Nama Kepala Sekolah</label>
                        <input type="text" id="nama_kepala_sekolah" name="nama_kepala_sekolah"
                            class="form-control @error('nama_kepala_sekolah') is-invalid @enderror"
                            value="{{ old('nama_kepala_sekolah', $konfigurasi->nama_kepala_sekolah) }}">
                        @error('nama_kepala_sekolah')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Foto Kepala Sekolah --}}
                    <div class="form-group mb-3">
                        <label class="fw-semibold">Foto Kepala Sekolah</label>

                        <div class="image-preview-container mb-2">
                            @if ($konfigurasi->foto_kepala_sekolah)
                                <img class="gambar-preview img-thumbnail"
                                    src="{{ asset('storage/' . $konfigurasi->foto_kepala_sekolah) }}"
                                    style="max-height:200px; display:block;">
                                <span class="placeholder-text hidden">
                                    Seret & lepas gambar di sini atau klik untuk memilih file
                                </span>
                            @else
                                <img class="gambar-preview img-thumbnail" style="display:none;">
                                <span class="placeholder-text">
                                    Seret & lepas gambar di sini atau klik untuk memilih file
                                </span>
                            @endif
                        </div>

                        <input type="file" name="foto_kepala_sekolah"
                            class="gambar-input d-none @error('foto_kepala_sekolah') is-invalid @enderror">

                        @error('foto_kepala_sekolah')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- PPDB --}}
                    <div class="form-group mb-3">
                        <label for="headline_ppdb" class="fw-semibold">Headline PPDB</label>
                        <input type="text" id="headline_ppdb" name="headline_ppdb"
                            class="form-control @error('headline_ppdb') is-invalid @enderror"
                            value="{{ old('headline_ppdb', $konfigurasi->headline_ppdb) }}">
                        @error('headline_ppdb')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="teks_ppdb" class="fw-semibold">Teks PPDB</label>
                        <textarea id="teks_ppdb" name="teks_ppdb" class="form-control @error('teks_ppdb') is-invalid @enderror" rows="4">{{ old('teks_ppdb', $konfigurasi->teks_ppdb) }}</textarea>
                        @error('teks_ppdb')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="fw-semibold">Gambar PPDB</label>

                        <div class="image-preview-container mb-2">
                            @if ($konfigurasi->gambar_ppdb)
                                <img class="gambar-preview img-thumbnail"
                                    src="{{ asset('storage/' . $konfigurasi->gambar_ppdb) }}"
                                    style="max-height:200px; display:block;">
                                <span class="placeholder-text hidden">
                                    Seret & lepas gambar di sini atau klik untuk memilih file
                                </span>
                            @else
                                <img class="gambar-preview img-thumbnail" style="display:none;">
                                <span class="placeholder-text">
                                    Seret & lepas gambar di sini atau klik untuk memilih file
                                </span>
                            @endif
                        </div>

                        <input type="file" name="gambar_ppdb"
                            class="gambar-input d-none @error('gambar_ppdb') is-invalid @enderror">

                        @error('gambar_ppdb')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    {{-- Statistik --}}
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label class="fw-semibold">Statistik 1 - Judul</label>
                            <input type="text" name="statistik_satu_judul"
                                class="form-control @error('statistik_satu_judul') is-invalid @enderror"
                                value="{{ old('statistik_satu_judul', $konfigurasi->statistik_satu_judul) }}">
                            @error('statistik_satu_judul')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label class="fw-semibold">Statistik 1 - Deskripsi</label>
                            <input type="text" name="statistik_satu_deskripsi"
                                class="form-control @error('statistik_satu_deskripsi') is-invalid @enderror"
                                value="{{ old('statistik_satu_deskripsi', $konfigurasi->statistik_satu_deskripsi) }}">
                            @error('statistik_satu_deskripsi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label class="fw-semibold">Statistik 2 - Judul</label>
                            <input type="text" name="statistik_dua_judul"
                                class="form-control @error('statistik_dua_judul') is-invalid @enderror"
                                value="{{ old('statistik_dua_judul', $konfigurasi->statistik_dua_judul) }}">
                            @error('statistik_dua_judul')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label class="fw-semibold">Statistik 2 - Deskripsi</label>
                            <input type="text" name="statistik_dua_deskripsi"
                                class="form-control @error('statistik_dua_deskripsi') is-invalid @enderror"
                                value="{{ old('statistik_dua_deskripsi', $konfigurasi->statistik_dua_deskripsi) }}">
                            @error('statistik_dua_deskripsi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label class="fw-semibold">Statistik 3 - Judul</label>
                            <input type="text" name="statistik_tiga_judul"
                                class="form-control @error('statistik_tiga_judul') is-invalid @enderror"
                                value="{{ old('statistik_tiga_judul', $konfigurasi->statistik_tiga_judul) }}">
                            @error('statistik_tiga_judul')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label class="fw-semibold">Statistik 3 - Deskripsi</label>
                            <input type="text" name="statistik_tiga_deskripsi"
                                class="form-control @error('statistik_tiga_deskripsi') is-invalid @enderror"
                                value="{{ old('statistik_tiga_deskripsi', $konfigurasi->statistik_tiga_deskripsi) }}">
                            @error('statistik_tiga_deskripsi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Action Button --}}
                    <div class="card-action d-flex justify-content-end">
                        <button type="submit" class="btn btn-success me-2">
                            <i class="fas fa-check me-1"></i> Update
                        </button>
                        <a href="{{ route('beranda.admin') }}" class="btn btn-danger">
                            <i class="fas fa-times me-1"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appDashboard>

<x-inputImageLogic />
