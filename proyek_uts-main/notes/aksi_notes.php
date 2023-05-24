<?php
require "db_conn.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['aksi'] == 'Tambah Data'){
        insert_data();
    }elseif (($_POST['aksi'] == 'Edit Data') && ($_POST['id'] > 0)) {
        update_data();
    }elseif (($_POST['aksi'] == 'Hps') && ($_POST['del'] > 0)) {
        delete_data();
    }
    header("Location: index.php");
    exit;
}else{
    echo "Halaman tidak boleh diakses secara langsung";
    exit;
}
function insert_data(){
            global $conn;
            $query = "INSERT INTO notes (judul, catatan, kategori, tanggal) VALUES (:judul, :catatan, :kategori, :tanggal)";
            $params = array(
                ':judul' => $_POST['judul'],
                ':catatan' => $_POST['catatan'],
                ':kategori' => $_POST['kategori'],
                ':tanggal' => $_POST['tanggal']
            );
            try{
                $stmt = $conn->prepare($query);
                $stmt->execute($params);
            }catch(PDOException $e){
                echo "Kesalahan tambah : ".$e->getMessage();
            }
}
function update_data(){
            global $conn;
            $query = 'UPDATE notes SET judul = :judul, catatan = :catatan, kategori = :kategori, tanggal = :tanggal';
            $params = array(
                ':judul' => $_POST['judul'],
                ':catatan' => $_POST['catatan'],
                ':kategori' => $_POST['kategori'],
                ':tanggal' => $_POST['tanggal'],
                ':id' => $_POST['id']
            );
            $query .= ' WHERE id = :id';

            try{
                $stmt = $conn->prepare($query);
                $stmt->execute($params);
            } catch (PDOException $e){
                echo "Kesalahan edit : " . $e->getMessage();
                echo $query;
            }
}
function delete_data(){
            global $conn;

            $query = 'DELETE FROM notes WHERE id = ?';

            try{
                $stmt = $conn->prepare($query);
                $stmt->execute(array($_POST['del']));
            }catch(PDOException $e){
                echo "Kesalahan hapus: " . $e->getMessage();
                echo $query;
            }
}