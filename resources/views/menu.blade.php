<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu Halaman</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container py-5">
    <h3 class="text-center mb-4">Daftar Halaman</h3>

    <div class="row">

        <div class="col-md-4 mb-3">
            <a href="{{ url('/idx') }}" class="btn btn-outline-dark btn-block">Index</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/example') }}" class="btn btn-outline-dark btn-block">Custom Files</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/intro') }}" class="btn btn-outline-dark btn-block">Intro</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/linktree') }}" class="btn btn-outline-dark btn-block">Linktree</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/news') }}" class="btn btn-outline-dark btn-block">News</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/pert5') }}" class="btn btn-outline-dark btn-block">Pertemuan 5</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/responsive') }}" class="btn btn-outline-dark btn-block">Responsive</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/template') }}" class="btn btn-outline-dark btn-block">Template</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/biodata') }}" class="btn btn-outline-dark btn-block">Biodata</a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ url('/089') }}" class="btn btn-outline-dark btn-block">089 Page</a>
        </div>

    </div>
</div>

</body>
</html>
