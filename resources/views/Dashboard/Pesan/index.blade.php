<x-appDashboard>
    <h1 class="fw-bold" style="font-weight: 1200;"> 📬 Daftar Saran </h1>
    <hr class="p-3">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Saran Pengunjung</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Subjek</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesans as $pesan)
                                <tr>
                                    <td>{{ $pesan->nama_lengkap }}</td>
                                    <td>{{ $pesan->email }}</td>
                                    <td>{{ $pesan->subjek }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('pesan.show', $pesan->id) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i> Lihat
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-appDashboard>
<x-dataTable />
