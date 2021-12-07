<?php
    include "koneksi.php";

    $un=$_GET['un'];
    $query="DELETE FROM siswa where un='$un'";
    $result=mysqli_query($connect, $query);

    if($result){
        echo "Data berhasil di hapus";
?>
        <a href="home.php">Lihat data di Tabel</a>
<?php
    }else{
        echo "Data gagal dihapus".mysqli_error($connect);
    }
    ?>

