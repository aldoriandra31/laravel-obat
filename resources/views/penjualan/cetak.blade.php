<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <table class='table table-bordered'>
            <thead>
                {{-- {{ dd($penjualan) }} --}}
                <tr>
                    <th>No</th>
                    <th>Kode Transaksi</th>
                    <th>Nama Obat</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan->transaksiDetail as $penjualanDetail)
                    <tr>
                        <td>{{ 1 }}</td>
                        <td>{{ $penjualan->kode_transaksi }}</td>
                        <td>{{ $penjualanDetail->obat->nama_obat }}</td>
                        <td>{{ $penjualanDetail->jumlah }}</td>
                        <td>{{ $penjualanDetail->harga }}</td>
                        <td>{{ $penjualanDetail->subtotal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
