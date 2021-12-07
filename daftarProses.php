<?php
    include "koneksi.php";

    $id=$_GET['id'];
    $username=$_GET['username'];
    $password=md5($_GET['password']);
    $level=$_GET['level'];


    $sql="INSERT INTO user(id,username,password,level)
        VALUE ('$id', '$username', '$password','$level')";

    if(mysqli_query($connect, $sql)){
        echo " Record berhasil ditambahkan";
?>
        <a href="loginForm.html">Lihat data di Tabel</a>
<?php
    }else{
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>