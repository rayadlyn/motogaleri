<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body style="background: #6A6A6A;">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #393939;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: black;">Album</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profil') }}" style="color: black;">Kembali</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Form to add new album -->
        <div class="col">
            <div class="card" style="background-color: #393939;">
                <div class="card-body">
                    <h5 class="card-title" style="color: white;">Tambah Album Baru</h5>
                    <form action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label" style="color: white;">Gambar Album</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label" style="color: white;">Judul Album</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label" style="color: white;">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Display existing albums -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            @foreach ($albums as $album)
            <div class="col">
                <div class="card" style="background-color: #393939;">
                    <img src="{{ asset('storage/images' . $album->image) }}" class="card-img-top" class="rounded" style="width: 150px">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">{{ $album->title }}</h5>
                        <p class="card-text" style="color: white;">{{ $album->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
