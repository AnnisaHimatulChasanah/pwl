<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Azmi Jalaluddin Amron">
    <meta name="keywords" content="HTML, PHP, QUERY">
    <title>Form Edit Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<!-- start tambah tabel  -->
    <div class="container-sm card col-md-6 mt-5">
        <div class="card-header bg-info text-light">
            <h4>Edit Notes</h4>
        </div>
        <div class="card-body">
            <!-- Start Form -->
        <?php
        require "db_conn.php";
        $query = 'SELECT * FROM notes WHERE id = ?';
        $stmt = $conn->prepare($query);
        $stmt->execute(array($_GET['id']));
//$stmt->execute(array($_GET['id']));
        
        $data = $stmt->fetch();
        //$data = $stmt->fetch();

        if($data != null):
        ?>
            <form action="aksi_notes.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?=$data['id']?>">
            <div class="mb-3 row">
                <label for="judul" class="col-md-2">Judul</label>
                <div class="col-md-10"><input type="text" name="judul" id="judul" value="<?=$data['judul']?>" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="catatan" class="col-md-2">Catatan</label>
                <div class="col-md-10"> <textarea name="catatan" id="catatan" value="<?=$data['catatan']?>" class="form-control" cols="30" rows="5"></textarea> </div>
            </div>

            <div class="mb-3 row">
                <label for="kategori" class="col-md-2">Kategori</label>
                <div class="col-md-10"><input type="text" name="kategori" id="kategori" value="<?=$data['kategori']?>" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="tanggal" class="col-md-2">Tanggal</label>
                <div class="col-md-10"><input type="date" name="tanggal" id="tanggal" value="<?=$data['tanggal']?>" class="form-control"></div>
            </div>
            
            <div class="mb-3 row">
                <div class="offset-2 col-md-10">
                    <a href="index.php" class="btn btn-outline-success">Kembali</a>
                    <input type="submit" name="aksi" value="Edit Data" class="btn btn-outline-info">
                </div>
            </div>
            </form>
            <!-- end form -->
            <?php else: ?>
                <div>Data barang dengan ID tersebut tidak ditemukan</div>
            <?php endif; ?>
        </div>
        <div class="card-footer bg-info"></div>
    </div>
    <!-- end tambah tabel  -->  
</body>
</html>