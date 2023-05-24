<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="width:1200px;">
        <h2>Transaksi Keuangan</h2>
        <a href="tambah_transaksi.php" class="btn btn-primary">Tambah Transaksi</a>
        <br><br>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Nama Transaksi</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            <?php
            require "db_conn.php";
            $query = 'SELECT * from finance where 1'; 
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $no = 0;
            while($row = $stmt->fetch()):
            $no++;
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['kategori']?></td>
                <td style="text-align: right;">Rp. <?=number_format($row['jumlah'], 0, ',' , '.')?></td>
                <td><?=$row['keterangan']?></td>
                <td>
                    <form action="aksi_finance.php" method="post"
                    onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                    <a href="form_edit.php?id=<?=$row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                    ||
                    <input type="hidden" name="del" value="<?=$row['id']?>">
                    <!-- <input type="hidden" name="id" value="<?=$row['id']?>"> -->
                    <input type="submit" name="aksi" value="Hps" class="btn btn-danger btn-sm">
                    <!-- <input type="submit" name="aksi" value="Nonaktif" class="btn btn-danger btn-sm"> -->
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <!-- tambahan -->
    <!-- </div>
        <div class="container" style="width:1200px;">
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Nama Transaksi</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            <?php
            require "db_conn.php";
            $query = 'SELECT * from finance where status = 0';
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $no = 0;
            while($row = $stmt->fetch()):
            $no++;
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['kategori']?></td>
                <td style="text-align: right;">Rp. <?=number_format($row['jumlah'], 0, ',' , '.')?></td>
                <td><?=$row['keterangan']?></td>
                <td>
                    <form action="aksi_finance.php" method="post"
                    onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                    <a href="form_edit.php?id=<?=$row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                    ||
                    <input type="hidden" name="del" value="<?=$row['id']?>">
                    <input type="submit" name="aksi" value="Hps" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </table> -->
    </div>
</body>
</html>