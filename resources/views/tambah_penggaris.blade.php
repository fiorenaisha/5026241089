@extends('template')
@section('title', 'Data Penggaris')
@section('konten')
    <a href="/penggaris" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Penggaris
        </div>

        <div class="card-body">
            <form action="/penggaris/store_penggaris" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkpenggaris" class="col-sm-2 col-form-label">Merk Penggaris</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkpenggaris" id="merkpenggaris" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockpenggaris" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockpenggaris" id="stockpenggaris" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="Y">Y</option>
                            <option value="N">N</option>
                        </select>
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
