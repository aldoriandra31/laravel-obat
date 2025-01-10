@extends('template.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('obats.store') }}" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Kode Obat</label>
                                            <div class="position-relative">
                                                <input name="kode_obat" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('kode_obat') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('kode_obat')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Nama Obat</label>
                                            <div class="position-relative">
                                                <input name="nama_obat" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('nama_obat') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('nama_obat')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Satuan Obat</label>
                                            <div class="position-relative">
                                                <input name="satuan_obat" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('satuan_obat') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('satuan_obat')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Harga Obat</label>
                                            <div class="position-relative">
                                                <input name="harga_obat" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('harga_obat') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('harga_obat')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Stok Obat</label>
                                            <div class="position-relative">
                                                <input name="stok_obat" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('stok_obat') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('stok_obat')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Distributor Obat</label>
                                            <div class="form-group">
                                                <select class="choices form-select" name="distributor_obat_id">
                                                    <option value="" selected hidden>Pilih Distributor</option>

                                                    @foreach ($distributor_obats as $distributor_obat)
                                                        <option value="{{ $distributor_obat->id }}"
                                                            {{ old('distributor_obat_id') == $distributor_obat->id ? 'selected' : '' }}>
                                                            {{ $distributor_obat->nama_distributor }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- error --}}
                                            @error('distributor_obat_id')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12 d-flex justify-content-start">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Tambah
                                            </button>
                                            {{-- <a href="{{ route('admin.pembayaran.kategori.index') }}"
                                                class="btn btn-light-secondary me-1 mb-1">
                                                Kembali
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
