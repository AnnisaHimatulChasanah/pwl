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
        <h2>Transaksi Pemasukan</h2>
        <a href="tambah_transaksi.php" class="btn btn-primary">Tambah Transaksi</a>
        <br><br>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Nama Transaksi</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </tr>
            <?php 
            require "db_conn.php";
            $query = 'SELECT * from transaksi WHERE kategori = "pengeluaran"';
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $no = 0;
            $total = 0;
            while($data = $stmt->fetch()){
            $no++;
            $total+=$data['jumlah'];
            ?>
            <tr>
                <td><?=$no;?></td>
                <td><?=$data['nama']?></td>
                <td><?=strtoupper($data['kategori'])?></td>
                <td style="text-align:right;"><?=number_format($data['jumlah'], 0, ',', '.')?></td>
                <td><?=$data['keterangan']?></td>
            </tr>
            <?php } ?>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td style="text-align:right;"><?=number_format($total, 0, ',', '.')?></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="container" style="width:1200px;">
        <h2>Transaksi Pengeluaran</h2>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Nama Transaksi</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </tr>
            <?php 
            require "db_conn.php";
            $query = 'SELECT * from transaksi WHERE kategori = "pemasukan"';
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $no = 0;
            $total = 0;
            while($data = $stmt->fetch()){
            $no++;
            $total+=$data['jumlah'];
            ?>
            <tr>
                <td><?=$no;?></td>
                <td><?=$data['nama']?></td>
                <td><?=strtoupper($data['kategori'])?></td>
                <td style="text-align:right;"><?=number_format($data['jumlah'], 0, ',', '.')?></td>
                <td><?=$data['keterangan']?></td>
            </tr>
            <?php } ?>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td style="text-align:right;"><?=number_format($total, 0, ',', '.')?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>