<?php
    include "koneksi.php";

    $un=$_GET['un'];
    $nama=$_GET['nama'];
    $jeniskelamin=$_GET['jenis_kelamin'];
    $tempat_lahir=$_GET['tempat_lahir'];
    $tgl_lahir=$_GET['tgl_lahir'];
    $nama_ortu=$_GET['nama_ortu'];
    $alamat=$_GET['alamat'];
    $kota=$_GET['kota'];
    $no_telp=$_GET['no_telp'];
    $asal=$_GET['asal'];
    $agama=$_GET['agama'];

    $query="UPDATE siswa SET nama='$nama',jenis_kelamin='$jeniskelamin', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', nama_ortu='$nama_ortu', alamat='$alamat', kota='$kota',no_telp='$no_telp', asal='$asal', agama='$agama' where un='$un'";
    $result=mysqli_query($connect, $query);

    if($result){
        echo "Berhasil update data ke database";
?>
        <a href="home.php">Lihat data di Tabel</a>
<?php
    }else{
        echo "Gagal update data".mysqli_error($connect);
    }
    ?>

