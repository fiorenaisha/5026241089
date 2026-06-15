@extends('template')
@section('title', 'Kode Soal nilai_peserta')
@section('konten')
    <a href="/eas" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata-Rata</th>
            <th>Status</th>
        </tr>
        @foreach ($nilai_peserta as $n)
            @php
                $ratarata = ($n->nilaiteori + $n->nilaipraktek) / 2;

                if ($ratarata < 75) {
                    $status = 'Gagal';
                } else {
                    $status = 'Lulus';
                }

            @endphp

            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->nopeserta }}</td>
                <td>{{ $n->nilaiteori }}</td>
                <td>{{ $n->nilaipraktek }}</td>
                <td>{{ $ratarata }}</td>
                <td>{{ $status }}</td>
            </tr>
        @endforeach
    </table>
    {{ $nilai_peserta->links() }}
@endsection
