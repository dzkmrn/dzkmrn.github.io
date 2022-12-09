<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $notelp = $_GET['notelp'];
    $jk = $_GET['jk'];
    $agama = $_GET['agama'];
    $query = "UPDATE member SET nama='$nama',alamat='$alamat',notelp='$notelp',jk='$jk',agama='$agama' WHERE id='$id'";
    $result = mysqli_query($koneksi,$query);
    if($result){
        echo "Update data succeeded";
?>   
    <a href="displayMember.php"> See result! </a>
<?php
    } else {
        echo "Update data failed" . mysqli_error($connect);
    }
