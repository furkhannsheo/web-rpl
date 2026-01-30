<x-appDashboard>
    <h1 class="fw-bold text-dark" style="font-weight: 900;"> Edit Kategori </h1>
    <hr class="mb-4">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Edit Kategori</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="nama" class="fw-semibold">Nama Kategori</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-tags"></i>
                            </span>
                            <input type="text" id="nama" name="nama"
                                class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Masukkan nama kategori" value="{{ old('nama', $kategori->nama) }}">
                        </div>
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="card-action d-flex justify-content-end">
                        <button type="submit" class="btn btn-success me-2">
                            <i class="fas fa-check me-1"></i> Update
                        </button>
                        <a href="{{ route('kategori.index') }}" class="btn btn-danger">
                            <i class="fas fa-times me-1"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appDashboard>
