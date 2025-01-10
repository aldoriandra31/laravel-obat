@extends('template.app')
@section('content')
    <section class="row">
        <div class="col-12">
            <div class="row">
                {{-- {{ dd($obats) }} --}}

                @foreach ($obats as $obat)
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Obat {{ $obat->nama_obat }}</h6>
                                        <h6 class="font-extrabold mb-0">{{ $obat->stok_obat }}</h6>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Penjualan</h6>
                                        <h6 class="font-extrabold mb-0">{{ $obat->obat_transaksi_detail_count }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
