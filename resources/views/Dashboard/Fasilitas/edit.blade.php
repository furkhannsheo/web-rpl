<x-appDashboard>
    <h1 class="fw-bold text-dark" style="font-weight: 900;"> Edit Fasilitas </h1>
    <hr class="mb-4">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Edit Fasilitas</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="nama" class="fw-semibold">Nama Fasilitas</label>
                        <input type="text" id="nama" name="nama"
                            class="form-control @error('nama') is-invalid @enderror"
                            value="{{ old('nama', $fasilitas->nama) }}">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi" class="fw-semibold">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="gambar" class="fw-semibold">Gambar</label>
                        <div id="image-preview-container" class="image-preview-container mb-2">
                            @if ($fasilitas->gambar)
                                <img id="gambar-preview" src="{{ asset('storage/' . $fasilitas->gambar) }}"
                                    alt="Pratinjau Gambar" style="display:block;">
                                <span class="placeholder-text hidden">Seret & lepas gambar di sini atau klik untuk
                                    memilih file</span>
                            @else
                                <span class="placeholder-text">Seret & lepas gambar di sini atau klik untuk memilih
                                    file</span>
                                <img id="gambar-preview" src="#" alt="Pratinjau Gambar">
                            @endif
                        </div>
                        <input type="file" id="gambar" name="gambar"
                            class="form-control @error('gambar') is-invalid @enderror" style="display:none;">
                        @error('gambar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="card-action d-flex justify-content-end">
                        <button type="submit" class="btn btn-success me-2"><i class="fas fa-check me-1"></i>
                            Update</button>
                        <a href="{{ route('fasilitas.index') }}" class="btn btn-danger"><i
                                class="fas fa-times me-1"></i> Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appDashboard>
<x-inputImageLogic />
