<?php 
require "db_conn.php";
$sql = 'SELECT * from todo where 1 order by tanggal desc';
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Belum Selesai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
</head>
<body>
    <div class="container card col-md-6 mt-5 ">
        <div class="card-header bg-info text-light">
            <h2>To Do List yang belum selesai</h2>
        </div>
        <?php
        while($data = $stmt->fetch()){
        ?>
            <div class="list-group">
                <a href="#" class="list-group-item flex-column list-group-item-action align-items-start mb-1" > 
                    <!--  -->
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?=$data['aktivitas']?></h5>
                        <small class="text-muted"><?=$data['tanggal']?></small>
                    </div>
                    <p class="mb-1"><?=$data['deskripsi']?></p>
                    <small class="text-muted"><?=$data['kategori']?></small>
                </a>
                <form action="aksi_todo.php" method="post" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                    <a href="form_edit.php?id=<?=$data['id']?>" class="btn btn-outline-success btn-sm  mb-3">Edit</a>
                    <input type="hidden" name="del" value="<?=$data['id']?>">
                    <input type="submit" name="aksi" value="Hps" class="btn btn-outline-danger btn-sm  mb-3">
                </form>
            </div>
        <?php } ?>
        <a href="tambah_todo.php" class="btn btn-primary mb-2" style="width: 30%;">Tambah To Do List</a>
        <div class="card-footer bg-info"></div>
    </div>
</body>
</html>