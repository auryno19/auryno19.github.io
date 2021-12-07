<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $database="formSiswa";

    $connect = mysqli_connect($hostname,$username,$password,$database);
    if($connect){
        echo "Koneksi ke MySQL berhasil <br>";
    }
    else{
        echo "Koneksi ke MySQL gagal <br>" . mysqli_connect_error();
    }
    $sql = "CREATE TABLE siswa(
        un INT PRIMARY KEY,
        nama VARCHAR(40) NOT NULL,
        jenis_kelamin CHAR(1) NOT NULL,
        tempat_lahir VARCHAR(20) NOT NULL,
        tgl_lahir DATE NOT NULL,
        nama_ortu VARCHAR(30) NOT NULL,
        alamat VARCHAR(50) NOT NULL,
        kota VARCHAR(20) NOT NULL,
        no_telp INT(13) NOT NULL,
        asal VARCHAR(30) NOT NULL,
        agama VARCHAR(20) NOT NULL
    )";

    if(mysqli_query($connect, $sql)){
        echo "Table mahasiswa berhasil dibuat";
    }else{
        echo "Table mahasiswa gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>