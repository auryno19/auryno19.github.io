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

    $sql="INSERT INTO siswa(un, nama, jenis_kelamin,tempat_lahir,tgl_lahir,nama_ortu,alamat,kota,no_telp,asal,agama)
        VALUE ('$un', '$nama', '$jeniskelamin','$tempat_lahir','$tgl_lahir','$nama_ortu','$alamat','$kota','$no_telp','$asal','$agama')";

    if(mysqli_query($connect, $sql)){
        echo " Record berhasil ditambahkan";
?>
        <a href="home.php">Lihat data di Tabel</a>
<?php
    }else{
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>