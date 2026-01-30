<x-appDashboard>
    <h1 class="fw-bold text-dark" style="font-weight: 900;"> Tambah Prestasi </h1>
    <hr class="mb-4">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Input Prestasi Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama_kejuaraan" class="fw-semibold">Nama Kejuaraan</label>
                        <input type="text" id="nama_kejuaraan" name="nama_kejuaraan"
                            class="form-control @error('nama_kejuaraan') is-invalid @enderror"
                            value="{{ old('nama_kejuaraan') }}">
                        @error('nama_kejuaraan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="siapa_yang_meraih" class="fw-semibold">Siapa yang Meraih</label>
                        <textarea id="siapa_yang_meraih" name="siapa_yang_meraih"
                            class="form-control @error('siapa_yang_meraih') is-invalid @enderror">{{ old('siapa_yang_meraih') }}</textarea>
                        @error('siapa_yang_meraih')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi_singkat" class="fw-semibold">Deskripsi Singkat</label>
                        <input type="text" id="deskripsi_singkat" name="deskripsi_singkat"
                            class="form-control @error('deskripsi_singkat') is-invalid @enderror"
                            value="{{ old('deskripsi_singkat') }}">
                        @error('deskripsi_singkat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="gambar" class="fw-semibold">Gambar</label>
                        <div id="image-preview-container" class="image-preview-container mb-2">
                            <span class="placeholder-text">Seret & lepas gambar di sini atau klik untuk memilih
                                file</span>
                            <img id="gambar-preview" src="#" alt="Pratinjau Gambar">
                        </div>
                        <input type="file" id="gambar" name="gambar"
                            class="form-control @error('gambar') is-invalid @enderror" style="display: none;">
                        @error('gambar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="card-action d-flex justify-content-end">
                        <button type="submit" class="btn btn-success me-2"><i class="fas fa-check me-1"></i>
                            Submit</button>
                        <a href="{{ route('prestasi.index') }}" class="btn btn-danger"><i class="fas fa-times me-1"></i>
                            Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appDashboard>
<x-inputImageLogic />
