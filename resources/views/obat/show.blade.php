@extends('template.app')
@section('content')
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar {{ $title }}</h4>
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
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- {{ dd($obat) }} --}}
                                        @forelse ($obat->obatTransaksiDetail as $obatDetail)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-bold-500"> {{ $obat->kode_obat }}
                                                </td>
                                                <td>{{ $obat->nama_obat }}</td>
                                                <td>{{ $obatDetail->jumlah }}</td>
                                                <td>{{ $obatDetail->harga }}</td>
                                                <td>{{ $obatDetail->subtotal }}</td>
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
