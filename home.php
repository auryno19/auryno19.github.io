<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Boostrap</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Menyisipkan Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</head>

<body>
<h1 style="text-align: center">
                <font face="Courier New" size="100" style="text-align: center;"><b>DATA SISWA</b></font><br>
</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>No UN</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Nama Orang tua/Wali</th>
            <th>Alamat</th>
            <th>Kota/Kabupaten</th>
            <th>No Telp</th>
            <th>Asal Sekolah</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <?php
                include "koneksi.php";
                $query ="SELECT * FROM siswa";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["un"]?></td>
                <td> <?php echo $row["nama"]?></td>
                <td> <?php echo $row["jenis_kelamin"]?></td>
                <td> <?php echo $row["tempat_lahir"]?></td>
                <td> <?php echo $row["tgl_lahir"]?></td>
                <td> <?php echo $row["nama_ortu"]?></td>
                <td> <?php echo $row["alamat"]?></td>
                <td> <?php echo $row["kota"]?></td>
                <td> <?php echo $row["no_telp"]?></td>
                <td> <?php echo $row["asal"]?></td>
                <td> <?php echo $row["agama"]?></td>
                <td>
                    <a href="editForm.php?un=<?php echo $row['un']; ?>">Edit</a>
                    <a href="hapus.php?un=<?php echo $row['un']; ?>">Hapus</a>
                </td>
                    </tr>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
    </table>
    <a class="btn btn-secondary" href="insertForm.html" role="button">Tambah</a>
    <a class="btn btn-danger" href="Logout.php" role="button">Logout</a>
   
</body>
</html>