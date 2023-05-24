<?php
session_start();

if(isset($_GET['del'])){
    unset($_SESSION['history'][$_GET['del']]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Riwayat Perhitungan Kalkulator</title>
</head>
<body>
    <div class="container" style="width: 500px;">
        <h2>Riwayat Perhitungan</h2>
        <a href="kalkulator.php" class="btn btn-outline-success btn-sm">&laquo; Kembali Ke Kalkulator</a>

        <table class="table table-success table-striped table-sm table-bordered">
            <?php foreach ($_SESSION['history'] as $idx => $data): ?>
            <tr>
                <td><?=$data[0]?></td>
                <td><?=$data[2]?></td>
                <td><?=$data[1]?></td>
                <td><?=$data[3]?></td>
                <td>
                   <a href="history.php?del=<?=$idx?>" class="btn btn-outline-danger btn-sm">X</a>
                </td>
            </tr>
            <?php endforeach?>
        </table>
    </div>
</body>
</html>