<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm card col-md-6 mt-5">
        <div class="card-header bg-info text-light">
            <h1>Edit Transaksi</h1>
        </div>
        <div class="card-body">
        <?php
        require "db_conn.php";
        $query = 'SELECT * FROM finance WHERE id = ?';
        $stmt = $conn->prepare($query);
        $stmt->execute(array($_GET['id']));
//$stmt->execute(array($_GET['id']));
        
        $data = $stmt->fetch();
        //$data = $stmt->fetch();

        if($data != null):
        ?>
        <form action="aksi_finance.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?=$data['id']?>">
            <div class="mb-3 row">
                <label for="nama" class="col-md-2">Nama Transaksi</label>
                <div class="col-md-10"><input type="text" name="nama" id="nama" value="<?=$data['nama']?>" class="form-control"></div>
            </div>
            <div class="mb-3 row">
                <label for="kategori" class="col-md-2">Kategori</label>
                <div class="col-md-10"><input type="text" name="kategori" id="kategori" value="<?=$data['kategori']?>"class="form-control"></div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah" class="col-md-2">Jumlah</label>
                <div class="col-md-10"><input type="text" name="jumlah" id="jumlah" value="<?=$data['jumlah']?>"class="form-control"></div>
            </div>
            <div class="mb-3 row">
                <label for="keterangan" class="col-md-2">Keterangan</label>
                <div class="col-md-10"><textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5"><?=$data['keterangan']?></textarea></div>
            </div>
            <div class="mb-3 row">
                <div class="offset-2 col-md-10">
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                    <input type="submit" name="aksi" value="Edit Data" class="btn btn-primary">
                </div>
            </div>
        </form>
        <?php else: ?>
            <div>Data barang dengan ID tersebut tidak ditemukan</div>
        <?php endif; ?>
        </div>
        <div class="card-footer bg-info"></div>
    </div>
</body>
</html>