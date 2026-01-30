<x-appDashboard>
    <h1 class="fw-bold" style="font-weight: 1200;"> List Berita </h1>
    <hr class="p-3">

    @if (session('success'))
        <div class="modal fade show" id="successModal" tabindex="-1" style="display:block;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-check-circle fa-3x text-success"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Berhasil!</h5>
                        <p class="mb-4">{{ session('success') }}</p>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            });
        </script>
    @endif

    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Berita</h4>
                <a href="{{ route('berita.create') }}" class="px-3 py-2 rounded border-0 darkKita">
                    <i class="fas fa-plus me-1"></i> Tambah Data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($beritas as $berita)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/' . $berita->gambar) }}"
                                            alt="Gambar {{ $berita->judul }}" class="img-thumbnail"
                                            style="width: 80px; height: 60px; object-fit: cover;">
                                    </td>
                                    <td>{{ $berita->judul }}</td>
                                    <td>{{ $berita->kategori->nama }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('berita.show', $berita->id) }}"
                                            class="btn btn-sm btn-info me-2">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('berita.edit', $berita->id) }}"
                                            class="btn btn-sm btn-warning me-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $berita->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="deleteModal{{ $berita->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center p-4">
                                                <div class="mb-3">
                                                    <i class="fas fa-exclamation-circle fa-3x text-danger"></i>
                                                </div>
                                                <h5 class="fw-bold mb-3">Apakah Anda Yakin?</h5>
                                                <p class="mb-4">Berita <b>{{ $berita->judul }}</b> akan dihapus
                                                    permanen dan tidak bisa dikembalikan.</p>
                                                <form action="{{ route('berita.destroy', $berita->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-secondary me-2"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Ya, hapus!</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-appDashboard>
<x-dataTable />
