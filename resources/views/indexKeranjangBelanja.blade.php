@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')
    <a href="/keranjangbelanja/tambah" class="btn btn-primary mb-3">Beli</a>

    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjang as $k)
            @php
                $total = $k->Jumlah * $k->Harga;
            @endphp
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/tambah" class="btn btn-success">Beli</a>
                    |
                    <a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $keranjang->links() }}
@endsection
