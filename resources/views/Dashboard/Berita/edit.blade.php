<x-appDashboard>
    <h1 class="fw-bold text-dark" style="font-weight: 900;"> Edit Berita </h1>
    <hr class="mb-4">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Edit Berita</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="judul" class="fw-semibold">Judul Berita</label>
                        <input type="text" id="judul" name="judul"
                            class="form-control @error('judul') is-invalid @enderror"
                            value="{{ old('judul', $berita->judul) }}">
                        @error('judul')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="isi" class="fw-semibold">Isi Berita</label>
                        <textarea id="isi" name="isi" class="form-control @error('isi') is-invalid @enderror" rows="5">{{ old('isi', $berita->isi) }}</textarea>
                        @error('isi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="gambar" class="fw-semibold">Gambar</label>
                        <div id="image-preview-container" class="image-preview-container mb-2">
                            @if ($berita->gambar)
                                <img id="gambar-preview" src="{{ asset('storage/' . $berita->gambar) }}"
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
                            class="form-control @error('gambar') is-invalid @enderror" style="display: none;">
                        @error('gambar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="kategori_id" class="fw-semibold">Kategori</label>
                        <select name="kategori_id" id="kategori_id"
                            class="form-control @error('kategori_id') is-invalid @enderror">
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}"
                                    {{ old('kategori_id', $berita->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="card-action d-flex justify-content-end">
                        <button type="submit" class="btn btn-success me-2">
                            <i class="fas fa-check me-1"></i> Update
                        </button>
                        <a href="{{ route('berita.index') }}" class="btn btn-danger">
                            <i class="fas fa-times me-1"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appDashboard>
<x-inputImageLogic />
