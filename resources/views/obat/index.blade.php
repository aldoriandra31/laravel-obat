@extends('template.app')
@section('content')
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar {{ $title }}</h4>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('obats.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle-dotted"></i>
                                Tambah Obat
                            </a>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Satuan Obat</th>
                                            <th>Harga Obat</th>
                                            <th>Stok Obat</th>
                                            <th>Distributor Obat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($obats as $obat)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-bold-500"> <a
                                                        href="{{ route('obats.show', $obat) }}">{{ $obat->kode_obat }}</a>
                                                </td>
                                                <td>{{ $obat->nama_obat }}</td>
                                                <td>{{ $obat->satuan_obat }}</td>
                                                <td>{{ $obat->harga_obat }}</td>
                                                <td>{{ $obat->stok_obat }}</td>
                                                <td>{{ $obat->distributor_obat->nama_distributor }}</td>
                                                <td class="text-bold-500">
                                                    <a href="{{ route('obats.edit', $obat) }}" class="text-primary"
                                                        style="font-size: 1.5rem">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="" class="text-danger showConfirm"
                                                        style="font-size: 1.5rem">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </a>
                                                    <form action="{{ route('obats.destroy', $obat) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Data Kosong</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
