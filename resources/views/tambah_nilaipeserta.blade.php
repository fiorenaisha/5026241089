@extends('template')
@section('title', 'Tambah Nilai Peserta')
@section('konten')
    <a href="/nilai_peserta" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Peserta
        </div>
        <div class="card-body">
            <form action="/nilai_peserta/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nopeserta" class="col-sm-2 col-form-label">No Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaiteori" class="col-sm-2 col-form-label">Nilai Teori</label>
                    <div class="col-sm-10">
                        <input type="number" name="nilaiteori" id="nilaiteori" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaipraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                    <div class="col-sm-10">
                        <input type="number" name="nilaipraktek" id="nilaipraktek" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
