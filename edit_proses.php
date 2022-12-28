<?php
    
    if(isset($_POST['simpan'])){
        include_once 'koneksi.php';
        $id             = $_POST['id'];
        $nama           = $_POST['nama'];
        $lokasi         = $_POST['lokasi'];
        $rate           = $_POST['rate'];
        $tanggal_jadi   = $_POST['tanggal_jadi'];

        $update = mysqli_query($koneksi, "update tempat_wisata set 

            nama            = '$nama',
            lokasi          = '$lokasi',
            rate            = '$rate',
            tanggal_jadi    = '$tanggal_jadi'

            where id = '$id'

            ");

        if($update){
            echo "<script>window.alert('Data Successfully Updated')</script>";
            echo "<script>window.location='tambah_tempat.php';</script>";
        } else {
            echo "Failed to Update Data";
            echo "<a href = 'edit.php ?id=$id'>kembali</a>";
        }

    } else {
        echo "<script>window.history.back()</script>";
    }

?>