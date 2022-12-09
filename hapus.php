<?php
    include "koneksi.php";

    $id=$_GET['id'];
    $query = "delete from member where id='$id'";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo '<script>alert("Data deleted");window.location.href="displayMember.php";</script>';
?>
<?php 
    }else{
        echo "Data gagal diihapus" . mysqli_error($connect);
    }
?>