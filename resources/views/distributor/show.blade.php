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
                            <div id="map" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Div untuk peta -->

    <!-- Menambahkan CSS Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
        // Koordinat default (kamu bisa menggunakan koordinat lokasi default)
        var lat = {{ old('latitude', $distributor_obat->latitude ?? -6.2) }};
        var lng = {{ old('longitude', $distributor_obat->longitude ?? 106.816666) }};

        // Inisialisasi peta
        var map = L.map('map').setView([lat, lng], 13);

        // Menambahkan tile OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Menambahkan marker default
        var marker = L.marker([lat, lng]).addTo(map);

        // Fungsi untuk memperbarui input latitude dan longitude saat peta diklik
        function onMapClick(e) {
            marker.setLatLng(e.latlng); // Pindahkan marker ke lokasi yang dipilih
            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
        }

        // Tambahkan event listener untuk klik pada peta
        map.on('click', onMapClick);
    </script>
@endsection
