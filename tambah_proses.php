<?php
    
    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';
        $nama               = $_POST['nama'];
        $lokasi             = $_POST['lokasi'];
        $rate               = $_POST['rate'];
        $tanggal_jadi       = $_POST['tanggal_jadi'];
       
        $input = mysqli_query($koneksi, "insert into tempat_wisata values('NULL', '$nama', '$lokasi', '$rate', '$tanggal_jadi')");
        
        if($input){
            echo "<script>window.alert('Data Successfully Added')</script>";
            echo "<script>window.location='tambah_tempat.php';</script>";
        } else {
            echo "Failed to Add Data";
            echo "<a href = 'tambah.php'>kembali</a>";
        }

    } else {
        echo "<script>window.history.back()";
    }

?>