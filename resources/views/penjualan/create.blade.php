@extends('template.app')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Daftar {{ $title }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Kode Obat</th>
                                <th>Nama Obat</th>
                                <th>Satuan Obat</th>
                                <th>Harga Obat</th>
                                <th>Stok Obat</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{ route('penjualans.store') }}" method="post">
                                @csrf
                                @forelse ($obats as $obat)
                                    <tr>
                                        <td class="col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" name="obats[]" type="checkbox"
                                                    value="{{ $obat->id }}" id="flexCheckChecked">
                                            </div>

                                        </td>
                                        <td class="col-auto">
                                            <p class="text-capitalize mb-0">{{ $obat->kode_obat }}</p>
                                        </td>
                                        <td class="col-auto">
                                            <p class="text-capitalize mb-0">{{ $obat->nama_obat }}</p>
                                        </td>
                                        <td class="col-auto">
                                            <p class="text-capitalize mb-0">{{ $obat->satuan_obat }}</p>
                                        </td>
                                        <td class="col-auto">
                                            <p class="text-capitalize mb-0">{{ $obat->harga_obat }}</p>
                                        </td>
                                        <td class="col-auto">
                                            <p class="text-capitalize mb-0">{{ $obat->stok_obat }}</p>
                                        </td>
                                        <td class="col-auto">
                                            <input type="number" name="jumlah[]" class="form-control" value="1">
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Belum ada obat</td>
                                    </tr>
                                @endforelse

                                <tr>
                                    <td class="py-1" colspan="7">
                                        <button class="btn btn-primary btn-xs w-100">Beli Obat</button>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
