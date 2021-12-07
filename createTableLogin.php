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
    $sql = "CREATE TABLE user(
        id INT PRIMARY KEY,
        username VARCHAR(40) NOT NULL,
        password VARCHAR(40) NOT NULL,
        level VARCHAR(5) NOT NULL
    )";

    if(mysqli_query($connect, $sql)){
        echo "Table login berhasil dibuat";
    }else{
        echo "Table login gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>