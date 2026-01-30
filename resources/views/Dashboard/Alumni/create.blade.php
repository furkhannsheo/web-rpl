<x-appDashboard>
    <h1 class="fw-bold text-dark" style="font-weight: 900;"> Tambah Alumni </h1>
    <hr class="mb-4">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Input Alumni Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama" class="fw-semibold">Nama Alumni</label>
                        <input type="text" id="nama" name="nama"
                            class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="angkatan" class="fw-semibold">Angkatan</label>
                        <input type="number" id="angkatan" name="angkatan"
                            class="form-control @error('angkatan') is-invalid @enderror" value="{{ old('angkatan') }}">
                        @error('angkatan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="aktivitas_sekarang" class="fw-semibold">Aktivitas Sekarang</label>
                        <input type="text" id="aktivitas_sekarang" name="aktivitas_sekarang"
                            class="form-control @error('aktivitas_sekarang') is-invalid @enderror"
                            value="{{ old('aktivitas_sekarang') }}">
                        @error('aktivitas_sekarang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="bintang" class="fw-semibold">Bintang</label>
                        <select id="bintang" name="bintang"
                            class="form-control @error('bintang') is-invalid @enderror">
                            @for ($i = 0; $i <= 5; $i++)
                                <option value="{{ $i }}" {{ old('bintang') == $i ? 'selected' : '' }}>
                                    {{ $i }} ⭐</option>
                            @endfor
                        </select>
                        @error('bintang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="testimoni" class="fw-semibold">Testimoni</label>
                        <input type="text" id="testimoni" name="testimoni"
                            class="form-control @error('testimoni') is-invalid @enderror"
                            value="{{ old('testimoni') }}">
                        @error('testimoni')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="gambar" class="fw-semibold">Foto</label>
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

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="ditampilkan" name="ditampilkan"
                            value="1" {{ old('ditampilkan', true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="ditampilkan">Tampilkan Alumni ini</label>
                    </div>

                    <div class="card-action d-flex justify-content-end">
                        <button type="submit" class="btn btn-success me-2"><i class="fas fa-check me-1"></i>
                            Submit</button>
                        <a href="{{ route('alumni.index') }}" class="btn btn-danger"><i class="fas fa-times me-1"></i>
                            Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appDashboard>
<x-inputImageLogic />
