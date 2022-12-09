<?php
    session_start();
    include "koneksi.php";

    if(isset($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['notelp'] , $_POST['jk'], $_POST['agama'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $notelp = $_POST['notelp'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];

        $qry1 = "insert into member (id, nama, alamat, notelp, jk, agama) values ('$id', '$nama', '$alamat', '$notelp', '$jk', '$agama')";

        if(mysqli_query($koneksi, $qry1)){  
            echo '<script>alert("Your data has been registered on our database");window.location.href="beranda.html";</script>';
        }else{
            echo '<script>alert("Data input has been failed");window.location.href="pendaftaran.php"</script>';
        }
    }
?>