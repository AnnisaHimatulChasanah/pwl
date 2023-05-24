<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
<body>
    <div class="container" style="width:1000px;">
        <h1>List Penjualan</h1>
        <a href="tambah_barang.php" class="btn btn-primary btn-lg">Tambah Barang</a>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th colspan="2">Nama Barang</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <?php
            require "db_conn.php";
            $query ='SELECT * FROM barang WHERE 1';
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $no = 0;
            while($row = $stmt->fetch()):
            $no++;
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['jml']?> pcs</td>
                <td><?=$row['nama']?></td>
                <td style="text-align: right;">Rp. <?=number_format($row['harga'], 0, ',', '.' )?></td>
                <td><?=$row['keterangan']?></td>
                <td><img src="files/no-image.jpg" class="img-fuild rounded" style="max-width: 100px;" alt="nama barang"> </td>
                <td>
                    <form action="aksi_barang.php" method="post" onsubmit="return confirm('apakah yakin akan mengahpus data?')">
                        <a href="form_edit.php?id=<?=$row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                        ||
                        <input type="hidden" name="del" value="<?=$row['id']?>">
                        <input type="submit" name="aksi" value="Hps" class="btn btn-danger btn-sm"> 
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>