@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')
    <a href="/nilaikuliah/tambah" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            @php
                // konversi nilai angka ke huruf
                if ($n->NilaiAngka <= 40) {
                    $huruf = 'D';
                } elseif ($n->NilaiAngka <= 60) {
                    $huruf = 'C';
                } elseif ($n->NilaiAngka <= 80) {
                    $huruf = 'B';
                } else {
                    $huruf = 'A';
                }
                // hitung bobot
                $bobot = $n->NilaiAngka * $n->SKS;
            @endphp
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>{{ $huruf }}</td>
                <td>{{ $bobot }}</td>
            </tr>
        @endforeach
    </table>
    {{ $nilaikuliah->links() }}
@endsection
