<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <table>
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
            </tr>
            <?php
                include "koneksi.php";
                $query ="SELECT * FROM siswa";
                $result=mysqli_query($connect, $query);

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
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
    </body>
</html>