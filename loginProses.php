<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $query="SELECT * FROM user WHERE username='$username' and password='$password' ";
    $result=mysqli_query($connect, $query);
    $cek=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

    
    if($row['level'] == 1){
        session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="home.php">Halaman HOME</a>
        <?php
    }else if($row['level'] == 2){
        session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeGuest.php">Halaman HOME</a>
        <?php
    }else{
        echo "Anda gagal login. silahkan "; ?>
        <a href="loginForm.html">Login Kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>
        
    