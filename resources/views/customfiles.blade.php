<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking Fasilitas Olahraga ITS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Form Booking Fasilitas Olahraga ITS</h2>

        <form>
            <h4>Identitas Pemohon</h4>

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
            </div>

            <div class="form-group">
                <label>NRP</label>
                <input type="text" class="form-control" placeholder="Masukkan NRP">
            </div>

            <div class="form-group">
                <label>Fakultas</label>
                <select class="custom-select">
                    <option selected>Pilih Fakultas</option>
                    <option>FTEIC</option>
                    <option>FTIRS</option>
                    <option>FTSPK</option>
                    <option>FDKBD</option>
                    <option>FSAD</option>
                    <option>FV</option>
                </select>
            </div>

            <label>Kepentingan</label>

            <div class="custom-control custom-radio">
                <input type="radio" id="pribadi" name="kepentingan" class="custom-control-input">
                <label class="custom-control-label" for="pribadi">Pribadi</label>
            </div>

            <div class="custom-control custom-radio mb-3">
                <input type="radio" id="kegiatanITS" name="kepentingan" class="custom-control-input">
                <label class="custom-control-label" for="kegiatanITS">Kegiatan ITS</label>
            </div>

            <div class="custom-file mb-4">
                <input type="file" class="custom-file-input" id="scanKTM">
                <label class="custom-file-label" for="scanKTM">Upload Scan KTM</label>
            </div>

            <h4>Detail Acara</h4>

            <label>Sesi Waktu</label>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="sesi1">
                <label class="custom-control-label" for="sesi1">1 (07.30 - 10.00)</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="sesi2">
                <label class="custom-control-label" for="sesi2">2 (10.15 - 12.45)</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="sesi3">
                <label class="custom-control-label" for="sesi3">3 (13.30 - 16.00)</label>
            </div>

            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="sesi4">
                <label class="custom-control-label" for="sesi4">4 (16.00 - 18.30)</label>
            </div>

            <label>Jenis Lapangan</label>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="basket">
                <label class="custom-control-label" for="basket">Lapangan Basket</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="futsalIndoor">
                <label class="custom-control-label" for="futsalIndoor">Lapangan Futsal Indoor</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="futsalOutdoor">
                <label class="custom-control-label" for="futsalOutdoor">Lapangan Futsal Outdoor</label>
            </div>

            <div class="custom-control custom-checkbox mb-4">
                <input type="checkbox" class="custom-control-input" id="badminton">
                <label class="custom-control-label" for="badminton">Lapangan Badminton</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>

</body>

</html>
