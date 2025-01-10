@extends('template.app')
@section('content')
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar {{ $title }}</h4>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('penjualans.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle-dotted"></i>
                                Tambah Penjaulan
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
                                            <th>Kode Penjualan</th>
                                            <th>Tanggal Penjualan</th>
                                            <th>Total Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($penjualans as $penjualan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-bold-500">{{ $penjualan->kode_transaksi }}</td>
                                                <td>{{ $penjualan->tanggal_transaksi }}</td>
                                                <td>{{ $penjualan->total_harga }}</td>
                                                <td class="text-bold-500">
                                                    <a href="{{ route('cetak', $penjualan) }}" class="text-primary"
                                                        style="font-size: 1.5rem">
                                                        <i class="bi bi-printer"></i>
                                                    </a>
                                                    <a href="" class="text-danger showConfirm"
                                                        style="font-size: 1.5rem">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </a>
                                                    <form action="{{ route('penjualans.destroy', $penjualan) }}"
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
