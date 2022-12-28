<?php
    if(isset($_GET['id'])){
        include('koneksi.php');
        $id   = $_GET['id'];
        $cek  = mysqli_query($koneksi, "select id from tempat_wisata where id  = '$id'") or die(mysqli_error());
        
            if(mysqli_num_rows($cek)==0){
                echo "<script>window.history.back()</script>";
            } else {
                $del = mysqli_query($koneksi, "delete from tempat_wisata where id  = '$id'");
                if ($del){
                    echo "<script>window.alert('Data Successfully Removed')</script>";
                    echo "<script>window.location ='tambah_tempat.php'</script>";
                } else {
                    echo "<script>window.alert('Failed to Remove Data')</script>";
                    echo "<a href = 'hapus.php'>Kembali</a>";
                }
            }
    } else {
        echo "<script>window.history.back()</script>";
    }
?>