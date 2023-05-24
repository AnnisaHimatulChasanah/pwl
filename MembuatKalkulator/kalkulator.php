<?php
include "function.php";

$angka1= "0";
$angka2 = "0";
$operator = "+";
$hasil = "0";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = hitung($angka1, $angka2, $operator);
    add_session_his($angka1, $angka2, $operator, $hasil);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Kalkulator</title>
</head>
<body>
    <div class="container" style="width: 500px">
        <h2>Kalkulator</h2>
        <a href="history.php" class="btn btn-primary btn-sm">Lihat Riwayat &raquo;</a>

        <form action="" method="post">
            <table class="table">
                <tr>
                    <th>Angka 1</th>
                    <th>Operator</th>
                    <th>Angka 2</th>
                </tr>
                <tr>
                    <td>
                        <input class="form-control" type="text" value="<?=$angka1?>" name="angka1">
                    </td>
                    <td>
                        <select class="form-select" name="operator" id="">
                            <option value="+" <?=($operator=='+'?"selected":"")?>> + </option>
                            <option value="-" <?=($operator=='-'?"selected":"")?>> - </option>
                            <option value="x" <?=($operator=='x'?"selected":"")?>> x </option>
                            <option value="/" <?=($operator=='/'?"selected":"")?>> / </option>
                        </select>
                    </td>
                    <td>
                        <input class="form-control" type="text" value="<?=$angka2?>" name="angka2">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input class="btn btn-outline-info" type="submit" value="HITUNG">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div id="hasil" style="font-weight: bold;"><?=$hasil?></div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>