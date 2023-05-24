<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Azmi Jalaluddin Amron">
    <meta name="keywords" content="HTML, PHP, QUERY">
    <title>Form Tambah Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm card col-md-6 mt-5">
        <div class="card-header bg-info text-light">
            <h4>Tambah Transaksi</h4>
        </div>
        <div class="card-body">
        <form action="aksi_finance.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-md-2">Nama Transaksi</label>
                <div class="col-md-10"><input type="text" name="nama" id="nama" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="kategori" class="col-md-2">Kategori</label>
                <div class="col-md-10"><input type="text" name="kategori" id="kategori" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="jumlah" class="col-md-2">Jumlah</label>
                <div class="col-md-10"><input type="text" name="jumlah" id="jumlah" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="keterangan" class="col-md-2">Keterangan</label>
                <div class="col-md-10"> <textarea name="keterangan" id="keterangan" class="form-control" cols="30"
                        rows="5"></textarea> </div>
            </div>

            <div class="mb-3 row">
                <div class="offset-2 col-md-10">
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                    <input type="submit" name="aksi" value="Tambah Data" class="btn btn-primary">
                </div>
            </div>
        </form>
        </div>
        <div class="card-footer bg-info"></div>
    </div>
</body>

</html>