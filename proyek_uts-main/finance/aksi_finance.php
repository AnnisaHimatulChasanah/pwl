<?php
require "db_conn.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['aksi'] == 'Tambah Data'){
        insert_data();
    }elseif (($_POST['aksi'] == 'Edit Data') && ($_POST['id'] > 0)) {
        update_data();
    }elseif (($_POST['aksi'] == 'Hps') && ($_POST['del'] > 0)) {
        delete_data();
    // }elseif (($_POST['aksi'] == 'Nonaktif')) {
    //     nonaktif_data();
    // }
    }
    header("Location: index.php");
    exit;
}else{
    echo "Halaman tidak boleh diakses secara langsung";
    exit;
}
function insert_data(){
            global $conn;
            $query = "INSERT INTO finance (nama, kategori, jumlah, keterangan) VALUES (:nama, :kategori, :jumlah, :keterangan)";
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
function update_data(){
            global $conn;
            $query = 'UPDATE finance SET nama = :nama, kategori = :kategori, jumlah = :jumlah, keterangan = :keterangan';
            $params = array(
                ':nama' => $_POST['nama'],
                ':kategori' => $_POST['kategori'],
                ':jumlah' => $_POST['jumlah'],
                ':keterangan' => $_POST['keterangan'],
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
// function nonaktif_data(){
//             global $conn;
//             $query = 'UPDATE finance SET status = :status';
//             $params = array(
//                 ':status' => 0,
//                 ':id' => $_POST['id']
//             );
//             $query .= ' WHERE id = :id';

//             try{
//                 $stmt = $conn->prepare($query);
//                 $stmt->execute($params);
//             } catch (PDOException $e){
//                 echo "Kesalahan edit : " . $e->getMessage();
//                 echo $query;
//             }
// }
function delete_data(){
            global $conn;

            $query = 'DELETE FROM finance WHERE id = ?';

            try{
                $stmt = $conn->prepare($query);
                $stmt->execute(array($_POST['del']));
            }catch(PDOException $e){
                echo "Kesalahan hapus: " . $e->getMessage();
                echo $query;
            }
}