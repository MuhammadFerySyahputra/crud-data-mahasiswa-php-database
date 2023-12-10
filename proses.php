<?php
    include 'koneksi.php';

    //add data
    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == "add") {
            $npm = $_POST['npm'];
            $nama = $_POST['nama_mhs'];
            $alamat = $_POST['alamat'];

            $query = "INSERT INTO mhs_tb VALUES (NULL, '$npm', '$nama', '$alamat')";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                header("location: index.php");
                echo "add to add data.";
            } else {
                echo "Failed to add data.";
            }

            var_dump($_POST);
            die();
            echo "tambah data";
        
        }else if($_POST['aksi']== "edit"){
            echo "edit data";
            $id_mhs = $_POST['id_mhs'];
            $npm = $_POST['npm'];
            $nama = $_POST['nama_mhs'];
            $alamat = $_POST['alamat'];

            $query = "UPDATE mhs_tb SET npm = '$npm', nama_mhs = '$nama', alamat = '$alamat' WHERE mhs_tb.id_mhs = '$id_mhs';";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
            }else{
                echo $query;
            }

        }
    }

    // delete data
     if(isset($_GET['detele'])){
        $id_mhs = $_GET['detele'];
        $query = "DELETE FROM mhs_tb WHERE mhs_tb.id_mhs = '$id_mhs';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
        }else{
            echo $query;
        }
    }
?>