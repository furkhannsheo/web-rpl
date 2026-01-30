<x-appDashboard>
    <h1 class="fw-bold text-dark" style="font-weight: 900;"> Tambah Galeri </h1>
    <hr class="mb-4">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Input Galeri Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="judul" class="fw-semibold">Judul</label>
                        <input type="text" id="judul" name="judul"
                            class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                        @error('judul')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group mb-3">
                        <label for="deskripsi" class="fw-semibold">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
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
                            class="form-control @error('gambar') is-invalid @enderror" style="display:none;">
                        @error('gambar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="card-action d-flex justify-content-end">
                        <button type="submit" class="btn btn-success me-2"><i class="fas fa-check me-1"></i>
                            Submit</button>
                        <a href="{{ route('galeri.index') }}" class="btn btn-danger"><i class="fas fa-times me-1"></i>
                            Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appDashboard>
<x-inputImageLogic />
