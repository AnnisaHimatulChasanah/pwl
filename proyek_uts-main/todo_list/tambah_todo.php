<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Azmi Jalaluddin Amron">
    <meta name="keywords" content="HTML, PHP, QUERY">
    <title>Form Tambah To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<!-- start tambah tabel  -->
    <div class="container-sm card col-md-6 mt-5">
        <div class="card-header bg-info text-light">
            <h4>Tambah To Do List</h4>
        </div>
        <div class="card-body">
            <!-- Start Form -->
            <form action="aksi_todo.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="aktivitas" class="col-md-2">Aktivitas</label>
                <div class="col-md-10"><input type="text" name="aktivitas" id="aktivitas" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="kategori" class="col-md-2">Kategori</label>
                <div class="col-md-10"><input type="text" name="kategori" id="kategori" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="deskripsi" class="col-md-2">Deskripsi</label>
                <div class="col-md-10"> <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5"></textarea> </div>
            </div>

            <div class="mb-3 row">
                <label for="tanggal" class="col-md-2">Tanggal</label>
                <div class="col-md-10"><input type="date" name="tanggal" id="tanggal" class="form-control"></div>
            </div>
            
            <div class="mb-3 row">
                <div class="offset-2 col-md-10">
                    <a href="index.php" class="btn btn-outline-success">Kembali</a>
                    <input type="submit" name="aksi" value="Tambah Data" class="btn btn-outline-info">
                </div>
            </div>
            </form>
            <!-- end form -->
        </div>
        <div class="card-footer bg-info"></div>
    </div>
    <!-- end tambah tabel  -->  
</body>
</html>