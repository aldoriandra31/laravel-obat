@extends('template.app')
@section('content')
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar {{ $title }}</h4>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('distributor-obats.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle-dotted"></i>
                                Tambah Distributor Obat
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
                                            <th>Kode Distributor</th>
                                            <th>Nama Distributor</th>
                                            <th>Alamat Distributor</th>
                                            <th>Telp Distributor</th>
                                            <th>latitude</th>
                                            <th>longitude</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($distributor_obats as $distributor_obat)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-bold-500"> <a
                                                        href="{{ route('distributor-obats.show', $distributor_obat) }}">{{ $distributor_obat->kode_distributor }}</a>
                                                </td>
                                                {{-- <td class="text-bold-500">{{ $distributor_obat->kode_distributor }}</td> --}}
                                                <td>{{ $distributor_obat->nama_distributor }}</td>
                                                <td>{{ $distributor_obat->alamat_distributor }}</td>
                                                <td>{{ $distributor_obat->telp_distributor }}</td>
                                                <td>{{ $distributor_obat->latitude }}</td>
                                                <td>{{ $distributor_obat->longitude }}</td>
                                                <td class="text-bold-500">
                                                    <a href="{{ route('distributor-obats.edit', $distributor_obat) }}"
                                                        class="text-primary" style="font-size: 1.5rem">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="" class="text-danger showConfirm"
                                                        style="font-size: 1.5rem">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </a>
                                                    <form
                                                        action="{{ route('distributor-obats.destroy', $distributor_obat) }}"
                                                        method="post">
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
