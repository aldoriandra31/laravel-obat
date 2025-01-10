@extends('template.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('distributor-obats.store') }}" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Kode Distributor</label>
                                            <div class="position-relative">
                                                <input name="kode_distributor" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('kode_distributor') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('kode_distributor')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Nama Distributor</label>
                                            <div class="position-relative">
                                                <input name="nama_distributor" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('nama_distributor') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('nama_distributor')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Alamat Distributor</label>
                                            <div class="position-relative">
                                                <input name="alamat_distributor" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('alamat_distributor') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('alamat_distributor')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Telpone Distributor</label>
                                            <div class="position-relative">
                                                <input name="telp_distributor" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('telp_distributor') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('telp_distributor')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Latitude</label>
                                            <div class="position-relative">
                                                <input name="latitude" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('latitude') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('latitude')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">longitude</label>
                                            <div class="position-relative">
                                                <input name="longitude" type="text" class="form-control"
                                                    placeholder="Nama Kategori Pembayaran" id="first-name-icon"
                                                    value="{{ old('longitude') }}" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            {{-- error --}}
                                            @error('longitude')
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
