<?php
require "db_conn.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['aksi'] == 'Tambah Data'){
        insert_data();
    }
    header("Location: index.php");
    exit;
}else{
    echo "Halaman tidak boleh diakses secara langsung";
    exit;
}
function insert_data(){
            global $conn;
            $query = "INSERT INTO transaksi (nama, kategori, jumlah, keterangan) VALUES (:nama, :kategori, :jumlah, :keterangan)";
            $params = array(
                ':nama' => $_POST['nama'],
                ':kategori' => $_POST['kategori'],
                ':jumlah' => $_POST['jumlah'],
                ':keterangan' => $_POST['keterangan']
            );
            try{
                $stmt = $conn->prepare($query);
                $stmt->execute($params);
            }catch(PDOException $e){
                echo "Kesalahan tambah : ".$e->getMessage();
            }
}
