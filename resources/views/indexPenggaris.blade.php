@extends('template')
@section('title', 'Data Penggaris')
@section('konten')
    <a href="/penggaris/tambah_penggaris" class="btn btn-primary">Tambah Penggaris Baru</a>
    <br />
    <br />
    <label>Cari Data Penggaris :</label>
    <form action="/penggaris/cari_penggaris" method="GET" class="form-inline">
        <div class="form-group">
            <input type="text" name="cari" placeholder="Cari Penggaris .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-light">
        </div>
    </form>

    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk Penggaris</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($penggaris as $p)
            <tr>
                <td>{{ $p->kodepenggaris }}</td>
                <td>{{ $p->merkpenggaris }}</td>
                <td>{{ $p->stockpenggaris }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="/penggaris/edit_penggaris/{{ $p->kodepenggaris }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/penggaris/hapus_penggaris/{{ $p->kodepenggaris }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $penggaris->links() }}
@endsection
